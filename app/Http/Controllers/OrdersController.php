<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function store(Request $request) {

        $data = $request->validate([
            'user_id' => 'required',
            'total' => 'required'
        ]);

        $data['sales_code'] = rand();
        $data['status'] = 'Realizada';

        $orders = Orders::create($data);
        return $orders->id;
        
    }
}
