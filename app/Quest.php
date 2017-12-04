<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    public function checkQuest()
    {
        return $this->hasMany('App\PlayerQuest', 'player_id');
    }
}
