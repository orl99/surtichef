@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5 pt-5">
	<div class="col-12">
		<div class="alert alert-primary">
			Tienes {{ auth()->user()->cart->details->count() }} pedidos Activos!!!
		</div>
    </div>

	<div class="row mx-0 text-center">
    @foreach (auth()->user()->cart->details as $detail)
     <div class="col-6 mt-5">
        <div class="col-12 text-center shadow" style="background-color:#fff;border-radius:20px;">

    		<div class="col-12 px-0">

                @if($detail->product->image)
                    <img class="img-fluid" src="{{asset ("img/product/$detail->product->image") }}">
                @else
                    <img class="img-fluid" src="{{asset ("img/product.png") }}">
                @endif
                {{-- <img class="img-fluid" src="{{asset ("img/product/$detail->product->image") }}"> --}}
            </div>

            <div class="col-12 py-4 px-0">{{ $detail->product->name }}</div>

    		<div class="col-12 px-0">
                <b>Cantidad de Pedido:</b>
            </div>

            <div class="col-12 py-4 px-0">{{ $detail->quantity }}</div>

    		<form method="post" action="{{url ('/Cart') }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">
                <div class="row mx-0 py-4">
                    <div class="col-6">
                        <a href="{{ url('/Products/'.$detail->product->id) }}" class="btn btn-info">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            </form>
    	</div>
    </div>
    @endforeach
    </div>

    @if(session('pendiente'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{session ('pendiente') }}
        </div>
     @endif

    <div class="col-12 py-4">
        <form method="post" action="{{ url ('/Order') }}">
            {{ csrf_field() }}
           <button class="btn bto-orange btn-block btn-lg">
               <i class="fas fa-check-circle"></i> Realizar pedido
            </button>
        </form>

    </div>
</div>
@endsection



<style type="text/css">
    .text-white{color:white;}
</style>
