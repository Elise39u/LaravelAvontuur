<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item_type extends Model
{
    public function getShopItems() {
        return $this->hasMany('App\shops', 'category');
    }

    public function getItemName() {
        return $this->hasMany('App\inventory_item', 'item_id');
    }
}
