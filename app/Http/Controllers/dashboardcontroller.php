<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class dashboardcontroller extends Controller
{
    public function show_post(Request $req){
        $userid = $req->user()->id;
        $posts=post::where('user_id',$userid)->get();
        return view('/dashboard',['posts'=>$posts]);
    }
}
