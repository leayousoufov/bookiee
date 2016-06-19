<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Friend extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The roles that belong to the user.
     */
    public function friends()
    {
        return $this->belongsToMany('User', 'friends', 'user_id', 'friend_id');
    }
}
