<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

  <div class="flex-center position-ref full-height">
      <div class="content">
          <div class="title m-b-md">
              <a href="/">Examen</a>
          </div>

          <div class="links">
						<a href="{{route('hoteles')}}">Hoteles de 1ª</a>
						<a href="{{route('clientes')}}">Clientes</a>
						<a href="formNuevoCliente">Nuevo Cliente</a>
						<a href="{{route('reserva',['id' = 1])}}">Reserva</a>
          </div>
          <hr><br><br>
					<div class="op">
          	@yield('content')
					</div>
      </div>
  </div>

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>
