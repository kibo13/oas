@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  <h2 class="mb-3">Редактирование записи</h2>

  <form method="POST" class="bk-form" action="{{ route('logs.update', $log) }}">

    @csrf
    @method('PUT')

    <div class="bk-form__wrap pb-2" data-info="Общие сведения">
      <div class="row p-0 m-0">

        <!-- START group type_log -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Тип действия</h6>
        <div class="col-sm-auto form-group mb-2 pl-0">
          <select name="type_log" class="form-control bk-form__input">
            <option disabled selected>Выберите тип действия</option>
            @foreach($type_log as $id => $val)
            <option value="{{ $id }}" @isset($log) @if($log->type_log == $id)
              selected
              @endif
              @endisset
              >
              {{ $val['name'] }}
            </option>
            @endforeach
          </select>
        </div>
        <!-- END group type_log -->

        <!-- START group date and time log -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Дата и время</h6>
        <div class="bk-form__date col-sm-auto form-group mb-2 pl-0">
          <input name="date_log" type="date" class="form-control bk-form__input" value="{{ old('date_log', isset($log) ? $log->date_log : null) }}" required>
        </div>

        <div class="bk-form__time col-sm-auto form-group mb-2 pl-0">
          <input name="time_log" type="time" class="form-control bk-form__input" value="{{ old('time_log', isset($log) ? $log->time_log : null) }}" required>
        </div>
        <!-- END group date and time log -->

        <!-- START group home_crane -->
        @if($log->bid->type->slug == 'san')
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Отключен дом</h6>
        <div class="mb-2">
          <div class="form-check form-check-inline" style="user-select: none;">
            <input type="hidden" name="home_hw" value="0">
            <input class="form-check-input" type="checkbox" name="home_hw" id="home_hw" value="1" @isset($log) @if($log->home_hw == 1)
            checked="checked"
            @endif
            @endisset
            >
            <label class="form-check-label" for="home_hw">г/в</label>
          </div>

          <div class="form-check form-check-inline" style="user-select: none;">
            <input type="hidden" name="home_cw" value="0">
            <input class="form-check-input" type="checkbox" name="home_cw" id="home_cw" value="1" @isset($log) @if($log->home_cw == 1)
            checked="checked"
            @endif
            @endisset
            >
            <label class="form-check-label" for="home_cw">x/в</label>
          </div>

          <div class="form-check form-check-inline" style="user-select: none;">
            <input type="hidden" name="home_h" value="0">
            <input class="form-check-input" type="checkbox" name="home_h" id="home_h" value="1" @isset($log) @if($log->home_h == 1)
            checked="checked"
            @endif
            @endisset
            >
            <label class="form-check-label" for="home_h">отопление</label>
          </div>
        </div>

        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Отключен стояк</h6>
        <div class="mb-2">
          <div class="form-check form-check-inline" style="user-select: none;">
            <input type="hidden" name="crane_hw" value="0">
            <input class="form-check-input" type="checkbox" name="crane_hw" id="crane_hw" value="1" @isset($log) @if($log->crane_hw == 1)
            checked="checked"
            @endif
            @endisset
            >
            <label class="form-check-label" for="crane_hw">г/в</label>
          </div>

          <div class="form-check form-check-inline" style="user-select: none;">
            <input type="hidden" name="crane_cw" value="0">
            <input class="form-check-input" type="checkbox" name="crane_cw" id="crane_cw" value="1" @isset($log) @if($log->crane_cw == 1)
            checked="checked"
            @endif
            @endisset
            >
            <label class="form-check-label" for="crane_cw">x/в</label>
          </div>

          <div class="form-check form-check-inline" style="user-select: none;">
            <input type="hidden" name="crane_h" value="0">
            <input class="form-check-input" type="checkbox" name="crane_h" id="crane_h" value="1" @isset($log) @if($log->crane_h == 1)
            checked="checked"
            @endif
            @endisset >
            <label class="form-check-label" for="crane_h">отопление</label>
          </div>
        </div>
        @endif
        <!-- END group home_crane -->

        <!-- START group receiver -->
        <input type="hidden" name="receiver" value="{{ $user_sign }}">
        <!-- END group receiver -->

        <!-- START group type -->
        <input type="hidden" name="type_id" value="{{ $log->type_id }}">
        <!-- END group type -->

        <!-- START group defect -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Вид неисправности</h6>
        <div class="col-sm-auto form-group mb-2 pl-0">
          <select name="defect_id" class="form-control bk-form__input">
            <option disabled selected>Выберите вид неисправности</option>
            @foreach($defects as $defect)
            <option 
              value="{{ $defect->id }}"
              @isset($log) 
                @if($log->defect_id == $defect->id)
								  selected
								@endif
              @endisset
            >
              {{ ucfirst($defect->desc) }}
            </option>
            @endforeach
          </select>
        </div>
        <!-- END group defect -->

        <!-- START group solution -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Принятые меры</h6>
        <div class="w-100 form-group mb-2 pl-0 mr-3">
          <textarea class="form-control" name="solution" style="height:80px;" placeholder="Опишите принятые меры">{{ old('solution', isset($log) ? $log->solution : null) }}</textarea>
        </div>
        <!-- END group solution -->

      </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-outline-success">Сохранить</button>
      <a href="{{ route('bids.show', $log->bid->id) }}" class="btn btn-outline-secondary">Назад</a>
    </div>
  </form>
</div>
@endsection