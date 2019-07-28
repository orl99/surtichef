@extends('layouts.app')
@section('content')
<div class="container-fluid mt-5 pt-5">
	<div class="col-12 pt-3">
		<h5>Categoria <i class="fas fa-chevron-right"></i> {{ $category->name }}</h5>
	</div>
    @foreach($products as $product)
    <div class="col-12">
        <div class="row mt-3 shadow py-2" style="border-radius:15px;background-color:#F8F9F9;">
        <div class="col-3">
            {{-- <img class="img-fluid" src="{{asset ("img/product/$product->image") }}"> --}}
             @if($product->image) <img class="img-fluid" src="{{asset ("img/product/$product->image") }}">
         @else<img class="img-fluid" src="{{asset ("img/product.png") }}">  @endif
        </div>
        <div class="col-7">
            <div class="col-12"><b>{{ $product->name }}</b></div>
            <div class="col-12" style="font-size:12px;"><i>{{ $product->description}}</i></div>
            <div class="col-12"></div>
        </div>
        <div class="col-2 text-center pt-2 px-0">
            <a class="btn bto-orange" href="{{ url('/Products/'.$product->id) }}"><i class="fas fa-cart-plus"></i></a>
        </div>
    </div>
   </div>
   @endforeach
	
    <div class="col-12 mt-3 mb-3 text-center">
        {{ $products->links() }}
    </div>
</div>
@endsection