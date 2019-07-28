@extends('layouts.app')

@section('content')


<div class="container-fluid mt-5 pt-5 mb-3">
<div class="col-12  shadow " style="border-radius:15px;background-color:#F8F9F9;">
	<div class="col-12 pt-2">
		<h4>Nuevo producto</h4>
	</div>
		<form method="post" action="{{url ('/Admin/Product/store') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
	     <div class="row">
		   <div class="col-12 mt-3">
		    <input type="text" class="form-control" name="name" placeholder="Nombre del Producto">
		   </div>
		   <div class="col-12 mt-3">
		    <textarea class="form-control" rows="3" name="description"  placeholder="Descripcion de producto"></textarea>
		   </div>
		   <div class="col-12 mt-3">
		   	<select class="form-control" name="category_id">
		   		<option>Escoge una categoria</option>
            @foreach($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
            @endforeach
		   	</select>
		   </div>
		   <div class="col-12 text-center mt-3">
		   	<img class="img-fluid" src="{{asset ('img/photoex.png') }}">
		   </div>
		   <div class="col-12 text-center">
            <input class="btn bto-orange btn-sm" type="file" name="image" required="" accept="image/*" capture=""> 
          </div>
	     </div>
	     <div class="row mt-5 pb-5">
    <div class="col-6">
    <a class="btn btn-outline-dark btn-block btn-lg" href="{{url ('/Admin/Product') }}">Cancelar</a>
  </div>
   <div class="col-6">
   	<button class="btn bto-orange btn-block btn-lg">Registrar</button>
  </div> 
  </div>
    </form>
</div>
</div>



@endsection