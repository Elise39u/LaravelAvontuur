<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaMonsters extends Model
{
   public function Monsters() {
        return $this->hasMany('App\Areas', 'id');
    }
}
