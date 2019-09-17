<!DOCTYPE html>
<html>
<head>
	<title>Tienes un nuevo pedido de {{ $user->name }}</title>
</head>
<body>
<h2 style="color:orange;">Se ha realizado un nuevo pedido!!</h2>
<h4>Estos son los datos del cliente que realizo el pedido</h4>




<table style="width:100%;">
 <tr>
 <th style="width:50%;background-color:orange;">NOMBRE DEL CLIENTE:<br>{{ $user->name }}</th>
 <th style="width:50%;background-color:orange;">FECHA DE PEDIDO:<br> {{ $cart->order_date }}</th>
 </tr>
</table>
<table style="width:100%;">
  <tr>
    <th>Nombre producto</th>
    <th>Cantidad</th>
  </tr>
  @foreach($cart->details as $detail)
  <tr style="text-align:center;">
    <td style="border-bottom:1px solid orange">{{ $detail->product->name }}</td>
    <td style="border-bottom:1px solid orange">{{ $detail->quantity }}</td>
  </tr>
  @endforeach
</table>









{{-- <p><a href="{{ ('/Admin/order/'.$cart->id) }}">Ver mas detalles</a> del pedido de {{ $user->name }}</p> --}}

</body>
</html>