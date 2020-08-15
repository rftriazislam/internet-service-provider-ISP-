<?php

namespace App;
use App\Payment;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use App\Pakage;
class UserClient extends  Authenticatable
{
    use Notifiable;
    protected $guard = 'client';

    protected $fillable=['customer_name','pakage_type','customer_phone','customer_email','user_name','mitrotik_password','password','customer_address','pikopiko'];
   
    protected $dates=['deleted_at'];

    
    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    
    public function pakages()
    {
        return $this->belongsTo('App\Pakage', 'pakage_type', 'id');
    }
    public function user_payment()
    {
        return $this->belongsTo('App\Payment', 'id', 'user_name');
    }


}
