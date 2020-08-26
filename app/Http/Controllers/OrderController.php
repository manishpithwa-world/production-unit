<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\OrderProduct;


class OrderController extends Controller
{
    //

    public function store(Request $request)
    {

    	$order = Order::firstOrCreate(['client_id'=>Auth::id(),'order_date'=>date('Y-m-d H:i:s')]);
    	$order->OrderProduct()->createMany($request->only('products'));
    }

    public function billing($orderId)
    {
    	$order = Order::with(['orderproducts.product',
    		'orderproducts.product.productmaterials',
    		'orderproducts.product.productmaterials.rawmaterial',
    		'orderproducts.orderproductemployees',
    		'orderproducts.orderproductemployees.employee',
    		'orderproducts.orderproductexpenses',
    		'orderproducts.orderproductexpenses.expense'
    	])->find($orderId);

    	


    }
}
