<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Auth;
use App\Http\Requests\GalleryRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
	
	// public function postindex()
	// {
		
		// $obj = new Gallery;
		// $obj->name = $_POST['name'];
		// $obj->body = $_POST['body'];
		// $obj->user_id = (isset(Auth::user()->id))?Auth::user()->id:0;
		// $obj->picture = '';
		// $obj->status = '';
		// $obj->catalog_id = 0;
		// $obj->save();
		// return redirect()->back();
		
		
	// }
	public function postindex(GalleryRequest $r)
	{

		$r['user_id'] = (isset(Auth::user()->id))?Auth::user()->id:0;
		$r['picture'] = '';
		$r['status'] = '';
		$r['catalog_id'] = 2;
		unset($r['_token']);
		//dd($r->All());
		Gallery::create($r->All());
		 return redirect()->back();
	}
}
