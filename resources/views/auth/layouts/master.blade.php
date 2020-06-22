<!doctype html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>АИС диспетчера отдела аварийной службы ГУП ЖХ</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  @include('includes.loader')
  <!-- /.loader -->

  <div id="app" class="d-flex flex-column justify-content-between" style="height: 100vh;">

    @yield('content')
    <!-- /.main -->

    @include('includes.footer')
    <!-- /.footer -->

  </div>

  @include('includes.certificate')
  <!-- /.certificate -->
</body>

</html>