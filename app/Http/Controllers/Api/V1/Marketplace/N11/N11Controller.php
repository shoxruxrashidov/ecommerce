<?php

namespace App\Http\Controllers\Api\V1\Marketplace\N11;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class N11Controller extends Controller
{
    public function push(){
        return response()->json([
            'message' => 'N11 Push'
        ]);
    }
}
