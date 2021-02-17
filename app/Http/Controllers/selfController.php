<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class selfController extends Controller
{
    //
    public function getUserId(){
        return " Hello iam Get User Id Function ";
    }

    public function userFormPost(){
        return "<form method='POST' action=''>
        <input type='hidden' name='_token' value='".csrf_token()."'>
        <input type='text' >
        <input type='submit' value='send'>
               </form>  " ;
     }
}
