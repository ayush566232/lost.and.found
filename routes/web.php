<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/register',['as'=>'register','uses'=>'Web\FormController@registercontroller']);
Route::get('/',['as'=>'login','uses'=>'Web\FormController@logincontroller']);
Route::get('/lostitem',['as'=>'lost','uses'=>'Web\FormController@lostitemcontroller']);
Route::get('/founditem',['as'=>'found','uses'=>'Web\FormController@founditemcontroller']);
Route::get('/searchlost',['as'=>'searchlost','uses'=>'Web\FormController@searchlostcontroller']);
Route::get('/searchfound',['as'=>'searchfound','uses'=>'Web\FormController@searchfoundcontroller']);

Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});