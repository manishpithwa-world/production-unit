<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductMaterial extends Model
{
     public function rawmaterial()
    {
    	return $this->belongsTo('App\RawMaterial');
    }
}
