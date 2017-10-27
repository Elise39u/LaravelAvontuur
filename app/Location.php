<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function choices()
    {
        return $this->hasMany('App\Choice', 'from_location_id');
    }
}
