<?php

namespace App\Http\Controllers;

use Carbon\Traits\Timestamp;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Furniture;

class OrderController extends Controller
{
    public function newOrder(Request $request) {
        
        $user = auth()->user();
        $user_id = $user->id;
        
        $Orderdata = Order::create([
            'user_id' => $user_id,
            'furniture_id' => $request->furniture_id,
            'status' => $request->status ?? 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Furniture::where('id', $Orderdata->furniture_id)
            ->update(['status' => 'unavailable']); 

        return response()->json([
            'message' => 'Added to cart',
            'order' => $Orderdata,
        ], 200);
    }

    public function getOrders(Request $request) {

        $user = auth()->user();
        $user_id = $user->id;

        return Order::where('status', 'pending')->where('user_id', $user_id)
            ->get();
    }

    public function deleteOrder($id) {

        $user = auth()->user();
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Article not found.'], 404);
        }

        $furniture_id = $order->furniture_id;
        $order->delete();
        
        Furniture::where('id', $furniture_id)
            ->update(['status' => 'available']); 

        return response()->json(['message' => 'Article cancelled'], 200);
    }
}
