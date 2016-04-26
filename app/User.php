<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'facebook_id', 'avatar', 'verify_code', 'types', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();
        User::creating(function ($user) {
            $user->verify_code = md5(str_random(64) . time()*64);
            $user->types = ($user->types)? $user->types : 'member';
        });
    }

    public function topics()
    {
        return $this->hasMany(Topic::class, 'user_id');
    }
}
