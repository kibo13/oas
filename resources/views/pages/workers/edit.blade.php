@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  <h2 class="mb-3">Редактирование записи</h2>

  <form method="POST" action="{{ route('workers.update', $worker) }}" class="bk-form">
    @csrf
    <div>
      @method('PUT')

      <div class=" bk-form__wrap pb-2" data-info="Персональные данные">

        <div class="row p-0 m-0">

          <div class="col-md-4 form-group mb-2 pl-0">
            <label for="last_name" class="bk-form__label mb-0">Фамилия</label>
            <input id="last_name" type="text" class="form-control bk-form__input" name="last_name" required placeholder="Введите фамилию сотрудника" value="{{ old('last_name', isset($worker) ? $worker->last_name : null) }}">
          </div>

          <div class="col-md-4 form-group mb-2 pl-0">
            <label for="first_name" class="bk-form__label mb-0">Имя</label>
            <input id="first_name" type="text" class="form-control bk-form__input" name="first_name" required placeholder="Введите имя сотрудника" value="{{ old('first_name', isset($worker) ? $worker->first_name : null) }}">
          </div>

          <div class="col-md-4 form-group mb-2 pl-0">
            <label for="mid_name" class="bk-form__label mb-0">Отчество</label>
            <input id="mid_name" type="text" class="form-control bk-form__input" name="mid_name" placeholder="Введите отчество сотрудника" value="{{ old('mid_name', isset($worker) ? $worker->mid_name : null) }}">
          </div>
        </div>

      </div>

      <div class=" bk-form__wrap pb-2" data-info="Отдел и должность">

        <div class="row p-0 m-0">

          <div class="col-md-6 form-group mb-2 pl-0">
            <label for="branch_id" class="bk-form__label mb-0">Отдел</label>

            <select name="branch_id" id="branch_id" class="form-control bk-form__input">
              @foreach($branches as $branch)
              <option value="{{ $branch->id }}" @if($worker->branch_id == $branch->id)
                selected
                @endif
                >
                {{ ucfirst($branch->name) }}
              </option>
              @endforeach
            </select>
          </div>

          <div class="col-md-6 form-group mb-2 pl-0">
            <label for="position_id" class="bk-form__label mb-0">Должность</label>

            <select name="position_id" id="position_id" class="form-control bk-form__input">
              @foreach($positions as $position)
              <option value="{{ $position->id }}" @if($worker->position_id == $position->id)
                selected
                @endif
                >
                {{ ucfirst($position->name) }}
              </option>
              @endforeach
            </select>
          </div>
        </div>

      </div>

      <div class=" bk-form__wrap pb-2" data-info="Адрес">

        <div class="row p-0 m-0">

          <div class="col-md-6 form-group mb-2 pl-0">
            <label for="street" class="bk-form__label mb-0">Улица</label>

            <select name="street_id" id="street" class="form-control bk-form__input">
              @foreach($streets as $street)
              <option value="{{ $street->id }}" @if($worker->street_id == $street->id)
                selected
                @endif
                >
                {{ ucfirst($street->name) }}
              </option>
              @endforeach
            </select>
          </div>

          <div class="col-md-2 form-group mb-2 pl-0">
            <label for="num_home" class="bk-form__label mb-0">Дом</label>
            <input id="num_home" min="1" max="150" type="number" class="form-control bk-form__input" name="num_home" required value="{{ old('num_home', isset($worker) ? $worker->num_home : null) }}">
          </div>

          <div class="col-md-2 form-group mb-2 pl-0">
            <label for="num_corp" class="bk-form__label mb-0">Корпус</label>
            <input id="num_corp" type="text" class="form-control bk-form__input" name="num_corp" value="{{ old('num_corp', isset($worker) ? $worker->num_corp : null) }}">
          </div>

          <div class="col-md-2 form-group mb-2 pl-0">
            <label for="num_flat" class="bk-form__label mb-0">Квартира</label>
            <input id="num_flat" min="1" max="150" type="number" class="form-control bk-form__input" name="num_flat" required value="{{ old('num_flat', isset($worker) ? $worker->num_flat : null) }}">
          </div>
        </div>

      </div>

      <div class=" bk-form__wrap pb-2" data-info="Телефоны">

        <div class="row p-0 m-0">

          <div class="col-md-4 form-group mb-2 pl-0">
            <label for="work_phone" class="bk-form__label mb-0">Рабочий</label>
            <input id="work_phone" type="text" class="form-control bk-form__input" name="work_phone" required placeholder="5-55-55" value="{{ old('work_phone', isset($worker) ? $worker->work_phone : null) }}">
          </div>

          <div class="col-md-4 form-group mb-2 pl-0">
            <label for="home_phone" class="bk-form__label mb-0">Домашний</label>
            <input id="home_phone" type="text" class="form-control bk-form__input" name="home_phone" placeholder="5-55-55" value="{{ old('home_phone', isset($worker) ? $worker->home_phone : null) }}">
          </div>

          <div class="col-md-4 form-group mb-2 pl-0">
            <label for="mob_phone" class="bk-form__label mb-0">Сотовый</label>
            <input id="mob_phone" type="text" class="form-control bk-form__input" name="mob_phone" placeholder="+7-776-123-45-67" value="{{ old('mob_phone', isset($worker) ? $worker->mob_phone : null) }}">
          </div>
        </div>

      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-outline-success">Сохранить</button>
        <a href="{{ route('workers.index') }}" class="btn btn-outline-secondary">Назад</a>
      </div>

    </div>
  </form>
</div>
@endsection