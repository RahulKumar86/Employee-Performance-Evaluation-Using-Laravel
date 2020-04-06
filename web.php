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
(THIS ROUTING IS DONE BY RAHUL KUMAR-02)
Route::get('/', function () {
    return view('welcome');
});




Route::view('login','userform');
 Route::post('submit','UserForm@submit');


Route::view('/form','companyform');
Route::post('submit','Companies@save');

Route::view('/empform','employform');
Route::post('submit','Userss@index');

Route::view('/display','usersview');
Route::post('/update','usersvieww@update');

Route::view('/delete','usersdelete');
Route::post('/del','usersdel@delete');



