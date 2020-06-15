@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  <h2 class="mb-3">
    @isset($statement)
    Редактирование записи
    @else
    Добавление записи
    @endisset
  </h2>

  <form method="POST" class="bk-form" @isset($statement) action="{{ route('statements.update', $statement) }}" @else action="{{ route('statements.store') }}" @endisset>

    @csrf

    @isset($statement)
    @method('PUT')
    @endisset

    <div class="bk-form__wrap pb-2" data-info="Общие сведения">
      <div class="row p-0 m-0">

        <!-- START group date and time income -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Дата и время поступления</h6>
        <div class="bk-form__date col-sm-auto form-group mb-2 pl-0">
          <input name="date_in" type="date" class="form-control bk-form__input" value="{{ old('date_in', isset($statement) ? $statement->date_in : null) }}" required>
        </div>

        <div class="bk-form__time col-sm-auto form-group mb-2 pl-0">
          <input name="time_in" type="time" class="form-control bk-form__input" value="{{ old('time_in', isset($statement) ? $statement->time_in : null) }}" required>
        </div>
        <!-- END group date and time income -->

        <!-- START group plot -->
        <input type="hidden" name="plot" value="{{ old('plot', isset($statement) ? $statement->plot : $branch->name) }}">
        <!-- END group plot -->

        <!-- START group receiver -->
        <input type="hidden" name="receiver" value="{{ old('receiver', isset($statement) ? $statement->receiver : $user) }}">
        <!-- END group receiver -->

        <!-- START group plots -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">
          Участок
          <small class="text-muted align-top">
            @isset($statement)
            {{ $statement->branch->name }}
            @else
            {{ $branch->id != 9 ? $branch->name : null}}
            @endisset
          </small>
        </h6>

        @if($branch->id == 9)
        <div class="bk-form__plot col-sm-auto form-group mb-2 pl-0">
          <select id="statement-plot" name="branch_id" class="form-control bk-form__input">
            <option disabled selected>Выберите участок</option>
            @foreach($plots as $plot)
            <option 
              value="{{ $plot->id }}" 
              @isset($statement) 
                @if($statement->branch_id == $plot->id)
                  selected
                @endif
              @endisset
            >
              {{ ucfirst($plot->name) }}
            </option>
            @endforeach
          </select>
        </div>
        <h6 class="w-100 m-0 p-0"></h6>
        @else
        <input id="my-num" type="hidden" name="branch_id" value="{{ old('branch_id', isset($statement) ? $statement->branch_id : $branch->id) }}">
        @endif

        <div class="bk-form__street col-sm-auto form-group mb-2 pl-0">
          <label for="statement-street" class="bk-form__label mb-0">Адрес</label>
          <select name="street_id" id="statement-street" class="form-control bk-form__input">
            <option disabled selected>Выберите адрес</option>
            @if($branch->id == 9)
              @isset($statement) 
                @foreach($stedit as $street)
                <option 
                  value="{{ $street->street_id }}" 
                  data-home="{{ $street->num_home }}" 
                    @if($statement->street_id == $street->street_id && $statement->num_home == $street->num_home)
                      selected
                    @endif
                >
                  {{ ucfirst($street->street->name) }}
                  д.{{ ucfirst($street->num_home) }}
                </option>
                @endforeach
              @endisset
            @else
              @foreach($streets as $street)
              <option 
                value="{{ $street->street_id }}" 
                data-home="{{ $street->num_home }}" 
                @isset($statement) 
                  @if($statement->street_id == $street->street_id && $statement->num_home == $street->num_home)
                    selected
                  @endif
                @endisset
              >
                {{ ucfirst($street->street->name) }}
                д.{{ ucfirst($street->num_home) }}
              </option>
              @endforeach
            @endif

          </select>
        </div>

        <input id="statement-home" type="hidden" name="num_home" value="{{ old('num_home', isset($statement) ? $statement->num_home : null) }}">

        <div class="bk-form__home col-sm-auto form-group mb-2 pl-0">
          <label for="num_flat" class="bk-form__label mb-0">Квартира</label>
          <input id="num_flat" min="1" max="150" type="number" class="form-control bk-form__input" name="num_flat" required value="{{ old('num_flat', isset($statement) ? $statement->num_flat : null) }}">
        </div>
        <!-- END group plots -->

        <!-- START group user -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Потребитель</h6>
        <div class="col-sm-auto form-group mb-2 pl-0">
          <label for="last_name" class="bk-form__label mb-0">Фамилия</label>
          <input id="last_name" type="text" class="form-control bk-form__input" name="last_name" required placeholder="Введите фамилию" value="{{ old('last_name', isset($statement) ? $statement->last_name : null) }}">
        </div>

        <div class="col-sm-auto form-group mb-2 pl-0">
          <label for="phone" class="bk-form__label mb-0">Телефон</label>
          <input id="phone" type="text" class="form-control bk-form__input" name="phone" placeholder="Введите телефон" value="{{ old('phone', isset($statement) ? $statement->phone : null) }}">
        </div>
        <!-- END group user -->

        <!-- START group type_defect -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Тип (э/с)</h6>
        <div class="col-sm-auto form-group mb-2 pl-0">

          <select name="type_id" class="form-control bk-form__input">
            <option disabled selected>Выберите тип</option>
            @foreach($types as $type)
            <option value="{{ $type->id }}" @isset($statement) @if($statement->type_id == $type->id)
              selected
              @endif
              @endisset
              >
              {{ ucfirst($type->name) }}
            </option>
            @endforeach
          </select>
        </div>
        <!-- END group type_defect -->

        <!-- START group description -->
        <h6 class="w-100 border-bottom mr-3 py-1 pl-0">Характер неисправности</h6>
        <div class="w-100 form-group mb-2 pl-0 mr-3">
          <textarea class="form-control" name="desc" style="height:80px;" placeholder="Введите описание неисправности">{{ old('desc', isset($statement) ? $statement->desc : null) }}</textarea>
        </div>
        <!-- END group description -->

      </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-outline-success">Сохранить</button>
      <a href="{{ route('statements.index') }}" class="btn btn-outline-secondary">Назад</a>
    </div>
  </form>
</div>
@endsection