<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
class ProductController extends Controller
{
    public function show($id)
    {
    	$product = Product::find($id);
    	return view('client.show')->with(compact('product'));
    }
}
