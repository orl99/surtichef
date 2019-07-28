<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CartDetail;

class CartDetailController extends Controller
{
   public function store(Request $request)
   {
   	$cartDetail = new CartDetail();
   	$cartDetail->cart_id = auth()->user()->cart->id;
   	$cartDetail->product_id = $request->product_id;
   	//$cartDetail->image = $request->product->image;
   	$cartDetail->quantity = $request->quantity;
   	$cartDetail->save();

      $notification = 'Se a Realizado con exito su Pedido!!';
   	return back()->with(compact('notification'));
   }
//////////////////////destroy///////////////////////////////
   public function destroy(Request $request)
   {
   	$cartDetail = CartDetail::find($request->cart_detail_id);
   	if($cartDetail->cart_id == auth()->user()->cart->id)
   	$cartDetail->delete();

   	return back();
   }
}
