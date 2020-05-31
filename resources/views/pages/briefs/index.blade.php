@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-1">Параметры воды</h2>

  <form class="my-2" method="GET" action="{{ route('briefs.index') }}">
    <div class="row p-0 m-0">



      <div class="bk-form__datepicker">
        <input type="date">
      </div>
      <div class="bk-form__datepicker">
        <input type="date">
      </div>


      <div class="div">
        <a href="" class="btn btn-outline-info py-0 d-flex align-items-center" style="height: 30px;">
          Фильтр
        </a>
      </div>
      <div class="div">
        <a href="" class="btn btn-outline-primary py-0 d-flex align-items-center" style="height: 30px;">
          Отчет
        </a>
      </div>

      @if(Auth::user()->roles()->pluck('slug')->contains('disp_oas'))
      <div class="order-last order-sm-first">
        <a href="{{ route('briefs.create') }}" class="btn btn-outline-primary py-0 d-flex align-items-center" style="height: 30px;">
          Новая запись
        </a>
      </div>
      @endif
    </div>
  </form>




  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a id="bid-reg-btn" class="nav-link active" href="#">Регистрация</a>
    </li>
    <li class="nav-item">
      <a id="bid-dis-btn" class="nav-link" href="#">Устранение</a>
    </li>
    <li class="nav-item">
      <a id="bid-dis-btn" class="nav-link" href="#">Устранение</a>
    </li>
  </ul>

  <!-- START group table -->
  @include('pages.briefs.table')
  <!-- END group table -->

  <!-- START group table -->

  <!-- END group table -->

  <!-- START group table -->

  <!-- END group table -->

</div>
@endsection