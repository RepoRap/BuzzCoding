<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileUploader extends Controller
{
    public function upload(Request $request){
        $newVar=$request->file('userfile');
        //echo $newVar;
        //$fileNameStore=$request->file('userfile')->extension();
        $fn='userImage_'.time().'.jpg';
        echo $fn;
        $saver=$request->file('userfile')->storeAs('public/storage',$fn);

    }
}
