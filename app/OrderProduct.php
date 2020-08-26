<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    public function product()
    {
    	return $this->belongsTo('App\Product');
    }

    public function orderproductemployees()
    {
    	return $this->hasMany('App\OrderProductEmployee');
    }

    public function orderproductexpenses()
    {
    	return $this->hasMany('App\OrderProductExpenses');
    }
}
