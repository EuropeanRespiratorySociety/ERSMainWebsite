<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);

        dd($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        //$throttles = $this->isUsingThrottlesLoginsTrait();

        /*if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }*/

        $credentials = $this->getCredentials($request);

        $username = $credentials['username'];
        $password = $credentials['password'];

        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('ers')
                ->wsdl(env('ERS_WEBSERVICE'))
                ->trace(true)                                        
                ->cache(WSDL_CACHE_NONE);
        });

        $data = [
            'whitepaw' => env('ERS_WHITEPAW'),
            'username'   => $credentials['username'],
            'password'     => $credentials['password']
        ];

        // Using the added service
          $result = SoapWrapper::service('ers', function ($service) use (&$data) {
                $data = $service->call('CheckLogin', [$data]);
            });
          dd($result);
       
            $credentials['last_name'] = $data->lname;
            $credentials['first_name'] = $data->fname;
            $credentials['title'] = $data->title;
            $credentials['email'] = $data->email;
            $credentials['ers_id'] = $data->partnerId;
            $credentials['group'] = $data->group1;
            $credentials['isInDB'] = $data->isInDB;

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }

        return redirect($this->loginPath())
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);


    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => 'required|max:255',
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'username' => 'required|max:255',
            'ers_id' => 'required|max:10',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'title' => $data['title'],
            'last_name' => $data['last_name'],
            'first_name' => $data['first_name'],
            'username' => $data['username'],
            'ers_id' => $data['ers_id'],
            'group' => $data['group'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
