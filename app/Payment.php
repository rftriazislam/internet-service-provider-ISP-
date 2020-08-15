<?php

namespace App;

use App\UserClient;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=['user_name','month_name','price','short_note','paid_date','payment_method'];
   
    protected $dates=['deleted_at'];


   
    public function user_client()
    {
        return $this->belongsTo('App\UserClient', 'user_name', 'id');
    }
     
    public function user_clients()
    {
        return $this->hasMany('App\UserClient');
    }



}
