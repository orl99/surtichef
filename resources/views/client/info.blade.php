@extends('layouts.app')
@section('content')
<div class="container-fluid mt-5 pt-5">
<div class="list-group shadow mt-3">
  <a href="#" class="list-group-item list-group-item-action bto-orange">
  	<h4>Mi informacion personal</h4></a>
  	<a href="#" class="list-group-item list-group-item-action">
  	<h5>No.Cliente</h5>SURT00<span style="color:#566573;">{{ Auth::user()->id }}</span></a>
  <a href="#" class="list-group-item list-group-item-action">
  	<i class="fas fa-user"></i> {{ Auth::user()->name }}</a>
  <a href="#" class="list-group-item list-group-item-action">
  	<i class="fas fa-envelope"></i> {{ Auth::user()->email }}</a>
</div>

<div class="col-12 mt-5">
	<a class="btn bto-orange btn-block btn-lg" href="{{route ('home') }}"><i class="fas fa-chevron-left"></i> Atras</a>
</div>
</div>
@endsection