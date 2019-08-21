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
    return view('welcome');
});

Route::get('/abc', function () {
    return view('test');
});
Route::get('/start', function () {
    return view('start.index');
});

//Route::get('/login', 'LoginController@index');
Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);

Route::post('/login', ['uses'=>'LoginController@verify']);


Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/uhome', 'uHomeController@index')->name('uhome.index');

Route::get('/add', 'HomeController@add');
Route::post('/add', 'HomeController@create');
Route::get('/addcar', 'HomeController@addcar');
Route::post('/addcar', 'HomeController@createcar');

Route::get('/deletecar/{id}', 'HomeController@deletecar');
Route::post('/deletecar/{id}', 'HomeController@destroycar');
Route::get('/deletemember/{id}', 'HomeController@deletemember');
Route::get('/showprivate', 'HomeController@showprivate')->name('home.showprivate');
Route::get('/showmicro', 'HomeController@showmicro')->name('home.showmicro');
Route::get('/showpickup', 'HomeController@showpickup')->name('home.showpickup');
Route::get('/wishlist/{id}', 'HomeController@wishlist');
Route::get('/showwish', 'HomeController@showwish');
Route::get('/showhistory', 'HomeController@showhistory');
Route::get('/finalize', 'HomeController@finalize');

Route::get('/cancel/{id}', 'HomeController@cancel');
Route::post('/cancel/{id}', 'HomeController@cancelcar');


Route::get('/showcar', 'HomeController@showcar')->name('home.showcar');

Route::get('/showmember', 'HomeController@showmember')->name('home.showmember');

Route::get('/stdList', 'HomeController@show')->name('home.stdlist');
Route::get('/ustdList', 'uHomeController@show')->name('uhome.ustdlist');

Route::get('/edit/{id}', 'HomeController@edit');
Route::post('/edit/{id}', 'HomeController@update');
Route::get('/uedit/{sid}', 'uHomeController@edit');
Route::post('/uedit/{sid}', 'uHomeController@update');
Route::get('/details/{sid}', 'HomeController@details')->name('home.details');
Route::get('/udelete/{sid}', 'uHomeController@delete');
Route::post('/udelete/{sid}', 'uHomeController@destroy');

Route::get('/logout', 'logoutController@index');
Route::get('/editcar/{id}', 'HomeController@editcar');
Route::post('/editcar/{id}', 'HomeController@updatecar');

Route::get('/history/{id}', 'HomeController@history')->name('home.history');
Route::post('/history/{id}', 'HomeController@history')->name('home.paydone');




