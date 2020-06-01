<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_Products extends Model
{
    protected $guarded = [];

    public function order() {
        return $this->belongsTo(Orders::class);
    }

    public function product() {
        return $this->belongsTo(Products::class);
    }


}
