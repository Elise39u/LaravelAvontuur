<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monsters extends Model
{
    public function getMonster() {
        return $this->hasMany('App\monster_type', 'id');
    }
}
