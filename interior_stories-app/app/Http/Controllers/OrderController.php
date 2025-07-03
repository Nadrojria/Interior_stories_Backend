<?php

namespace App\Http\Controllers;

use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //method to create new order : POST 

    public function newOrder (Request $request,){

        $Orderdata = $request->validate([
            'id' => 'required|unique:orders',
            $user_id = Request::get('user_id'),
           // 'user_id'=>'required|unique:user',
            'furniture_id' => 'required',
            'status' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required'
        ]);

         $order = Order::create($Orderdata);

        return $order;
    }




    // method to get all order 




    // method to delete order if pending

}
