<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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

 Route::get("user" , "selfController@getUserId")->name('selfController');
// Route::resource('reso', 'resourceController');

// Route::get("userPost" , "selfController@userFormPost");
// Route::post("userPost", function () {
//         return " Hello";});

 Route::resource('use', 'resourceController');

 Route::resource('students', 'studentController');

 Route::resource('files', 'fileSaveController');

 Route::get('fil/{lan}' , function($lan){
           App::setLocale($lan);
           return view ('fileStore');
 });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('lang/{local}' ,function($lang){
    Session::put('locale' ,$lang);
    return redirect()->back();
});