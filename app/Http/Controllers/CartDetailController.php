<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CartDetail;

class CartDetailController extends Controller
{
   public function store(Request $request)
   {
    if( !empty($request->product_id) && !empty($request->quantity) && !empty($request->unidad) ){
        $cartDetail = new CartDetail();
        $cartDetail->cart_id = auth()->user()->cart->id;
        $cartDetail->product_id = $request->product_id;
        //$cartDetail->image = $request->product->image;
        $cartDetail->quantity = $request->quantity;
        $cartDetail->unidad = $request->unidad;
        $cartDetail->save();

       $notification = 'Se a Realizado con exito su Pedido!!';
        return back()->with(compact('notification'));
    }else{
        $notification = "No sean ingresado bien los datos, por favor recargue la pantalla y vuelva a intentarlo";
        return back()->with(compact('notification'));
    }
   }


    public function multiStore(Request $request)
   {
       /**
        * Validaciones
        * - Campos con valor
        * - Campos sin caracteres no permitidos
        * - Compos con valores validos
        *
        */
    if( !empty($request->product_id) && !empty($request->quantity)){

        $arrResponse = [
            "product_id" => $request->product_id,
            "quantity" => $request->quantity,
            // "unidad" => $request->unidad
        ];
        $filters = [
            "product_id" => 'digit',
            "quantity" => 'digit',
            // "unidad" => 'strip_tags',
        ];
        $DataSanitize = \Sanitizer::make($arrResponse, $filters)->sanitize();


        for($i = 0; $i < count($DataSanitize["product_id"]); $i++){
            if(!$DataSanitize["quantity"][$i] == ''){
                $cartDetail = new CartDetail();
                $cartDetail->cart_id = auth()->user()->cart->id;
                $cartDetail->product_id = $DataSanitize["product_id"][$i];
                $cartDetail->quantity = $DataSanitize["quantity"][$i];
                // $cartDetail->unidad = $DataSanitize["unidad"][$i];
                $cartDetail->save();
            }
            continue;
        }
        $notification = 'Se a Realizado con exito su Pedido!!';
           return back()->with(compact('notification'));
    }else{
        $notification = "No sean ingresado bien los datos, por favor recargue la pantalla y vuelva a intentarlo";
        return back()->with(compact('notification'));
    }

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
