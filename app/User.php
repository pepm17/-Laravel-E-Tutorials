<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'identification', 'isTutor', 'password', 'id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tutorialsMine(){
        return $this->hasMany('App\Tutorial');
    }

    public function tutorials(){
        return $this->belongsToMany('App\Tutorial');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function tests(){
        return $this->hasMany('App\Test');
    }
}
