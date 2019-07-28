@extends('layouts.app')

@section('content')


<div class="container-fluid mt-5 pt-5">
<div class="col-12  shadow " style="border-radius:15px;background-color:#F8F9F9;">
	<div class="col-12 pt-2">
		<h4>Editar producto</h4>
	</div>
		<form method="post" action="{{ url ('/Admin/Product/'.$product->id.'/edit') }}">
		{{ csrf_field() }}
	     <div class="row">
		   <div class="col-12 mt-3">
		    <input type="text" class="form-control" name="name" value="{{$product->name}}">
		   </div>
		   <div class="col-12 mt-3">
		    <textarea class="form-control" rows="3" name="description" >{{$product->description}}</textarea>
		   </div>
		  {{--  <div class="col-12 mt-3">
		   	<select class="form-control" name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
            @endforeach
		   	</select>
		   </div> --}}
		   {{-- <div class="col-12 mt-3">
		    <input type="file" class="form-control" name="image">
		   </div> --}}
	     </div>
	     <div class="row mt-5 pb-5">
    <div class="col-6">
    <a class="btn btn-outline-dark btn-block btn-lg" href="{{url ('/Admin/Product') }}">Cancelar</a>
  </div>
   <div class="col-6">
   	<button class="btn bto-orange btn-block btn-lg"><i class="far fa-save"></i> Guardar</button>
  </div> 
  </div>
    </form>
</div>
</div>



@endsection