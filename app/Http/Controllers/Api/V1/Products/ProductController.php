<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return response()->json([
           'message' => 'Products list'
        ]);
    }

    public function show(){
        return response()->json([
           'message' => 'Products show'
        ]);
    }

    public function update(){
        return response()->json([
           'message' => 'Products update'
        ]);
    }

    public function delete(){
        return response()->json([
           'message' => 'Products delete'
        ]);
    }
}
