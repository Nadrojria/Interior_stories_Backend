<?php

namespace App\Http\Controllers;

use Carbon\Traits\Timestamp;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //method to create new order : POST 

    public function newOrder(Request $request, )
    {


        $user = Auth::user();
        $user_id = $user->id;

        $Orderdata = $request->validate([


            'id' => 'required|unique:orders',
            'user_id' => $user_id,
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
