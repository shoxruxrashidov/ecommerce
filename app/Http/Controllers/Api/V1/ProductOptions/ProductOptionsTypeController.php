<?php

namespace App\Http\Controllers\Api\V1\ProductOptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductOptionsTypeController extends Controller
{
    public function index(){
        return response()->json([
            'message' => 'Products Options Type List'
        ]);
    }

    public function filter(){
        return response()->json([
            'message' => 'Products options type filter'
        ]);
    }
}
