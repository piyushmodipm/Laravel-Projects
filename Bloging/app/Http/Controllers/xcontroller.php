<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class xcontroller extends Controller
{
    public function viewer($value){
        return view('Blog',['v'=>$value]);
    }
}
