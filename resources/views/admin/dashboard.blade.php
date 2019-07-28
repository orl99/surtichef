@extends('layouts.app')

@section('content')


<div class="container-fluid mt-5 pt-5 text-center text-white">
    <div class="row mt-3">
        <div class="col-12 text-left"><a class="btn btn-dark" href="{{route ('home') }}">Area de cliente</a></div>
        <div class="col-12 mt-3">
            <a href="{{route ('client') }}" style="color:#212F3D; ">
                <div class="col-12 shadow py-5 px-3" style="border-radius:15px;background-color:#F8F9F9;">
                    Clientes <i class="fas fa-user" style="font-size:35px;color:#FEBD10;"></i> 
                </div>
            </a> 
        </div>
    </div>
     <div class="row mt-3">
        <div class="col-6">
             <a href="{{route ('category') }}" style="color:#212F3D; ">
                <div class="col-12 shadow py-5 px-3" style="border-radius:15px;background-color:#F8F9F9;">
                    Categorias <br><i class="fas fa-compress" style="font-size:35px;color:#0862CD;"></i> 
                </div>
            </a> 
        </div>
        <div class="col-6">
             <a href="{{route ('product') }}" style="color:#212F3D; ">
                <div class="col-12 shadow py-5 px-3" style="border-radius:15px;background-color:#F8F9F9;">
                    Productos <br><i class="fas fa-box-open" style="font-size:35px;color:#AFC908;"></i> 
                </div>
            </a> 
        </div>
    </div>
    {{--  <div class="row mt-3 mb-3">
        <div class="col-6">
            <a href="{{ url('/Products/'.$product->id) }}" style="color:#212F3D; ">
                <div class="col-12 shadow py-5 px-3" style="border-radius:15px;background-color:#F8F9F9;">
                    Pedidos <br><i class="fas fa-scroll" style="font-size:35px;color:#A67AF9;"></i> 
                </div>
            </a> 
        </div>
         <div class="col-6">
            <a href="" style="color:#212F3D; ">
                <div class="col-12 shadow py-5 px-3" style="border-radius:15px;background-color:#F8F9F9;">
                    Vendedor <br><i class="fas fa-user-tie" style="font-size:35px;color:#A67AF9;"></i> 
                </div>
            </a> 
        </div>
    </div> --}}
</div>



@endsection