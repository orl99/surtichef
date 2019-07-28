<section class="mt-3">
    <img class="img-fluid" src="{{asset ('img/Banner.png') }}">
</section>
<div class="container-fluid mt-3 text-center text-white">
    @if (auth()->user()->admin)
    <div class="row mt-3">
        <div class="col-12">
            <a href="{{route ('dashboard') }}" style="color:#212F3D; ">
                <div class="col-12 shadow py-5 px-3" style="border-radius:15px;background-color:#F8F9F9;">
                    Administrador <br><i class="fas fa-users-cog" style="font-size:35px;color:#D35400;"></i> 
                </div>
            </a> 
        </div>
    </div>
    @endif
    <div class="row mt-3">
         <div class="col-12">
             <a href="{{url ('/Categorias/') }}" style="color:#212F3D; ">
                <div class="col-12 shadow py-5 px-3" style="border-radius:15px;background-color:#F8F9F9;">
                    Productos <br><i class="fas fa-boxes" style="font-size:35px;color:#0862CD;"></i> 
                </div>
            </a> 
        </div>
    </div>
     <div class="row mt-3">
       <div class="col-6">
            <a href="{{route ('client.pedido') }}" style="color:#212F3D; ">
                <div class="col-12 shadow py-5 px-3" style="border-radius:15px;background-color:#F8F9F9;">
                    Mi Pedido<br> <i class="fas fa-box-open" style="font-size:35px;color:#FEBD10;"></i> 
                </div>
            </a> 
        </div>
        <div class="col-6">
             <a href="{{route ('info') }}" style="color:#212F3D; ">
                <div class="col-12 shadow py-5 px-3" style="border-radius:15px;background-color:#F8F9F9;">
                    Mis Datos <br><i class="fas fa-address-book" style="font-size:35px;color:#AFC908;"></i> 
                </div>
            </a> 
        </div>
    </div>
     <div class="row mt-3 mb-3">
        <div class="col-12">
            <a href="" style="color:white; ">
                <div class="col-12 shadow py-5 px-3" style="border-radius:15px;background-color:#09cd18;">
                    Asistencia Tecnica <i class="fab fa-whatsapp" style="font-size:35px;color:white;"></i> 
                </div>
            </a> 
        </div>
    </div>
</div>