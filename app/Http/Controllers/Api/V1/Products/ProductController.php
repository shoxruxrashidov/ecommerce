<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return response()->json([
           'message' => 'Product list'
        ]);
    }

    public function show(){
        return response()->json([
           'message' => 'Product show'
        ]);
    }

    public function update(){
        return response()->json([
           'message' => 'Product update'
        ]);
    }

    public function delete(){
        return response()->json([
           'message' => 'Product delete'
        ]);
    }
}
