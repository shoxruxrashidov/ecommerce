<?php

namespace App\Http\Controllers\Api\V1\Marketplace\Trendyol;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrendyolController extends Controller
{
    public function push(){
        return response()->json([
            'message' => 'Trendyol push'
        ]);
    }
}
