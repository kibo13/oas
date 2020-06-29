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

  @include('includes.footer')
  <!-- /.bk-footer -->

  <!-- START modal-log -->
  @include('includes.modals.log')
  <!-- END modal-log -->

  <!-- START modal-destroy -->
  @include('includes.modals.destroy')
  <!-- END modal-destroy -->

  <!-- START modal-about -->
  @include('includes.modals.about')
  <!-- END modal-about -->

</body>


</html>