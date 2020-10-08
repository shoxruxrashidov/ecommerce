<?php

namespace App\Http\Controllers\Api\V1\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function profile(){
        return response()->json([
           'message' => 'Settings profile'
        ]);
    }
}
