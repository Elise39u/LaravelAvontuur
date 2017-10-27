<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    public function Location() {
        return $this->hasMany('App\Location', 'id');
    }
}
