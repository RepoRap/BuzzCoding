<?php

use App\Http\Controllers\newController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/AboutUs', function () {
    $names=['Abi Sai','Adamobrich Ruddy','Bose Momodu','Bradley Adewumi','Fethawi Solomon','Hanna Adda','Ibukun Odunoren','John Solomon','Nicholas Springer','Remy Benna'];
    return view('pages.about',compact('names'));
});

Route::get('/feedback', function () {
    return view('pages.feedback');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/test/{id}', function ($id) {
    return view('pages.vartest',compact('id'));
});
Route::get('/newTest', [newController::class,'newFunc']);
Route::get('/newTester/{name}/{age}/{mobile}/{cond}/{email}',[newController::class,'validator']);
Route::get('/App',[App\Http\Controllers\Appointments::class,'index']);
Route::get('/AppEntry',[App\Http\Controllers\Appointments::class,'create']);
Route::post('/AppEntry_1',[App\Http\Controllers\Appointments::class,'store']);
Route::post('/AppEntry_2',[App\Http\Controllers\fileUploader::class,'upload']);

//Route::resources('apps','App\Http\Controllers\Appointments');
