@extends('layouts.app')
@section('content')
<div class="container-fluid px-0 mx-0 mt-5 pt-4">
 
	<div class="col-12 px-0">
		{{-- <img class="img-fluid" src="{{asset ("img/product/$product->image") }}" width="414"> --}}
    @if($product->image) <img class="img-fluid" src="{{asset ("img/product/$product->image") }}">
         @else<img class="img-fluid" src="{{asset ("img/product.png") }}">  @endif
	</div>
  
    @if(session('notification'))
  <div class="alert alert-success">
    {{session ('notification') }}
  </div>
  @endif

</div>

<div class="container-fluid px-0">
  <div class="col-12 px-0 shadow" style="border-radius:0px 0px 15px 15px;background-color:#F8F9F9;">
    <div class="row mx-0 py-3 px-2">
     <div class="col-12"><h5>Nombre:<h5></div>
     <div class="col-12">{{ $product->name }}</div>
    </div>
<div class="row mx-0 py-3 px-2">
  <div class="col-12"><h5>Descripcion:</h5></div>
  <div class="col-12">{{ $product->description }}</div>
</div>
  </div>
</div>

<div class="container mt-3">
  <div class="row mx-0 py-3 px-2 text-center">
  <div class="col-6">
    <a class="btn btn-outline-dark btn-block btn-lg" href="{{route ('home') }}">
      <i class="fas fa-chevron-left"></i> Regresar</a>
  </div>
  <div class="col-6">
        <button class="btn bto-orange btn-block btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-cart-plus"></i> Agregar</button>
  </div>
</div>
</div>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bto-orange">
        <h4 class="modal-title">Cuantas cajas nesecita?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <form method="post" action="{{url ('/Cart') }}">
      	{{ csrf_field() }}
      	<input type="hidden" name="product_id" value="{{ $product->id }}">
      <div class="modal-body">
        <div class="form-group">
           <input type="number" name="quantity" value="" class="form-control">
        </div>
      </div>
      

      <!-- Modal footer -->
      <div class="modal-footer">
      	<button type="button" class="btn btn-outline-dark btn-lg" data-dismiss="modal">
          <i class="far fa-times-circle"></i> Cancelar</button>
        <button type="submit" class="btn bto-orange btn-lg"><i class="fas fa-plus"></i> Agregar</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection
