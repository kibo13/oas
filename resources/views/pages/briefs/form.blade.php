@extends('layouts.master')

@section('content')
<div id="brief-form" class="overflow-hidden pt-4 py-2">

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
          <input name="date_brief" type="date" class="form-control bk-form__input" value="{{ old('date_brief', isset($brief) ? $brief->date_brief : $now) }}" required>
        </div>
        <!-- END group date -->

        <!-- START group temp and pressure-->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Температура и давление</h6>
        <div class="bk-form__tp col-sm-auto form-group mb-2 pl-0">
          <label for="temp" class="bk-form__label mb-0">Темп.</label>
          <input id="temp" type="number" class="form-control bk-form__input" name="temp" required placeholder="39" value="{{ old('temp', isset($brief) ? $brief->temp : null) }}">
        </div>

        <div class="bk-form__tp col-sm-auto form-group mb-2 pl-0">
          <label for="pressure" class="bk-form__label mb-0">Давл.</label>
          <input id="pressure" type="number" class="form-control bk-form__input" name="pressure" required placeholder="380" value="{{ old('pressure', isset($brief) ? $brief->pressure : null) }}">
        </div>
        <!-- END group temp and pressure-->

        <!-- START group hot_water -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Параметры горячей воды</h6>

        <div class="bk-form__phw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="lab-1" class="bk-form__label mb-0">
            Р<small class="text-muted align-bottom">пр</small>
          </label>
          <input id="lab-1" name="kg_pst" type="text" class="bk-pa form-control bk-form__input" data-pa="hw_pst" required placeholder="5.9" value="{{ old('kg_pst', isset($brief) ? $brief->kg_pst : null) }}">

          <input id="hw_pst" class="bk-form__num" type="hidden" name="hw_pst" value="{{ old('hw_pst', isset($brief) ? $brief->hw_pst : null) }}">
        </div>

        <div class="bk-form__phw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="hw_tst" class="bk-form__label mb-0">
            Т<small class="text-muted align-bottom">пр</small>
          </label>
          <input id="hw_tst" type="text" class="form-control bk-form__input" name="hw_tst" required placeholder="58" value="{{ old('hw_tst', isset($brief) ? $brief->hw_tst : null) }}">
        </div>

        <div class="bk-form__phw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="lab-2" class="bk-form__label mb-0">
            P<small class="text-muted align-bottom">обр</small>
          </label>
          <input id="lab-2" type="text" name="kg_pbk" class="bk-pa form-control bk-form__input" data-pa="hw_pbk" required placeholder="2.8" value="{{ old('kg_pbk', isset($brief) ? $brief->kg_pbk : null) }}">

          <input id="hw_pbk" class="bk-form__num" type="hidden" name="hw_pbk" value="{{ old('hw_pbk', isset($brief) ? $brief->hw_pbk : null) }}">
        </div>

        <div class="bk-form__phw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="hw_tbk" class="bk-form__label mb-0">
            Т<small class="text-muted align-bottom">обр</small>
          </label>
          <input id="hw_tbk" type="text" class="form-control bk-form__input" name="hw_tbk" required placeholder="49" value="{{ old('hw_tbk', isset($brief) ? $brief->hw_tbk : null) }}">
        </div>
        <!-- END group hot_water -->

        <!-- START group cold_water -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Параметры холодной воды</h6>
        <div class="bk-form__pcw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="lab-3" class="bk-form__label mb-0">
            Р<small class="text-muted align-bottom">еч</small>
          </label>
          <input id="lab-3" type="text" name="kg_r" class="bk-pa form-control bk-form__input" data-pa="cw_r" required placeholder="3.1" value="{{ old('kg_r', isset($brief) ? $brief->kg_r : null) }}">

          <input id="cw_r" class="bk-form__num" type="hidden" name="cw_r" value="{{ old('cw_r', isset($brief) ? $brief->cw_r : null) }}">
        </div>

        <div class="bk-form__pcw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="lab-4" class="bk-form__label mb-0">
            1,2<small class="text-muted align-bottom">мкр</small>
          </label>
          <input id="lab-4" type="text" name="kg_ot" class="bk-pa form-control bk-form__input" data-pa="cw_ot" required placeholder="3.0" value="{{ old('kg_ot', isset($brief) ? $brief->kg_ot : null) }}">

          <input id="cw_ot" class="bk-form__num" type="hidden" name="cw_ot" value="{{ old('cw_ot', isset($brief) ? $brief->cw_ot : null) }}">
        </div>

        <div class="bk-form__pcw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="lab-5" class="bk-form__label mb-0">
            3,4<small class="text-muted align-bottom">мкр</small>
          </label>
          <input id="lab-5" type="text" name="kg_tf" class="bk-pa form-control bk-form__input" data-pa="cw_tf" required placeholder="3.2" value="{{ old('kg_tf', isset($brief) ? $brief->kg_tf : null) }}">

          <input id="cw_tf" class="bk-form__num" type="hidden" name="cw_tf" value="{{ old('cw_tf', isset($brief) ? $brief->cw_tf : null) }}">
        </div>

        <div class="bk-form__pcw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="lab-6" class="bk-form__label mb-0">
            5,6<small class="text-muted align-bottom">мкр</small>
          </label>
          <input id="lab-6" type="text" name="kg_fs" class="bk-pa form-control bk-form__input" data-pa="cw_fs" required placeholder="3.3" value="{{ old('kg_fs', isset($brief) ? $brief->kg_fs : null) }}">

          <input id="cw_fs" class="bk-form__num" type="hidden" name="cw_fs" value="{{ old('cw_fs', isset($brief) ? $brief->cw_fs : null) }}">
        </div>

        <div class="bk-form__pcw col-sm-auto form-group mb-2 pl-0 align-items-center d-flex flex-column">
          <label for="lab-7" class="bk-form__label mb-0">
            7<small class="text-muted align-bottom">мкр</small>
          </label>
          <input id="lab-7" type="text" name="kg_s" class="bk-pa form-control bk-form__input" data-pa="cw_s" required placeholder="3.1" value="{{ old('kg_s', isset($brief) ? $brief->kg_s : null) }}">

          <input id="cw_s" class="bk-form__num" type="hidden" name="cw_s" value="{{ old('cw_s', isset($brief) ? $brief->cw_s : null) }}">

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