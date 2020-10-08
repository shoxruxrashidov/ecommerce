<?php

namespace App\Http\Controllers\Api\V1\Permissions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function index(){
        return response()->json([
           'message' => 'Permissions list'
        ]);
    }

    public function show(){
        return response()->json([
            'message' => 'Permissions show'
        ]);
    }

    public function update(){
        return response()->json([
           'message' => 'Permissions Update'
        ]);
    }

    public function delete(){
        return response()->json([
           'message' => 'Permissions delete'
        ]);
    }
}
