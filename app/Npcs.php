<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Npcs extends Model
{
    public function dialoug() {
        return $this->hasMany('App\Dialoug', 'npc_id');
    }

    public function dialougAnswers() {
        return $this->hasMany('App\DialougAnswers', 'dialoug_id');
    }
}
