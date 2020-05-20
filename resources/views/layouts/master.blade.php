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
    @include('includes.header')
    <!-- /.bk-header -->

    <main>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            @yield('content')
          </div>
        </div>
      </div>
    </main>
    <!-- /.bk-main -->

    <footer class="fixed-bottom w-100"> 
      @include('includes.footer')
    </footer>
    <!-- /.bk-footer -->
  </div>
</body>

</html>