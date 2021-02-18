<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class myLoginControl extends Controller
{
    //

    public function getForm(){
        return view ('auth.oulLogin')  ;
    }

    public function postForm( Request $request ){
             // dd($request->all());

             $email= $request->input('email');
             $password = $request->input('password');
             $remember = ($request->has('remember'))? true : false;

             if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password] , $remember)){
                 return redirect('/home');
             }else{
                // return redirect ('/oulLogin')  ;
                return redirect('/welcome');
             }
    }

    public function logout(){
        Auth::guard('admin')->logout();
    }
}
