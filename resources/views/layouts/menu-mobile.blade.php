<div id="mySidenav" class="sidenav">
  <div class="col-12 px-0" style="background-image:url({{asset ('img/menu.png') }});background-size:cover;background-position:center;background-repeat:no-repeat;height:200px;">
    <span class="closebtn pt-2 white" onclick="closeNav()"><i class="far fa-times-circle"></i></span>
    <div class="col-6 offset-3 pt-5">
      <img class="img-fluid" src="{{asset ('img/user.png') }}">
    </div>
    <div class="col-12 text-center pt-2 white">
      {{ Auth::user()->name }}
    </div>
  </div>
  {{-- <a href="javascript:void(0)"></a> --}}
  <a href="{{route ('home') }}"><i class="fas fa-home"></i> Inicio</a>
  <a href="{{url ('/Categorias/') }}"><i class="fas fa-boxes"></i> Productos</a>
  <a href="{{url ('/favoritos') }}"><i class="fas fa-star"></i> Favoritos</a>
  <a href="{{route ('client.pedido') }}"><i class="fas fa-paste"></i> Pedidos</a>
  <a href="#"><i class="fas fa-table"></i> Datos</a>
  <a href="#"><i class="fas fa-info"></i> Ayuda</a>
  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>  Salir</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf</form>
</div>
<style>


.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 9999;
  top: 0;
  left: 0;
  background-color:#ECF0F1;
  overflow-x: hidden;
  transition: 0.5s;

}

.sidenav a {
  padding: 20px 8px 20px 32px;
  border-top:1px dotted #444;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.white{color:white;}
</style>







<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

