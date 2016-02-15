<?php

namespace App\Extensions;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Hashing\Hasher as HasherContract;

class ErsUserProvider implements UserProvider
{
    /**
     * The hasher implementation.
     *
     * @var \Illuminate\Contracts\Hashing\Hasher
     */
    protected $hasher;

    /**
     * The Eloquent user model.
     *
     * @var string
     */
    protected $model;

    public function __construct(HasherContract $hasher, $model)
    {
        $this->model = $model;
        $this->hasher = $hasher;

       // dd($this->model);
    }

    public function retrieveById($identifier)
    {
        return $this->createModel()->newQuery()->find($identifier);
    }

    public function retrieveByToken($identifier, $token)
    {
        $model = $this->createModel();

        return $model->newQuery()
            ->where($model->getKeyName(), $identifier)
            ->where($model->getRememberTokenName(), $token)
            ->first();
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        $user->setRememberToken($token);

        $user->save();
    }

    public function retrieveByCredentials(array $credentials)
    {
        //test if user is in myERS reject if not

        if (!$credentials['isInDB']) {
            return null;
        }


        //is the user in local DB?
        $query = $this->createModel()->newQuery();
        
        //@todo add check if ers_id is in invitation_permissions table. If not reject the user.	

        
        $result = $this->checkUser($credentials, $query);


        //if the user is not in DB but in MyERS we need to create that user
        if (!$result) {
            $this->userCreateOrUpdate($credentials, false);
            //as it is the first login of the person, we need 

            //to add this person as the reviewer of his own group
            //$this->addUserAsReviewer($credentials);

            return $this->checkUser($credentials, $query);
        }

        //if the user is in DB we update it in case he chaged his details
        $this->userCreateOrUpdate($credentials, $result['attributes']['id']);
        
        //$this->addUserAsReviewer($credentials);

        return $result;
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        $plain = $credentials['password'];

        return $this->hasher->check($plain, $user->getAuthPassword());
    }
    /**
     * Create a new instance of the model.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function createModel()
    {
        $class = '\\'.ltrim($this->model, '\\');

        return new $class;
    }

    /**
     * Gets the hasher implementation.
     *
     * @return \Illuminate\Contracts\Hashing\Hasher
     */
    public function getHasher()
    {
        return $this->hasher;
    }

    /**
     * Sets the hasher implementation.
     *
     * @param  \Illuminate\Contracts\Hashing\Hasher  $hasher
     * @return $this
     */
    public function setHasher(HasherContract $hasher)
    {
        $this->hasher = $hasher;

        return $this;
    }

    /**
     * Gets the name of the Eloquent user model.
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets the name of the Eloquent user model.
     *
     * @param  string  $model
     * @return $this
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

     /**
     * Create a new user or update an existing one.
     *
     * @param  array  $credentials
     * @param  sting  $id
     * @return $this
     */

    protected function userCreateOrUpdate($credentials, $id)
    {
        $user = [
                'name'        => $credentials['name'],
                'username'    => $credentials['username'],
                'password'    => bcrypt($credentials['password']),
                'email'     => $credentials['email'],
                'group'     => $credentials['group'],
                'ers_id'    => $credentials['ers_id']
                ] ;

        if (!$id) {
            User::Create($user);
        }
        
        if ($id) {
            User::find($id)->update($user);
        }
    }

     /**
     * Create a new reviewer or update an existing one.
     *
     * @param  array  $credentials
     * @return $this
     */
    protected function addUserAsReviewer($credentials)
    {
        $user = [
                'title'      => $credentials['title'],
                'last_name'  => $credentials['last_name'],
                'first_name' => $credentials['first_name'],
                'email'      => $credentials['email'],
                'ers_id'     => $credentials['ers_id'],
                'user_id'    => $credentials['ers_id']
                ] ;

        //check is the user is alredy a reviewer in his own group (added by himself...)
        $selfAsReviewer = DB::table('reviewers')
                            ->where('ers_id', $user['ers_id'])
                            ->where('user_id', $user['ers_id'])
                            ->get();
        if (!$selfAsReviewer) {
            Reviewer::Create($user);
        }
    }

    protected function checkUser($credentials, $query)
    {
        foreach ($credentials as $key => $value) {
            if (Str::contains($key, 'username')) {
                $query->where($key, $value);
            }
            return $query->first();
        }
    }
}
