<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userRegister extends Model
{
    //
    // protected $table='';
    protected $fillable=['title' , 'content' , 'status' , 'user_id'];
    protected $timestamp=  true;
    protected $hidden=[];
}
