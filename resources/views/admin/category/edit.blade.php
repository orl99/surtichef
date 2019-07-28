@extends('layouts.app')

@section('content')


<div class="container-fluid mt-5 pt-5">
<div class="col-12  shadow " style="border-radius:15px;background-color:#F8F9F9;">
		<form method="post" action="{{ url ('/Admin/Category/'.$category->id.'/edit') }}">
		{{ csrf_field() }}
	     <div class="row">
		   <div class="col-12 mt-3">
		    <input class="form-control" type="text" name="name" value="{{ $category->name }}">
		   </div>
	     </div>
	     <div class="row mt-5 pb-5">
    <div class="col-6">
    <a class="btn btn-outline-dark btn-block btn-lg" href="{{url ('/Admin/Category') }}">Cancelar</a>
  </div>
   <div class="col-6">
   	<button class="btn bto-orange btn-block btn-lg"><i class="far fa-save"></i> Guardar</button>
  </div> 
  </div>
    </form>
</div>
</div>



@endsection