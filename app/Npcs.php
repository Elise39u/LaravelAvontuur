<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Npcs extends Model
{
    public function Dialogs() {
        return $this->hasMany('App\Dialog', 'npc_id');
    }

/*    public function Answers() {
        return $this->hasMany('App\DialogAnswer', 'dialog_id');
    }

    public function Actions() {
        return $this->hasMany('App\DialogAnswerAction', 'dialog_answer_id');
    }*/
}
