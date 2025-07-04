<?php

namespace App\Http\Controllers;

use Carbon\Traits\Timestamp;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function newOrder(Request $request)
    {
        $user = auth()->user();
        $user_id = $user->id;
        
        $Orderdata = Order::create([
            'user_id' => $user_id,
            'furniture_id' => $request->furniture_id,
            'status' => $request->status ?? 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        
        return response()->json([
            'message' => 'Added to cart',
            'order' => $Orderdata,
        ], 200);
    }
}
