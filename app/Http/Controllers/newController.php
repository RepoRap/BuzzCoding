<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    public function newFunc(){
        return 'Hello World from BuzzCode!!';
    }

    public function validator($name,$age,$mobile,$cond,$email){
        $arr=array($name,$age,$mobile,$cond,$email);
        return view('pages.details',compact('arr'));

    }
}
