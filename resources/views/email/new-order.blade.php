<!DOCTYPE html>
<html>
<head>
	<title>Tienes un nuevo pedido de {{ $user->name }}</title>
</head>
<body>
<p>Se ha realizado un nuevo pedido!!</p>
<p>Estos son los datos del cliente que realizo el pedido</p>
<ul>
	<li>
		<strong>Nombre:</strong>
		{{ $user->name }}
	</li>
	<li>
		<strong>E-mail:</strong>
		{{ $user->email }}
	</li>
	<li>
		<strong>Fecha del pedido:</strong>
		{{ $cart->order_date }}
	</li>

</ul>
<hr>
<ul>
	@foreach($cart->details as $detail)
	<li>
		{{ $detail->product->name }} x {{ $detail->quantity }}
	</li>
	@endforeach
</ul>
<hr>
<p><a href="{{ ('/Admin/order/'.$cart->id) }}">Ver mas detalles</a> del pedido de {{ $user->name }}</p>

</body>
</html>