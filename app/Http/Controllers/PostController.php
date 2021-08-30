<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function Inicio(Request $request){
        $p = DB::table('posts') -> 
                orderBy('created_at','desc') -> 
                paginate(3);
        return view('inicio', [ "posts" => $p ]);
    }
}
