@section('sidebar')
<nav id="sidebar" class="border-right">

  <div class="sidebar-header border-bottom">
    <a class="navbar-brand p-0" href="{{ route('home') }}">
      <div class="bk-logo d-flex align-items-start">
        <img class="bk-logo__img bk-logo__img--size-sm" src="{{asset("images/logo.png")}}" alt="logo">
        <h3 class="bk-logo__title bk-logo__title--size-sm text-left">АИС</h3>
      </div>
    </a>
  </div>
  <!-- /.bk-logo -->

  <ul class="list-unstyled components my-2">
    <li>
      <a href="#">Абоненты</a>
    </li>
    <li>
      <a href="#">Учет работ</a>
      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Сотрудники</a>
      <ul class="collapse " id="pageSubmenu">
        <li>
          <a href="#">Адреса</a>
        </li>
        <li>
          <a href="#">Улицы</a>
        </li>
        <li>
          <a href="#">Отделы</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#">Заявки</a>
    </li>
    <li>
      <a href="#">Графики</a>
    </li>
  </ul>
</nav>