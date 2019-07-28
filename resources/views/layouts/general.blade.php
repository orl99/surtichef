<!DOCTYPE html>
<html>
<head>
	<meta name="theme-color" content="#EDBB99">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
</head>
<body style="background-image:url({{asset ('img/surtichef.png') }});background-position:center;background-size:cover;background-repeat:no-repeat;height:100vh; font-family: 'Abel', sans-serif;">

<main class="">
    @yield('content')
</main>
</body>
</html>