<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return response()->json([
            'message' => 'Login page'
        ]);
    }

    public function twofactor(){
        return response()->json([
            'message' => '2fa auth'
        ]);
    }

    public function lock(){
        return response()->json([
            'message' => 'lock page'
        ]);
    }

    public function refresh(){
        return response()->json([
            'message' => 'refresh token page'
        ]);
    }
}
