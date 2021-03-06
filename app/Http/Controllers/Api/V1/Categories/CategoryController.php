<?php

namespace App\Http\Controllers\Api\V1\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return response()->json([
            "message" => 'Category List'
        ]);
    }

    public function create(){
        return response()->json([
            "message" => 'Category Create'
        ]);
    }

    public function show(){
        return response()->json([
            "message" => 'Category Show'
        ]);
    }

    public function update(){
        return response()->json([
            "message" => 'Category Update'
        ]);
    }

    public function delete(){
        return response()->json([
            "message" => 'Category Delete'
        ]);
    }
}
