<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $guarded = [];

    public function orders_products() {
        return $this->hasMany(Orders_Products::class);
    }
}
