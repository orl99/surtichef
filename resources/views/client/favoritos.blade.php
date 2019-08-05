@extends('layouts.app')

@section('content')
{{-- <script src="{{ URL::asset('js/favoritos.js') }}"></script> --}}
{{-- <script src="{{ elixir('js/favoritos.js') }}"></script> --}}

{{-- {{Html::script('/js/favoritos.js')}} --}}
<div class="container-fluid mt-5 pt-5">
	<div class="col-12">
		<div class="alert alert-primary">
            @if( count($query) > 1 )
                Tienes {{ count($query) }}  Productos añadidos a Favoritos !!!
            @elseif( count($query) == 0)
            No tienes Productos añadidos a Favoritos
            @else
            Tienes un Producto añadido a Favoritos!!!
            @endif
		</div>
    </div>
    <div class="row mx-0 text-center">

        @foreach ($query as $detail)
        <div class="col-6 mt-5">
           <div class="col-12 text-center shadow" style="background-color:#fff;border-radius:20px;">

               <div class="col-12 px-0">

                   @if($detail->image)
                       <img class="img-fluid" src="{{asset ("img/product/$detail->image") }}">
                   @else
                       <img class="img-fluid" src="{{asset ("img/product.png") }}">
                   @endif
                   {{-- <img class="img-fluid" src="{{asset ("img/product/$detail->product->image") }}"> --}}
               </div>

               <div class="col-12 py-4 px-0">{{ $detail->name }}</div>

               <form method="post" action="{{url ('/Cart') }}">
                       {{ csrf_field() }}
                       {{ method_field('DELETE') }}
                       <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">
                   <div class="row mx-0 py-4">
                       <div class="col-6">
                           <a href="{{ url('/Products/'.$detail->id) }}" class="btn btn-info">
                               <i class="fas fa-eye"></i>
                           </a>
                       </div>
                       <div class="col-6">
                           <button type="submit" class="btn btn-danger">
                               <i class="fas fa-trash-alt"></i>
                           </button>
                       </div>
                   </div>
               </form>
           </div>
       </div>
       @endforeach
    </div>
   </div>

    {{-- @if(session('pendiente'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{session ('pendiente') }}
        </div>
     @endif --}}



    <div class="col-12 py-4">
        <button class="btn bto-orange btn-block btn-lg" data-toggle="modal" data-target="#myModal">Agregar al Carrito</button>
    </div>

    <!-- The Modal -->
    {{-- <div id="myModal"> --}}
    <div class="modal" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bto-orange">
            <h4 class="modal-title">Cuantas cajas nesecita?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

        <form method="post" action="{{url ('/CartMultiStore') }}">
            <div class="modal-body">
            <!-- Modal body -->
                {{ csrf_field() }}
                @foreach($query as $detail)
                    <div class="col-12 form-group">
                        <h4 class="modal-title">{{$detail->name}}</h4>
                        <input class="form-control" type="number" name="quantity[]">
                        <input type="hidden" name="product_id[]" value="{{ $detail->id }}">
                    </div>
                @endforeach
            </div>
                <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark btn-lg" data-dismiss="modal">
                <i class="far fa-times-circle"></i> Cancelar</button>
                <button type="submit" class="btn bto-orange btn-lg">
                    <i class="fas fa-plus"></i> Agregar
                </button>
            </div>
        </form>
        </div>
        </div>
    </div>


</div>

<script src="{{ asset('js/favoritos.js') }}" defer></script>
@endsection



<style type="text/css">
    .text-white{color:white;}
</style>