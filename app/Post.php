<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'titles', 'description', 'user_id', 'tutorial_id',
	];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function tutorial(){
    	return $this->belongsTo('App\Test');
    }
}
