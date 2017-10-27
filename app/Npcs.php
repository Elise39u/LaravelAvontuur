<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Npcs extends Model
{
    public function Dialogs() {
        return $this->hasMany('App\Dialog', 'npc_id');
    }
}
