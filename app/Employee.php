<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function orderproductemployees()
    {
    	return $this->hasMany('App\OrderProductEmployee');
    }
}
