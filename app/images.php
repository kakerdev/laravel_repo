<?php

namespace App;

use Doctrine\DBAL\Schema\Schema;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    //
    protected $fillable = ['id_repository'];

    public function images_rel() {
        return $this->hasMany('App\Repository');
    }
}
