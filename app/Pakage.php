<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UserCient;
class Pakage extends Model
{
    protected $fillable=['pakage_name','pakage_type','speed','pakage_price','connection_type'];
   
    protected $dates=['deleted_at'];

   
    public function user_clients()
    {
        return $this->hasMany('App\UserClient');
    }
}
