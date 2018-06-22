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
        'name', 'email', 'password','address','surname','phone','facebook','twitter','youtube','city','country_id','photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function jobs(){
        return $this->hasMany('App\Experience')->where('type','1');
    }
        public function studies(){
        return $this->hasMany('App\Experience')->where('type','2');
    }

        public function abilities(){
        return $this->hasMany('App\Ability');
        }

        public function testimonies(){
        return $this->hasMany('App\Testimony');
        }

        public function country(){
        return $this->hasOne('App\Country','id','country_id');
        }
}
    

