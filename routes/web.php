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

Route::resource('user', 'userRegisterController');


Route::middleware(['auth'])->group(function(){
      Route::get('auth/user', function () {
           return " this is user Auth page ";
      });
      Route::get('auth/home', function () {
           return " yhis is Home Auth PAge ";   
      });
      Route::get('ourLogin' , 'myLoginControl@getForm')->name('getForm');
      Route::post('ourLogin' , 'myLoginControl@postForm')->name('postForm');
});

Route::middleware(['adminMW:admin'])->group(function () {

    Route::get('admin/user', function () {
         return " admin user page Auth";
    });
    Route::get('admin/products', function () {
        return " Admin Product Auth page";
    });
    Route::get('admin/cat', function () {
        return " Admin Category Auth page";
    });
});

Route::get('sendMail' , 'mailController@sendMail');