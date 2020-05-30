@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  <h2 class="mb-3">
    @isset($brief)
    Редактирование записи
    @else
    Добавление записи
    @endisset
  </h2>

  <form method="POST" class="bk-form" @isset($brief) action="{{ route('briefs.update', $brief) }}" @else action="{{ route('briefs.store') }}" @endisset>

    @csrf

    @isset($brief)
    @method('PUT')
    @endisset

    <div class="bk-form__wrap pb-2" data-info="Сведения на 6 часов">
      <div class="row p-0 m-0">

        <!-- START group date -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Дата сводки</h6>
        <div class="col-sm-auto form-group mb-2 pl-0">
          <input name="date_brief" type="date" class="form-control bk-form__input" value="{{ old('date_brief', isset($brief) ? $brief->date_brief : null) }}" required>
        </div>
        <!-- END group date -->

        <!-- START group temp and pressure-->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Температура и давление</h6>
        <div class="bk-form__tp col-sm-auto form-group mb-2 pl-0">
          <label for="temp" class="bk-form__label mb-0">Темп.</label>
          <input id="temp" type="number" class="form-control bk-form__input" name="temp" required value="{{ old('temp', isset($brief) ? $brief->temp : null) }}">
        </div>

        <div class="bk-form__tp col-sm-auto form-group mb-2 pl-0">
          <label for="pressure" class="bk-form__label mb-0">Давл.</label>
          <input id="pressure" type="number" class="form-control bk-form__input" name="pressure" required value="{{ old('pressure', isset($brief) ? $brief->pressure : null) }}">
        </div>
        <!-- END group temp and pressure-->

        <!-- START group hot_water -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Параметры горячей воды</h6>

        <div class="bk-form__phw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="hw_pst" class="bk-form__label mb-0">
            Р<small class="text-muted align-bottom">пр</small>
          </label>
          <input id="hw_pst" type="text" class="form-control bk-form__input" name="hw_pst" required value="{{ old('hw_pst', isset($brief) ? $brief->hw_pst : null) }}">
        </div>

        <div class="bk-form__phw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="hw_tst" class="bk-form__label mb-0">
            Т<small class="text-muted align-bottom">пр</small>
          </label>
          <input id="hw_tst" type="text" class="form-control bk-form__input" name="hw_tst" required value="{{ old('hw_tst', isset($brief) ? $brief->hw_tst : null) }}">
        </div>

        <div class="bk-form__phw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="hw_pbk" class="bk-form__label mb-0">
            P<small class="text-muted align-bottom">обр</small>
          </label>
          <input id="hw_pbk" type="text" class="form-control bk-form__input" name="hw_pbk" required value="{{ old('hw_pbk', isset($brief) ? $brief->hw_pbk : null) }}">
        </div>

        <div class="bk-form__phw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="hw_tbk" class="bk-form__label mb-0">
            Т<small class="text-muted align-bottom">обр</small>
          </label>
          <input id="hw_tbk" type="text" class="form-control bk-form__input" name="hw_tbk" required value="{{ old('hw_tbk', isset($brief) ? $brief->hw_tbk : null) }}">
        </div>
        <!-- END group hot_water -->

        <!-- START group cold_water -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Параметры холодной воды</h6>
        <div class="bk-form__pcw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="cw_r" class="bk-form__label mb-0">
            Р<small class="text-muted align-bottom">еч</small>
          </label>
          <input id="cw_r" type="text" class="form-control bk-form__input" name="cw_r" required value="{{ old('cw_r', isset($brief) ? $brief->cw_r : null) }}">
        </div>

        <div class="bk-form__pcw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="cw_ot" class="bk-form__label mb-0">
            1,2<small class="text-muted align-bottom">мкр</small>
          </label>
          <input id="cw_ot" type="text" class="form-control bk-form__input" name="cw_ot" required value="{{ old('cw_ot', isset($brief) ? $brief->cw_ot : null) }}">
        </div>

        <div class="bk-form__pcw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="cw_tf" class="bk-form__label mb-0">
            3,4<small class="text-muted align-bottom">мкр</small>
          </label>
          <input id="cw_tf" type="text" class="form-control bk-form__input" name="cw_tf" required value="{{ old('cw_tf', isset($brief) ? $brief->cw_tf : null) }}">
        </div>

        <div class="bk-form__pcw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="cw_fs" class="bk-form__label mb-0">
            5,6<small class="text-muted align-bottom">мкр</small>
          </label>
          <input id="cw_fs" type="text" class="form-control bk-form__input" name="cw_fs" required value="{{ old('cw_fs', isset($brief) ? $brief->cw_fs : null) }}">
        </div>

        <div class="bk-form__pcw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="cw_s" class="bk-form__label mb-0">
            7<small class="text-muted align-bottom">мкр</small>
          </label>
          <input id="cw_s" type="text" class="form-control bk-form__input" name="cw_s" required value="{{ old('cw_s', isset($brief) ? $brief->cw_s : null) }}">
        </div>
        <!-- END group cold_water -->



      </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-outline-success">Сохранить</button>
      <a href="{{ route('briefs.index') }}" class="btn btn-outline-secondary">Назад</a>
    </div>
  </form>
</div>
@endsection