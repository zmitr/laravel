<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Gallery;

class ProductController extends Controller
{
   public function postindex (){
	//echo (int)$_POST['id']; 
	$obj = Gallery::find((int)$_POST['id']);

	return view('ajax.product',compact('obj'));
	}
	
	//
}
