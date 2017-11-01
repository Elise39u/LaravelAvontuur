<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventories extends Model
{
    public function inventoryCheck() {
        return $this->hasOne('App\User', 'inventory_id');
    }

    public function getInventoryItems() {
        return $this->hasMany('App\inventory_item', 'inventory_id');
    }
}
