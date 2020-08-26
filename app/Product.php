<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     public function orderproducts()
    {
    	return $this->hasMany('App\OrderProduct');
    }

     public function productmaterials()
    {
    	return $this->hasMany('App\ProductMaterials');
    }

    
}
