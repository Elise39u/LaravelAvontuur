<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DialogAnswer extends Model
{
    public function Actions() {
        return $this->hasMany('App\DialogAnswerAction', 'dialog_answer_id');
    }
}
