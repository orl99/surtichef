<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ClientController extends Controller
{
    public function list()
    {
    	$users = user::all(); 
    	return view('admin.client.client')->with(compact('users'));
    }

    //public function show($id)
    //{
    //	$cartDetail->cart_id = auth()->user()->cart->id;
    //	$cartdetail = cartdetail = ->cart_id()->user_id::find($id);
    //	return view('client.show')->with(compact(''));
    //}
}
