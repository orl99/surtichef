<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\user_favs;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function show($id)
    {
        $user_favs = new user_favs();
        $fav_status = $user_favs::where('id_product', '=',  $id)
                  ->where('id_user', '=', auth()->user()->id )
                  ->select('status_favs')->get();
        ;
        $product = Product::find($id);
        // echo($fav_status);
    	return view('client.show')->with(compact('product', 'fav_status'));
    }
}
