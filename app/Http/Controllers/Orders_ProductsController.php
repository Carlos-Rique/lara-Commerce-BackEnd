<?php

namespace App\Http\Controllers;

use App\Orders_Products;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Orders_ProductsController extends Controller
{
    public function store(Request $request) {
        $data = $request->validate([
            'product_id' => 'required',
            'order_id' => 'required'
        ]);

        $orders_products = Orders_Products::create($data);


    }
}
