<?php

namespace App\Http\Controllers\Api\V1\ProductOptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductOptionsController extends Controller
{
    public function index(){
        return response()->json([
            'message' => 'Products Option list'
        ]);
    }

    public function create(){
        return response()->json([
           'message' => 'Products Options Create'
        ]);
    }

    public function show() {
        return response()->json([
            'message' => 'Products Options show'
        ]);
    }

    public function update(){
        return response()->json([
           'message' => 'Products Options Update'
        ]);
    }

    public function delete(){
        return response()->json([
           'message' => 'Products Options Delete'
        ]);
    }
}
