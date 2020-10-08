<?php

namespace App\Http\Controllers\Api\V1\Brands;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Brands List'
        ]);
    }

    public function create()
    {
        return response()->json([
            'message' => 'Brand Create'
        ]);
    }

    public function show()
    {
        return response()->json([
            'message' => 'Brand Show'
        ]);
    }

    public function update()
    {
        return response()->json([
            'message' => 'Brand Edit'
        ]);
    }

    public function delete()
    {
        return response()->json([
            'message' => 'Brand Delete'
        ]);
    }
}
