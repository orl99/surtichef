@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5 pt-5">
  <div class="col-12 shadow px-0"  style="border-radius:15px;background-color:#F8F9F9;">
    <div class="col-12"><h4>Registre sus Productos</h4></div>
    <div class="col-12 px-0">
<table class="table  table-striped text-center" style="border-radius:15px;font-size:12px;">
<thead>
  <tr>
    <th>No.</th>
    <th>Producto</th>
    {{-- <th>Categoria</th> --}}
    {{-- <th>Ver</th> --}}
    <th>Editar</th>
    <th>Eliminar</th>
  </tr>
</thead>
<tbody>
  @foreach ($products as $product)
  <tr>
    <td>{{ $product->id }}</td>
    <td>{{ $product->name }}</td>
    {{-- <td>{{ $product->category_id }}</td> --}}
   {{--  <td><img class="img-fluid" src="{{asset ("img/product/$product->image") }}"></td> --}}
   {{--  <td><a href="{{ url('/Products/'.$product->id) }}"><i class="fas fa-eye"></i></a></td> --}}
    <td><a href="{{ url ('/Admin/Product/'.$product->id.'/edit') }}"><i class="fas fa-edit"></i></a></td>
    <td><a href="{{ url ('/Admin/Product/'.$product->id.'/delete') }}"><i class="fas fa-trash-alt"></i></a> </td>
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
    <a class="btn bto-orange btn-block btn-lg" href="{{url ('/Admin/Product/create') }}"><i class="fas fa-plus"></i> Producto</a>
  </div>
  </div>

@endsection