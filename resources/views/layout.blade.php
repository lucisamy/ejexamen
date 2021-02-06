<!DOCTYPE html>
<html>
<head>
  <!-- el segundo parametro de yield es por si no hemos definido section en la pagina donde se carga layout -->
  <title>@yield('title', 'Web Pruebas')</title>
</head>
<body>
  @include('partials/nav')
  <hr>
  @yield('content')
</body>
</html>
