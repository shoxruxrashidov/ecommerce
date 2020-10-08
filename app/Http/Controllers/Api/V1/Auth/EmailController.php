<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function verify()
    {
        return response()->json([
            'message' => 'Verify email page'
        ]);
    }

    public function resend()
    {
        return response()->json([
            'message' => 'Resend email page'
        ]);
    }
}
