@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  <h4 class="mb-3">
    Статус по заявке №{{ $statement->id }}<br>
    <small class="bk-text text-muted">от {{ getDMY($statement->date_in) }}г. <span class="bk-text--small align-text-top">{{ getHI($statement->time_in) }}</span></small>
  </h4>

  <div class="row p-0 m-0">

    <!-- START group address -->
    <h6 class="w-100 border-bottom mb-0 mr-3 py-1 pl-0 font-weight-bold">Адрес</h6>
    <div data-type="{{ $statement->type_id }}" class="w-100 form-group mb-1 pl-0 mr-3">
      <span class="text-muted">{{ $statement->street->name }} {{ $statement->num_home }} - {{ $statement->num_flat }}</span>
    </div>
    <!-- END group address -->

    <!-- START group defect -->
    <h6 class="w-100 border-bottom mb-0 mr-3 py-1 pl-0 font-weight-bold">
      Неисправность
      <small class="bk-text text-muted align-text-top text-lowercase">{{ $statement->type->name }}</small>
    </h6>
    <div data-type="{{ $statement->type_id }}" class="w-100 form-group mb-1 pl-0 mr-3">
      <span class="text-muted align-baseline">{{ $statement->desc }}</span>
    </div>
    <!-- END group defect -->

  </div>

  <form method="POST" action="{{ route('statements.update', $statement) }}">

    @csrf
    @method('PUT')

    <div class="row m-0 p-0">
      <!-- START group home_crane -->
      @if($statement->type->slug == 'san')
      <h6 class="w-100 border-bottom mr-3 py-1 pl-0 font-weight-bold">Отключен дом</h6>
      <div class="mb-2">
        <div class="form-check form-check-inline" style="user-select: none;">
          <input type="hidden" name="home_hw" value="0">
          <input class="form-check-input" type="checkbox" name="home_hw" id="home_hw" value="1" @isset($statement) @if($statement->home_hw == 1)
          checked="checked"
          @endif
          @endisset>
          <label class="form-check-label" for="home_hw">г/в</label>
        </div>

        <div class="form-check form-check-inline" style="user-select: none;">
          <input type="hidden" name="home_cw" value="0">
          <input class="form-check-input" type="checkbox" name="home_cw" id="home_cw" value="1" @isset($statement) @if($statement->home_cw == 1)
          checked="checked"
          @endif
          @endisset>
          <label class="form-check-label" for="home_cw">x/в</label>
        </div>

        <div class="form-check form-check-inline" style="user-select: none;">
          <input type="hidden" name="home_h" value="0">
          <input class="form-check-input" type="checkbox" name="home_h" id="home_h" value="1" @isset($statement) @if($statement->home_h == 1)
          checked="checked"
          @endif
          @endisset>
          <label class="form-check-label" for="home_h">отопление</label>
        </div>
      </div>

      <h6 class="w-100 border-bottom mr-3 py-1 pl-0 font-weight-bold">Отключен стояк</h6>
      <div class="mb-2">
        <div class="form-check form-check-inline" style="user-select: none;">
          <input type="hidden" name="crane_hw" value="0">
          <input class="form-check-input" type="checkbox" name="crane_hw" id="crane_hw" value="1" @isset($statement) @if($statement->crane_hw == 1)
          checked="checked"
          @endif
          @endisset>
          <label class="form-check-label" for="crane_hw">г/в</label>
        </div>

        <div class="form-check form-check-inline" style="user-select: none;">
          <input type="hidden" name="crane_cw" value="0">
          <input class="form-check-input" type="checkbox" name="crane_cw" id="crane_cw" value="1" @isset($statement) @if($statement->crane_cw == 1)
          checked="checked"
          @endif
          @endisset>
          <label class="form-check-label" for="crane_cw">x/в</label>
        </div>

        <div class="form-check form-check-inline" style="user-select: none;">
          <input type="hidden" name="crane_h" value="0">
          <input class="form-check-input" type="checkbox" name="crane_h" id="crane_h" value="1" @isset($statement) @if($statement->crane_h == 1)
          checked="checked"
          @endif
          @endisset>
          <label class="form-check-label" for="crane_h">отопление</label>
        </div>
      </div>
      @endif
      <!-- END group home_crane -->

      <!-- START group action -->
      <h6 class="w-100 border-bottom mr-3 py-1 pl-0 font-weight-bold">Действие</h6>
      <div class="col-sm-auto form-group mb-2 pl-0">
        <select name="state" class="form-control bk-form__input">
          <option disabled selected>Выберите действие</option>
          @foreach($actions as $action)
          <option value="{{ $action['id'] }}" @isset($statement) @if($statement->state == $action['id'])
            selected
            @endif
            @endisset
            >
            {{ $action['name'] }}
          </option>
          @endforeach
        </select>
      </div>
      <!-- END group action -->

      <!-- START group date_action -->
      <h6 class="w-100 border-bottom mr-3 py-1 pl-0 font-weight-bold">Дата и время действия</h6>
      <div class="bk-form__date col-sm-auto form-group mb-2 pl-0">
        <input name="date_off" type="date" class="form-control bk-form__input" value="{{ old('date_off', isset($statement) ? $statement->date_off : null) }}" required>
      </div>

      <div class="bk-form__time col-sm-auto form-group mb-2 pl-0">
        <input name="time_off" type="time" class="form-control bk-form__input" value="{{ old('time_off', isset($statement) ? $statement->time_off : null) }}" required>
      </div>
      <!-- END group date_action -->

      <!-- START group type_defect -->
      <h6 class="w-100 border-bottom mr-3 py-1 pl-0 font-weight-bold">Вид неисправности</h6>
      <div class="col-sm-auto form-group mb-2 pl-0">
        <select name="defect_id" class="form-control bk-form__input">
          <option disabled selected>Выберите вид неисправности</option>
          @foreach($defects as $defect)
          <option value="{{ $defect->id }}" @isset($statement) @if($statement->defect_id == $defect->id)
            selected
            @endif
            @endisset
            >
            {{ ucfirst($defect->desc) }}
          </option>
          @endforeach
        </select>
      </div>
      <!-- END group type_defect -->

      <!-- START group solution -->
      <h6 class="w-100 border-bottom mr-3 py-1 pl-0 font-weight-bold">Принятые меры</h6>
      <div class="w-100 form-group mb-2 pl-0 mr-3">
        <textarea class="form-control" name="solution" style="height:80px;" placeholder="Опишите принятые меры">{{ old('solution', isset($statement) ? $statement->solution : null) }}</textarea>
      </div>
      <!-- END group solution -->
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-outline-success">Сохранить</button>
      <a href="{{ route('statements.index') }}" class="btn btn-outline-secondary">Назад</a>
    </div>
  </form>

</div>
@endsection