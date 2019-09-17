@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5 pt-5">
	<div class="col-12 mt-10">
		<div class="alert alert-primary">
            @if( count($query) > 1 )
                Tienes {{ count($query) }}  Productos añadidos en tu pre-pedio !!!
            @elseif( count($query) == 0)
            No tienes Productos añadidos a Favoritos
            @else
            Tienes un Producto añadido a Favoritos!!!
            @endif
		</div>
        @if( session('notification') )
            <div class="alert alert-success">
                {{session('notification')}}
            </div>
        @endif
    </div>
</div>
    <div class="row mx-0 text-center">
 {{-- @foreach ($query as $detail)
        <div class="col-6 mt-5">
           <div class="col-12 text-center shadow px-0" style="background-color:#fff;border-radius:20px;">

               <div class="col-12 px-0">

                   @if($detail->image)
                       <img class="img-fluid" src="{{asset ("img/product/$detail->image") }}">
                   @else
                       <img class="img-fluid" src="{{asset ("img/product.png") }}">
                   @endif
               </div>
               <div class="col-12 py-4 px-0">{{ $detail->name }}</div>

               <form method="post" action="{{url ('/favoritos') }}">
                       {{ csrf_field() }}
                       {{ method_field('DELETE') }}
                       <input type="hidden" name="product_id" value="{{ $detail->id }}">
                       <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                   <div class="row mx-0 py-4">
                       <div class="col-6">
                           <a href="{{ url('/Products/'.$detail->id) }}" class="btn btn-outline-dark">
                               <i class="fas fa-eye"></i>
                           </a>
                       </div>
                       <div class="col-6">
                           <button type="submit" class="btn bto-orange">
                               <i class="fas fa-trash-alt"></i>
                           </button>
                       </div>
                   </div>
               </form>
           </div>
       </div>
       @endforeach --}}
    </div>
   </div>

    {{-- @if(session('pendiente'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{session ('pendiente') }}
        </div>
     @endif --}}



    <div class="col-12 py-4">
        <button class="btn bto-orange btn-block btn-lg" data-toggle="modal" id="addCartButton" data-target="#myModal"><i class="fas fa-clipboard-list"></i> Agregar pedido ahora</button>
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
            <div class="modal-body" id="modalBody">
            <!-- Modal body -->
                {{ csrf_field() }}
            @foreach($query as $detail)
            <div class="col-12 form-group" id="El{{$detail->id}}">
                    <button onclick="deleteList('El{{$detail->id}}')" type="button" style="background-color: red; border-radius: 50%; color:white; width:24; height: 24px;" class="close deleteEle">&times;</button>
                    <img class="img-fluid" src="{{asset ("img/product/$detail->image") }}">
                    <h4 class="modal-title">{{$detail->name}}</h4>
                    {{-- New Select Implementation --}}
                    <div class="row">
                        <input placeholder="Numero de Unidades" class="form-control inputNum col-12" type="number" name="quantity[]">
                        {{--<select required class="form-control col-4" name="unidad[]" id="unidad">
                            <option value="Caja">Caja</option>
                            <option value="Pz">Pz</option>
                        </select>--}}
                    </div>
                    {{-- New Select Implementation --}}
                    <input type="hidden" name="product_id[]" value="{{ $detail->id }}">
                </div>
                @endforeach
            </div>
                <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark btn-lg" data-dismiss="modal">
                <i class="far fa-times-circle"></i> Cancelar</button>
                <button type="submit" id="addCartBtnFinal" class="btn bto-orange btn-lg">
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
