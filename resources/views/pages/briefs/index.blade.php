@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-1">Параметры воды</h2>

  <!-- START group tools -->
  @include('pages.briefs.tools')
  <!-- END group tools -->

  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link px-2 px-sm-3 " id="table-tab" data-toggle="tab" href="#table" role="tab" aria-controls="table" aria-selected="true">Таблица</a>
    </li>
    <li class="nav-item">
      <a class="nav-link px-2 px-sm-3" id="chart_p-tab" data-toggle="tab" href="#chart_p" role="tab" aria-controls="chart_p" aria-selected="false">График <small class="text-muted align-top">Па</small></a>
    </li>
    <li class="nav-item">
      <a class="nav-link px-2 px-sm-3 active" id="chart_t-tab" data-toggle="tab" href="#chart_t" role="tab" aria-controls="chart_t" aria-selected="false">График <small class="text-muted align-top">°C</small></a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">

    <!-- START group table -->
    @include('pages.briefs.table')
    <!-- END group table -->

    <!-- START group chart_pressure -->
    @include('pages.briefs.charts.pressure')
    <!-- END group chart_pressure -->

    <!-- START group chart_temp -->
    @include('pages.briefs.charts.temp')
    <!-- END group chart_temp -->

  </div>

</div>
@endsection