<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class player_parties extends Model
{
    public $timestamps = false;

    public function partyCheck()
    {
        return $this->hasMany('App\Party', 'id');
    }
}
