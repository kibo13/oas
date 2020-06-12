@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
  <h2 class="mb-1">Выходные отчеты</h2>

  <div class="d-flex flex-wrap my-3">

    <div class="bk-form__datepicker">
      <small class="bk-form__datepicker--text text-dark font-weight-bold">Начало периода</small>
      <input type="date" name="date_from" class="bk-form__datepicker--field form-control rounded-0" value="{{ request()->date_from }}" required>
    </div>

    <div class="bk-form__datepicker">
      <small class="bk-form__datepicker--text text-dark font-weight-bold">Конец периода</small>
      <input type="date" name="date_to" class="bk-form__datepicker--field bl-none form-control rounded-0" value="{{ request()->date_to }}" required>
    </div>

    <div class="ml-sm-1 mt-1 mt-sm-0">
      <select class="custom-select rounded-0">
        <option value="0" selected>Указать</option>
        <option value="1">Сутки</option>
        <option value="2">Месяц</option>
        <option value="3">Год</option>
      </select>
    </div>

    <div class="ml-1 mt-1 mt-sm-0">
      <a href="javascript:void(0);" class="btn btn-outline-primary">
        Отчет
      </a>
    </div>

  </div>

  <div class="bk-form__wrap pb-2" data-info="Отчеты">

    <div class="form-check mb-2">
      <input class="form-check-input" type="radio" name="report" id="repo1" value="option1">
      <label class="form-check-label" for="repo1">
        Сведения по водоснабжению объектов ГУПЖХ
      </label>
    </div>

    <div class="form-check mb-2">
      <input class="form-check-input" type="radio" name="report" id="repo2" value="option2">
      <label class="form-check-label" for="repo2">
        Сведения о неустраненных авариях
      </label>
    </div>

    <div class="form-check mb-2">
      <input class="form-check-input" type="radio" name="report" id="repo3" value="option3">
      <label class="form-check-label" for="repo3">
        Сведения об аварийном состоянии ЖЭУ
      </label>
    </div>

    <div class="form-check mb-2">
      <input class="form-check-input" type="radio" name="report" id="repo4" value="option4">
      <label class="form-check-label" for="repo4">
        Сведения об аварийном состоянии жилого дома
      </label>
    </div>

    <div class="form-check mb-2">
      <input class="form-check-input" type="radio" name="report" id="repo5" value="option5">
      <label class="form-check-label" for="repo5">
        Анализ аварий, зарегистрированных в ОАС
      </label>
    </div>

  </div>



</div>
@endsection