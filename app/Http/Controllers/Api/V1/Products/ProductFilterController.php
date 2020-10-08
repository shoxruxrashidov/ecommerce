<?php

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductFilterController extends Controller
{
    public function filter(){
        return response()->json([
           'message' => 'Product filter'
        ]);
    }
}
