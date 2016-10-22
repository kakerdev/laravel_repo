<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    public $table = 'repository';
    public function repo() {
        return $this->hasMany('App\Accounts');
    }
}
