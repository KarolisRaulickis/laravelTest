<?php

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
 
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{id}', function ($id) {
    return 'hi ' . $id;
});



Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
*/

Route::get('/', function () {
    return view('pages.index');
});
//Route::get('/', 'MyController@index');
Route::resource('DB', 'MyController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/BootstrapTest', function () {
    return view('pages.BootstrapTest');
});
