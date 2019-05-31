<?php

namespace App\Libs;
use Image;
use Auth;

class Imag {
	public function __construct() {
	
	}
	
	public function URL($path = NULL, $directory = NULL, $name = NULL) {
		if ($path != NULL) {
			if ($directory != NULL){
				$dir = public_path().'/'.$directory.'/';
			}
			else {
				$dir = public_path().'/uploads/';
			};
			if ($name != NULL){
				$filename = $name;
			}
			else {
				$filename = time().'.jpg';
			};
			$img = Image::make($path);
			$img -> save($dir.$filename);
			$img -> resize(200,NULL, function ($constraint) { $constraint -> aspectRatio(); });
			$img -> save($dir.'s_'.$filename);		
		}
		else {
			return false;
		};
		
		return $filename;
	}
}



