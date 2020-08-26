<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProductEmployee extends Model
{
     public function employee()
    {
    	return $this->belongsTo('App\Employee');
    }

     public function orderproduct()
    {
    	return $this->belongsTo('App\OrderProduct');
    }
}
