
@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5 pt-5">
  <div class="col-12 shadow px-0"  style="border-radius:15px;background-color:#F8F9F9;">
    <div class="col-12 py-3"><h4>Lista de cliente </h4></div>
    <div class="col-12 px-0">
<table class="table  table-striped text-center" style="border-radius:15px;font-size:12px;">
<thead>
  <tr>
    <th>No.</th>
    <th>Nombre</th>
    <th>Email</th>
    {{-- <th>Ver</th> --}}
    {{-- <th>Pedido</th> --}}
  </tr>
</thead>
<tbody>
  @foreach ($users as $user)
  <tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
   {{--  <td><img class="img-fluid" src="{{asset ("img/product/$product->image") }}"></td> --}}
   {{--  <td><a href="{{ url('/Products/'.$product->id) }}"><i class="fas fa-eye"></i></a></td> --}}
    {{-- <td><a href="{{ url ('/Admin/Product/'.$product->id.'/edit') }}"><i class="far fa-clipboard"></i></a></td> --}}
   {{--  <td><a href="{{ url ('/Admin/Product/'.$product->id.'/delete') }}"><i class="fas fa-trash-alt"></i></a> </td> --}}
  </tr>
  @endforeach
</tbody>
</table>
  </div>
  
  </div>
	</div>

  <div class="container mt-5">
    <div class="col-12 text-center pb-5">
    <a class="btn bto-orange btn-lg btn-block" href="{{route ('dashboard') }}"><i class="fas fa-chevron-left"></i> Atras</a>
  </div>
  </div>


@endsection