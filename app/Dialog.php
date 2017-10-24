<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dialog extends Model
{
    public function Answers() {
        return $this->hasMany('App\DialogAnswer', 'dialog_id');
    }
}
