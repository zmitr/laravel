<?php
namespace App\Providers\viewComposers;

use Illuminate\Contracts\View\View;
use App\Maintext;

class siteComposers {
    public function compose(View $view){
        $name = "Название сайта";
        $s_objs = Maintext::where('status','12')->get();
        //dd($s_objs);
        $view->with('name',$name)->with('s_objs',$s_objs);


    }


}


