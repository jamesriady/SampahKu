<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'gender', 'phone'];
    public function user(){
    	return $this->hasOne('App\User');
    }
}
