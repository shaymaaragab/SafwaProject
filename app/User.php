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
   protected $guarded = [
        'id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Blog(){

        return $this->hasMany('App\models\Blog', 'User_id');
    }

}