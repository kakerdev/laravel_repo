<?php

namespace App;


use Illuminate\Auth\Passwords\CanResetPassword as CanResetPassword;
use Illuminate\Database\Eloquent\Model;



class Accounts extends Model
{
    use CanResetPassword;

    protected $fillable = ['firstname', 'lastname', 'email', 'password', 'created_at', 'updated_at'];
    protected $hidden = ['remember_token'];
}
