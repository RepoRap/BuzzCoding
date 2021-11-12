<?php

namespace App\Http\Controllers;
use App\Models\BookApp;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class Appointments extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $openapp= BookApp::all();
        return view('appointments.openapp',compact('openapp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $openentry = new BookApp();
        $openentry->name='NewUserFromLaravel';
        $openentry->age='45';
        $openentry->mobile='7212721272';
        $openentry->cond='Physical';
        $openentry->email='test@test.com';
        $openentry->save();
        $openapp= BookApp::all();
        return view('appointments.openapp',compact('openapp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $openentry = new BookApp();
        $openentry->name=$request->input('name');
        $openentry->age=$request->input('age');
        $openentry->mobile=$request->input('mobile');
        $openentry->cond=$request->input('cond');
        $openentry->email=$request->input('email');
        $openentry->save();
        $minute=5;
        $response_new= new Response("helllo");
        $response_new->withCookie(cookie("User",$request->input('name'),$minute));
        return view('pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
