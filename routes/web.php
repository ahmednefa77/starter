<?php

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
    $data=[];
    $data['ID']=5;
    $data['name']="Ahmed";
    $data['slogan']="الحمد لله";
    return view('welcome',compact('dataph'));
});
Route::get('/users','Front\Firstcontroller@showmycontroller')->name('x');
Route::namespace("Front")->group(function(){

    Route::get('Admin','UserController@show');
});
Route::get("login",function(){
    return "you must be logged";
})->name('login');
Route::resource('news','NewsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
