<?php

namespace App\Http\Controllers\Api\V1\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list(){
        return response()->json([
            'message' => 'Order list'
        ]);
    }
}
