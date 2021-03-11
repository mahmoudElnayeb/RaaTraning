<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    //

    public function sendMail(){

        // dd(" this is controller");

        \App\Jobs\SendNewMail::dispatch();
        return " Your Mail Send Successfuly";
    }
}
