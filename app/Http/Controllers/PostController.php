<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function Inicio(Request $request){
        $p = Post::all();
        return view('inicio', [ "posts" => $p ]);
    }
}
