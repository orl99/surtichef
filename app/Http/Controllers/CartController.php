<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\User;
use App\Mail\NewOrder;
use Mail;
class CartController extends Controller
{
    public function update()
    {
    	$client = auth()->user();
    	$cart = $client->cart;
    	$cart->status = 'Pending';
    	$cart->order_date = Carbon::now();
    	$cart->save();

        $admins = User::where('admin', true)->get();
        Mail::to($admins)->send(new NewOrder($client, $cart));

        $pendiente = 'Tu pedido se ha enviado de manera exitosa,te contactaremos en cuanto este listo tu envio';
    	return back()->with(compact('pendiente'));
    	//return back();
    }
}
