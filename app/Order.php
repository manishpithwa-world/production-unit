<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  

    public function orderproducts()
    {
    	return $this->hasMany('App\OrderProduct');
    }

   

     public function client()
    {
    	return $this->belongsTo('App\Client');
    }
}
