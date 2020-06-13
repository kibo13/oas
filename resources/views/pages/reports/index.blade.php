@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-1">Выходные отчеты</h2>


  <!-- START group repo #1 -->
  <form method="GET" action="{{ route('report.brief') }}" data-id="r1" class="bk-repo my-3">

    <div class="d-flex flex-wrap">

      <div class="bk-form__datepicker">
        <small class="bk-form__datepicker--text text-dark font-weight-bold">Начало периода</small>
        <input id="repo1_from" type="date" name="repo1_from" class="date_from bk-form__datepicker--field form-control rounded-0" value="{{ request()->repo1_from }}" required>
      </div>

      <div class="bk-form__datepicker">
        <small class="bk-form__datepicker--text text-dark font-weight-bold">Конец периода</small>
        <input id="repo1_to" type="date" name="repo1_to" class="date_to bk-form__datepicker--field bl-none form-control rounded-0" value="{{ request()->repo1_to }}" required>
      </div>

      <div class="ml-0 ml-sm-1 mt-1 mt-sm-0">
        <button id="repo1" type="submit" class="btn btn-outline-primary">Отчет</button>
      </div>

    </div>
  </form>
  <!-- END group repo #1 -->

  <!-- START group repo #2 -->
  <div class="bk-repo my-3 bk-hidden border border-danger" data-id="r2">
    <h3>Report #2</h3>
  </div>
  <!-- END group repo #2 -->

  <!-- START group repo #3 -->
  <div class="bk-repo my-3 bk-hidden border border-danger" data-id="r3">
    <h3>Report #3</h3>
  </div>
  <!-- END group repo #3 -->

  <!-- START group repo #4 -->
  <div class="bk-repo my-3 bk-hidden border border-danger" data-id="r4">
    <h3>Report #4</h3>
  </div>
  <!-- END group repo #4 -->

  <!-- START group repo #5 -->
  <div class="bk-repo my-3 bk-hidden border border-danger" data-id="r5">
    <h3>Report #5</h3>
  </div>
  <!-- END group repo #5 -->

  @include('includes.alerts')

  <div class="bk-form__wrap pb-2" data-info="Отчеты">

    <div class="form-check mb-2">
      <input class="bk-radio form-check-input" type="radio" name="report" id="r1" value="option1" checked>
      <label class="form-check-label" for="r1">
        Сведения по водоснабжению объектов ГУПЖХ
      </label>
    </div>

    <div class="form-check mb-2">
      <input class="bk-radio form-check-input" type="radio" name="report" id="r2" value="option2">
      <label class="form-check-label" for="r2">
        Сведения о неустраненных авариях
      </label>
    </div>

    <div class="form-check mb-2">
      <input class="bk-radio form-check-input" type="radio" name="report" id="r3" value="option3">
      <label class="form-check-label" for="r3">
        Сведения об аварийном состоянии ЖЭУ
      </label>
    </div>

    <div class="form-check mb-2">
      <input class="bk-radio form-check-input" type="radio" name="report" id="r4" value="option4">
      <label class="form-check-label" for="r4">
        Сведения об аварийном состоянии жилого дома
      </label>
    </div>

    <div class="form-check mb-2">
      <input class="bk-radio form-check-input" type="radio" name="report" id="r5" value="option5">
      <label class="form-check-label" for="r5">
        Анализ аварий, зарегистрированных в ОАС
      </label>
    </div>

  </div>



</div>
@endsection