<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activation extends Model
{
	protected $fillable = [
        'code'
    ];
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
