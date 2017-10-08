<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function activation()
    {
        return $this->hasOne('App\Activation', 'user_id');
    }

    public function admin(){
        return $this->belongsTo('App\Admin');
    }

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function pemulung(){
        return $this->belongsTo('App\Pemulung');
    }
}
