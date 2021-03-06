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

use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

/*Route::get('login', function () {
    return view('login');
});*/
// Display all SQL executed in Eloquent
/*Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
    var_dump($query->sql);p
    var_dump($query->bindings);
    var_dump($query->time);
});*/

Route::get('menu/{id?}', 'MenuController@menu');

//Route::get('/user', 'UserController@index');

//Route::get('/user/show/{id?}','UserController@show');

Route::resource('user','UserController');
//Auth::routes();
// Authentication Routes...
Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login2');
Route::post('/logout', 'AuthController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
