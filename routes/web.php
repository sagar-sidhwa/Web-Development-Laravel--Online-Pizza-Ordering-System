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
    return view('pages.index');
});

//This is a Controller Way of Routing
Route::get('/index','PagesController@index');

//This is Normal Way of Routing 
Route::get('/menu', function () {
    return view('pages.menu');
});

Route::get('/about', function () {
    return view('pages.about');
});



Route::get('/type1', function () {
    return view('types.type1');
});

Route::get('/type2', function () {
    return view('types.type2');
});

Route::get('/type3', function () {
    return view('types.type3');
});

Route::get('/type4', function () {
    return view('types.type4');
});

Route::get('/type5', function () {
    return view('types.type5');
});

Route::get('/type6', function () {
    return view('types.type6');
});

//<link rel="stylesheet" href="{{asset('css/app.css')}}">

Route::resource('/order','OrderController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact','unuserController@store');


Route::get('/select', function () {
    return view('pages.select');
});

Route::post('/select','OrderController@store');

Route::get('/order/delete/{id}','OrderController@delete');

Route::get('user/settings',[
    'uses' => 'UserController@index',
    'as' => 'user.settings'
]);

Route::post('user/settings/update',[
    'uses' => 'UserController@update',
    'as' => 'user.settings.update'
]);





