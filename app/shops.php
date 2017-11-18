<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shops extends Model
{
    public function getShopItems() {
        return $this->hasMany('App\item_type', 'shop_category');
    }
}
