<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserQuest extends Model
{
    public $timestamps = false;
    public function checkQuest()
    {
        return $this->hasMany('App\Quest', 'id');
    }
}
