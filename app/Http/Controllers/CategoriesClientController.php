<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\product;
class CategoriesClientController extends Controller
{
	 public function list()
    {
    	$categories = category::all(); 
    	return view('client.categories_client')->with(compact('categories'));
    }

    public function show(category $category)
    {
    	$products = $category->products()->paginate(10);
    	return view('client.product_client')->with(compact('category', 'products'));
    }

   
}
