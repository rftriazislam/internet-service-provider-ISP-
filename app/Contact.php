<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=['user_name','phone','email','subject','message'];
   
    protected $dates=['deleted_at'];
}
