@extends('layouts.master')

@section('content')
<div id="repo-wrap" class="overflow-hidden pt-4 py-2">
  <h2 class="mb-1">Выходные отчеты</h2>


  <div class="bk-form__wrap my-3 pb-2" data-info="Формирование отчета">
    <div class="row m-0 p-0">

      <!-- START group menu reports -->
      <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Отчеты</h6>
      <div class="col-sm-auto form-group mb-2 pl-0">
        <select id="repo-menu" class="form-control bk-form__input">
          <option disabled selected>Выберите отчет</option>
          @foreach($reports as $report)
          <option value="{{ $report['id'] }}">
            {{ $report['name'] }}
          </option>
          @endforeach
        </select>
      </div>
      <!-- END group menu reports -->

      <!-- START group alert -->
      @include('includes.alerts')
      <!-- END group alert -->

      <!-- START group repo #1 -->
      @include('pages.reports.report.repo1')
      <!-- END group repo #1 -->

      <!-- START group repo #2 -->
      @include('pages.reports.report.repo2')
      <!-- END group repo #2 -->

      <!-- START group repo #3 -->
      @include('pages.reports.report.repo3')
      <!-- END group repo #3 -->

      <!-- START group repo #4 -->
      @include('pages.reports.report.repo4')
      <!-- END group repo #4 -->

      <!-- START group repo #5 -->
      @include('pages.reports.report.repo5')
      <!-- END group repo #5 -->
    </div>
  </div>

</div>
@endsection