<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monster_type extends Model
{
    public function getMonster() {
        $this->hasMany('App\Monsters');
    }
}
