<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $fillable = [
		'name', 'tutorial_id', 'estudiante_id',
	];
    public function estudiante(){
    	return $this->belongsTo('App\User');
    }

    public function tutorial(){
    	return $this->belongsTo('App\Tutorial');
    }

    public function preguntas(){
    	return $this->hasMany('App\Pregunta');
    }
}
