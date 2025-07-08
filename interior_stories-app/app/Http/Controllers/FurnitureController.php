<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Furniture;

class FurnitureController extends Controller {

    public function displayAvailableFurnitures (Request $request) {
        return Furniture::where('status', 'available')->get();
    }
    
    public function displayFurnitureDetails ($id) {
        return Furniture::where('id', $id)->get();
    }
}