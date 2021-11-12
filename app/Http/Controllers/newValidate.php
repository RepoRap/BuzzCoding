<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newValidate extends Controller
{
    public function validator($name,$age,$mobile,$cond,$email){
        $arr=array($name,$age,$mobile,$cond,$email);
        return view('pages.details',compact('arr'));

    }
}
