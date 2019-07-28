@extends('layouts.app')
@section('content')
<div class="container-fluid mt-5 pt-5 mb-5">
	<div class="col-12 pt-3">
		<h3>Selecciones una categoria</h3>
	</div>
	<div class="row mt-3">
		@foreach ($categories as $category)
        <div class="col-6 text-center pt-3">
             <a href="{{url ('/Categorias/'.$category->id) }}" style="color:#212F3D; ">
                <div class="col-12 shadow py-5 px-3" style="border-radius:15px;background-color:#F8F9F9;">
                   {{ $category->name }} <br><i class="fas fa-box-open" style="font-size:35px;color:#ca5838;"></i> 
                </div>
            </a> 
        </div>
        @endforeach
    </div>
</div>
@endsection