<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProductExpense extends Model
{
     public function expense()
    {
    	return $this->belongsTo('App\Expense');
    }

     public function orderproduct()
    {
    	return $this->belongsTo('App\OrderProduct');
    }
}
