<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function conditions()
    {
        return $this->hasMany('App\ChoiceConditions', 'choice_id');
    }
}
