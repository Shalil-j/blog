<?php

namespace App\Http\Controllers;
use App\Models\post;

use Illuminate\Http\Request;

class viewblog extends Controller
{
    public function view($id)
    {
        $post=Post::find($id);
        return view("viewblog",["posts"=>$post]);  
    }
}
