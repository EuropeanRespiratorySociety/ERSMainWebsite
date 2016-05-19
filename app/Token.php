<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tokens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [      
                    'token',
                    'refresh_token',
                    'has_expired',
                    'expires_in'
    ];
}
