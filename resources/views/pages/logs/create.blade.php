<div id="bk-log" class="mr-3 bk-hidden">
  <h6 class="w-100 border-bottom mb-3 mr-3 py-1 pl-0 font-weight-bold">
    Добавление записи
  </h6>

  <div class="bk-form__wrap w-100 mr-3" data-info="Общие сведения">
    <form method="POST" class="bk-form" action="{{ route('logs.store') }}">
      @csrf

      <div class="row p-0 m-0">
        <!-- START group bid_id -->
        <input name="bid_id" type="hidden" value="{{ $bid->id }}">
        <!-- END group bid_id -->

        <!-- START group type_log -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Тип действия</h6>
        <div class="col-sm-auto form-group mb-2 pl-0">
          <select name="type_log" class="form-control bk-form__input">
            <option disabled selected>Выберите тип действия</option>
            @foreach($type_log as $id => $val)
            <option value="{{ $id }}">
              {{ $val['name'] }}
            </option>
            @endforeach
          </select>
        </div>
        <!-- END group type_log -->

        <!-- START group date and time log -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Дата и время действия</h6>
        <div class="bk-form__date col-sm-auto form-group mb-2 pl-0">
          <input name="date_log" type="date" class="form-control bk-form__input" value="{{ old('date_log') }}" required>
        </div>

        <div class="bk-form__time col-sm-auto form-group mb-2 pl-0">
          <input name="time_log" type="time" class="form-control bk-form__input" value="{{ old('time_log') }}" required>
        </div>
        <!-- END group date and time log -->

        <!-- START group home_crane -->
        @if($bid->type->slug == 'san')
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Отключен дом</h6>
        <div class="mb-2">
          <div class="form-check form-check-inline" style="user-select: none;">
            <input class="form-check-input" type="checkbox" name="home_hw" id="home_hw" value="1">
            <label class="form-check-label" for="home_hw">г/в</label>
          </div>

          <div class="form-check form-check-inline" style="user-select: none;">
            <input class="form-check-input" type="checkbox" name="home_cw" id="home_cw" value="1">
            <label class="form-check-label" for="home_cw">x/в</label>
          </div>

          <div class="form-check form-check-inline" style="user-select: none;">
            <input class="form-check-input" type="checkbox" name="home_h" id="home_h" value="1">
            <label class="form-check-label" for="home_h">отопление</label>
          </div>
        </div>

        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Отключен стояк</h6>
        <div class="mb-2">
          <div class="form-check form-check-inline" style="user-select: none;">
            <input class="form-check-input" type="checkbox" name="crane_hw" id="crane_hw" value="1">
            <label class="form-check-label" for="crane_hw">г/в</label>
          </div>

          <div class="form-check form-check-inline" style="user-select: none;">
            <input class="form-check-input" type="checkbox" name="crane_cw" id="crane_cw" value="1">
            <label class="form-check-label" for="crane_cw">x/в</label>
          </div>

          <div class="form-check form-check-inline" style="user-select: none;">
            <input class="form-check-input" type="checkbox" name="crane_h" id="crane_h" value="1">
            <label class="form-check-label" for="crane_h">отопление</label>
          </div>
        </div>
        @endif
        <!-- END group home_crane -->

        <!-- START group solution -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Принятые меры</h6>
        <div class="w-100 form-group mb-2 pl-0 mr-3">
          <textarea class="form-control" name="solution" style="height:80px;" placeholder="Опишите принятые меры">{{ old('solution') }}</textarea>
        </div>
        <!-- END group solution -->

        <div class="w-100 form-group mb-2 pl-0 mr-3">
          <button type="submit" class="btn btn-outline-success">Сохранить</button>
        </div>


      </div>
    </form>
  </div>
</div>