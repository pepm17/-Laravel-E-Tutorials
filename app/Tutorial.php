<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
	protected $fillable = [
		'name', 'tutor_id',
	];

    public function tutor(){
        return $this->belongsTo('App\User');
    }
    public function users(){
    	return $this->belongsToMany('App\User', 'user_tutorial');
    }

    public function posts(){
    	return $this->hasMany('App\Post');
    }

    public function tests(){
    	return $this->hasMany('App\Test');
    }
}