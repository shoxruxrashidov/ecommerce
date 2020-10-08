<?php

namespace App\Http\Controllers\Api\V1\ProductOptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductOptionsController extends Controller
{
    public function index(){
        return response()->json([
            'message' => 'Product Option list'
        ]);
    }

    public function create(){
        return response()->json([
           'message' => 'Product Options Create'
        ]);
    }

    public function show() {
        return response()->json([
            'message' => 'Product Options show'
        ]);
    }

    public function update(){
        return response()->json([
           'message' => 'Product Options Update'
        ]);
    }

    public function delete(){
        return response()->json([
           'message' => 'Product Options Delete'
        ]);
    }
}
