<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function register(Request $req){
        $user = new Post;
        $user->email = $req->input('email');
        $user->password = $req->input('password');
        //$user->slug = $request->slug;
        $user->save();

        return response()->json(["result" => "ok"], 201);
    }
    
}
