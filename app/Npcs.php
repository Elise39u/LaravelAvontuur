<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Npcs extends Model
{
    public function dialoug() {
        return $this->hasMany('App\NpcDialoug', 'npc_id');
    }
}
