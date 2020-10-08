<?php

namespace App\Http\Controllers\Api\V1\Team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        return response()->json([
           'message' => 'Team List'
        ]);
    }

    public function show(){
        return response()->json([
           'message' => 'Team show'
        ]);
    }

    public function update(){
        return response()->json([
           'message' => 'Team Update'
        ]);
    }

    public function delete(){
        return response()->json([
           'message' => 'Team delete'
        ]);
    }
}
