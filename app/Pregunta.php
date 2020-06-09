<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
	protected $fillable = [
		'pregunta', 'respuestaPregunta', 'respuestaEstudiante', 'test_id',
	];
	
    public function test(){
    	return $this->belongsTo('App\Test');
    }
}
