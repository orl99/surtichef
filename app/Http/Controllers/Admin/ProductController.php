<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;
use App\category;

class ProductController extends Controller
{
    public function product()
    {
    	$products = product::all(); 
    	return view('admin.product.product')->with(compact('products'));
    }

     public function create()
    {
    	$categories = category::all();
    	return view('admin.product.create')->with(compact('categories'));
    }
//funcion para guardar producto
    public function store(Request $request)
    {
      
      
      $file = $request->file('image');
      $path = public_path() . '/img/product';
      $fileName = uniqid() . $file->getClientOriginalName();
      $file->move($path,$fileName);
      

      $product = new product();
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->category_id = $request->input('category_id');
      $product->image = $fileName;
      $product->save();

      return redirect('Admin/Product');

    }
    //actualizar formularios
     //public function edit()
    //{
    //	$categories = category::all();
    //	return view('dashboard.product.edit')->with(compact('categories'));
    //}

    public function edit($id)
    {
    	$product = product::find($id);
    	return view('admin.product.edit')->with(compact('product'));
    }
//actualizar formularios
    public function update(Request $request, $id)
    {
      $product = product::find($id);
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->category_id = $request->input('category_id');
      $product->save();

      return redirect('Admin/Product');

    }
    //eliminar el producto
    public function destroy($id)
    {
      $product = product::find($id);
      $product->delete();

      return redirect('Admin/Product');

    }
}
