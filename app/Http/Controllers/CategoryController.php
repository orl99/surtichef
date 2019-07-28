<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
    public function category()
    {
    	$categories = category::all();
    	return view('Admin.category.category')->with(compact('categories'));
    }
    
    public function create()
    {
    	
    	return view('Admin.category.create');
    }

    //funcion para guardar producto
    public function store(Request $request)
    {
      $category = new category();
      $category->name = $request->input('name');
      $category->save();

      return redirect('Admin/Category');

    }


     public function edit($id)
    {
    	$category = category::find($id);
    	return view('Admin.category.edit')->with(compact('category'));
    }
//actualizar formularios
    public function update(Request $request, $id)
    {
      $category = category::find($id);
      $category->name = $request->input('name');
      $category->save();

      return redirect('Admin/Category');

    }
    //eliminar el producto
    //public function destroy($id)
    //{
     // $category = category::find($id);
     // $category->delete();

     // return redirect('Admin/Category');

    //}
}
