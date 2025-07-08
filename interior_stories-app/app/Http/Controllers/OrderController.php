<?php

namespace App\Http\Controllers;

use Carbon\Traits\Timestamp;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Furniture;

class OrderController extends Controller
{
    public function createOrder(Request $request) {
        
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

        $orders = Order::where('status', 'pending')->where('user_id', $user_id)
            ->get();

        $furnitureIds = $orders->pluck('furniture_id');

        $furnitureList = Furniture::wherein('id', $furnitureIds)
            ->get();

        return response()->json($furnitureList);
    }

    public function deleteOrder($id) {
        $user = auth()->user();
        $order = Order::where('furniture_id', $id);
        
        if (!$order) {
            return response()->json(['message' => 'Article not found.'], 404);
        }
        $order->delete(); 
        
        Furniture::where('id', $id)
            ->update(['status' => 'available']); 

        return response()->json(['message' => 'Article cancelled'], 200);
    }

    public function completeOrders(Request $request) {

        $user = auth()->user();
        $user_id = $user->id;

        $orders = Order::where('status', 'pending')->where('user_id', $user_id)
            ->get();

        foreach ($orders as $order) {
            $order->update(['status' => 'completed']); 
            $furniture_id = $order->furniture_id;
    
            Furniture::where('id', $furniture_id)
                ->update(['status' => 'sold']);
        }
        
        return response()->json(['message' => 'Order completed'], 200);
    }
}
