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

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/trial', function() {
        return view('trial');
    });
    Route::get('/form',function(){
        return view('form');
    });



Route::view('login','userform');
 Route::post('submit','UserForm@submit');


Route::get('db','dataController@checkDB');
Route::get('db1','pracController@checkDB1');
