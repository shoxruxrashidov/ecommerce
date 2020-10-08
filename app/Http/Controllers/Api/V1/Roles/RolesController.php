<?php

namespace App\Http\Controllers\Api\V1\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index(){
        return response()->json([
            'message' => 'Roles List'
        ]);
    }

    public function show(){
        return response()->json([
            'message' => 'Roles show'
        ]);
    }

    public function update(){
        return response()->json([
            'message' => 'Roles update'
        ]);
    }

    public function delete(){
        return response()->json([
           'message' => 'Roles delete'
        ]);
    }
}
