<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\category;
class ProductsClientController extends Controller
{
     public function product_list($id)
    {
    	$product = product::find($id);
    	return view('client.product_client')->with(compact('product'));
    }
}
