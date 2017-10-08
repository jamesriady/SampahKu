<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemulung extends Model
{
    protected $fillable = ['name', 'gender', 'no_identitas', 'phone'];
    public function user(){
    	return $this->hasOne('App\User');
    }
}
