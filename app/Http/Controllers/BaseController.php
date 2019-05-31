<?php

namespace App\Http\Controllers;

use App\Gallery;

class BaseController extends Controller
{
    public function getIndex(){
        $objs = Gallery::OrderBy('Id','DESC')->paginate(8);
		return view('welcome',compact('objs')) ;
    }
}
