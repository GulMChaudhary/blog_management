<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function getControllerIndex(){
        return view('frontend.other.contact');
    }
}
