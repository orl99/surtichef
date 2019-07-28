{{-- <nav class="navbar shadow py-2" style="background-color:#1F74F7; width: 100%;">  
<div class="container">
  <div class="row" style="color:white;font-size:25px;">
  <div class="col-2 px-2">
    <div class="col-12">
    <i class="fas fa-bars"></i>
    </div>
  </div>
  <div class="col-4 px-2 px-2 text-center">
    <div class="col-12">
    Bienvenido
    </div>
  </div>
  <div class="col-4 px-2">
    <div class="col-12">
       <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
     {{ Auth::user()->name }}
     <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        salir</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf</form>
    </button>
    <div class="dropdown-menu">
      
    </div>
  </div>
    </div> 
   </div>
</div>
</div>
</nav> --}}




<nav class="navbar navbar-expand fixed-top row mx-0" style="background-color:#ca5838;color:white!important;">
  
    <div class="col-4">
      <span style="font-size:35px;cursor:pointer;color:#fff;" onclick="openNav()"><i class="fas fa-bars"></i></span></div>
    <div class="col-4 text-center" style="font-size:20px;">
     Surtichef
    </div>
    <div class="col-4 text-right" style="font-size:30px;">
      <a href="{{route ('home') }}" style="color:white;"><i class="fas fa-home"></i></a>
    </div>
  
</nav>

@include('layouts.menu-mobile')




