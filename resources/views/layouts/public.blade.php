<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Adhara</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <!-- Propios -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/public.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/logo.jpg') }}">
    
  </head>
  <body>

    <div class="container">

      @include('layouts.public_components.encabezado')

    </div>

    @include('layouts.public_components.navbar')

    <div class="container-fluid">
      
      @include('layouts.public_components.menu')

    </div>

    <div class="container-fluid no_padding_left_right">
      
      @yield('carrusel')

    </div>

    <div class="container">

      @yield('content')

    </div>

    <div class="container-fluid" id="container_fluid">

        @include('layouts.public_components.footer')

    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Propios -->
    <script type="text/javascript" src="{{ URL::asset('assets/js/public.js') }}"></script>
    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
    
  </body>
</html>