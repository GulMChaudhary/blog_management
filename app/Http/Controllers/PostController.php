<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function getBlogIndex(){
        return view('frontend.blog.index');
    }
    public function getSinglePost($post_id, $end= 'frontend'){
        return view($end.'.blog.index');
    }
}
