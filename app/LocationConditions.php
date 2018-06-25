<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationConditions extends Model
{
    public function conditions() {
        return $this->hasMany('App\Location', 'id');
    }
}
