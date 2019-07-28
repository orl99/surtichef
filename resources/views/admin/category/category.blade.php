@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5 py-5">
  <div class="col-12 shadow px-0"  style="border-radius:15px;background-color:#F8F9F9;">
    <div class="col-12"><h4>Registre Categorias</h4></div>
    <div class="col-12 px-0">
<table class="table  table-striped text-center" style="border-radius:15px;font-size:12px;">
<thead>
  <tr>
    <th>No.</th>
    <th>Categoria</th>
    <th>Editar</th>
    {{-- <th>Eliminar</th> --}}
  </tr>
</thead>
<tbody>
  @foreach ($categories as $category)
  <tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category->name }}</td>
    <td><a href="{{ url ('/Admin/Category/'.$category->id.'/edit') }}"><i class="fas fa-edit"></i></a></td>
    {{-- <td><a href="{{ url ('/Admin/Category/'.$category->id.'/delete') }}"><i class="fas fa-trash-alt"></i></a> </td> --}}
  </tr>
  @endforeach
</tbody>
</table>
  </div>
 
  </div>
	</div>

   <div class="row mt-3 mx-0">
    <div class="col-6 text-center pb-5">
    <a class="btn btn-outline-dark btn-block btn-lg" href="{{route ('dashboard') }}">Atras</a>
  </div>
    <div class="col-6 text-center pb-5">
    <a class="btn bto-orange btn-block btn-lg" href="{{url ('/Admin/Category/create') }}"><i class="fas fa-plus"></i> Categoria</a>
  </div>
  </div>


@endsection