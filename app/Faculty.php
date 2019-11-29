<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Faculty extends Authenticatable
{   
    protected $guard = 'faculty';
    protected $fillable = [
        'name', 'email', 'password', 
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];
}