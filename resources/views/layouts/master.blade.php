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
  <div id="app">
    <div class="wrapper">

      @include('includes.sidebar')
      <!-- /.sidebar -->

      <div id="content" class="content">

        @include('includes.header')
        <!-- /.header -->

        @yield('content')
        <!-- /.content -->

      </div>
      <!-- /.content -->
    </div>
    <!-- /.wrapper -->

    <footer>
      @include('includes.footer')
    </footer>
    <!-- /.bk-footer -->
  </div>
  <!-- /#app.app -->

  <!-- START modal-general-confirm -->
  @include('includes.modal')
  <!-- END modal-general-confirm -->

  {!! $chart->script() !!}
</body>


</html>