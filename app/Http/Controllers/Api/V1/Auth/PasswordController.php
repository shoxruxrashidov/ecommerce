<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function forgot()
    {
        return response()->json([
            'message' => 'Forgot password page'
        ]);
    }

    public function reset()
    {
        return response()->json([
            'message' => 'Reset password page'
        ]);
    }
}
