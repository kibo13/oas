@section('sidebar')
<nav id="sidebar" class="bk-sidebar border-right">

  <div class="sidebar-header border-bottom">
    <a class="navbar-brand p-0" href="{{ route('home') }}">
      <div class="bk-logo d-flex align-items-start">
        <img class="bk-logo__img bk-logo__img--size-sm" src="{{asset("images/logo.png")}}" alt="logo">
        <h3 class="bk-logo__title bk-logo__title--size-sm text-left">АИС</h3>
      </div>
    </a>
  </div>
  <!-- /.bk-logo -->

  <ul class="bk-sidebar__list list-unstyled components my-2">

    <!-- START Statements -->
    <li @sbactive('statements.index')>
      <a href="" class="bk-sidebar__link d-flex align-items-start">
        <span class="bk-sidebar__link--icon d-flex align-items-start mx-2">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="inbox" class="bk-sidebar__link--size svg-inline--fa fa-inbox fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path fill="currentColor" d="M567.938 243.908L462.25 85.374A48.003 48.003 0 0 0 422.311 64H153.689a48 48 0 0 0-39.938 21.374L8.062 243.908A47.994 47.994 0 0 0 0 270.533V400c0 26.51 21.49 48 48 48h480c26.51 0 48-21.49 48-48V270.533a47.994 47.994 0 0 0-8.062-26.625zM162.252 128h251.497l85.333 128H376l-32 64H232l-32-64H76.918l85.334-128z"></path>
          </svg>
        </span>
        <span class="bk-sidebar__link--icon">Заявки</span></a>
    </li>
    <!-- END Statements -->

    <!-- START Jobs -->
    <li @sbactive('job*')>
      <a href="{{ route('jobs.index') }}" class="bk-sidebar__link d-flex align-items-start">
        <span class="bk-sidebar__link--icon d-flex align-items-start mx-2">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="briefcase" class="bk-sidebar__link--size svg-inline--fa fa-briefcase fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"></path>
          </svg>
        </span>
        <span class="bk-sidebar__link--icon">Учет работ</span></a>
    </li>
    <!-- START Jobs -->

    <!-- START Promisers -->
    <li @sbactive('promise*')>
      <a href="{{ route('promisers.index') }}" class="bk-sidebar__link d-flex align-items-start">
        <span class="bk-sidebar__link--icon d-flex align-items-start mx-2">
          <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="address-card" class="bk-sidebar__link--size svg-inline--fa fa-address-card fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path fill="currentColor" d="M528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm0 400H48V80h480v352zM208 256c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm-89.6 128h179.2c12.4 0 22.4-8.6 22.4-19.2v-19.2c0-31.8-30.1-57.6-67.2-57.6-10.8 0-18.7 8-44.8 8-26.9 0-33.4-8-44.8-8-37.1 0-67.2 25.8-67.2 57.6v19.2c0 10.6 10 19.2 22.4 19.2zM360 320h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8z"></path>
          </svg>
        </span>
        <span class="bk-sidebar__link--icon">Потребители</span></a>
    </li>
    <!-- START Promisers -->

    <!-- START Workers -->
    <li @sbactive('worke*')>
      <a href="{{ route('workers.index') }}" class="bk-sidebar__link d-flex align-items-start">
        <span class="bk-sidebar__link--icon d-flex align-items-start mx-2">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" class="bk-sidebar__link--size svg-inline--fa fa-users fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
            <path fill="currentColor" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
          </svg>
        </span>
        <span class="bk-sidebar__link--icon">Сотрудники</span>
      </a>
    </li>
    <!-- START Workers -->

    <!-- START Charts -->
    <li @sbactive('charts.index')>
      <a href="" class="bk-sidebar__link d-flex align-items-start">
        <span class="bk-sidebar__link--icon d-flex align-items-start mx-2">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-line" class="bk-sidebar__link--size svg-inline--fa fa-chart-line fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
          </svg>
        </span>
        <span class="bk-sidebar__link--icon">Графики</span>
      </a>
    </li>
    <!-- END Charts -->
  </ul>
</nav>