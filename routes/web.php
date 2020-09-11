<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\App;

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

Route::get('/insert', function () {
    return view('create');
});
Route::get('/new-login', function (){
    return view('newlogin');
});

Route::get('/new-register', function (){
    return view('newregister');
});

Route::get('/new-forget', function (){
    return view('newforget');
});




Route::view('/contact', 'contact');
Route::post('/contact.blade.php', 'App\Http\Controllers\contactcont@save');
Route::get('/home', 'App\Http\Controllers\frontendcont@home');
Route::get('/about', 'App\Http\Controllers\frontendcont@about');
Route::get('/welcome', 'App\Http\Controllers\frontendcont@welcome');
Route::get('/crud', 'App\Http\Controllers\frontendcont@crud');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
