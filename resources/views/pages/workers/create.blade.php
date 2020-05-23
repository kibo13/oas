@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  <h2 class="mb-3">Новая запись</h2>

  <form method="POST" class="bk-form" action="{{ route('workers.store') }}">
    @csrf

    <div>
      <div class=" bk-form__wrap pb-2" data-info="Персональные данные">

        <div class="row p-0 m-0">
          <div class="col-md-4 form-group mb-2 pl-0">
            <label for="last_name" class="bk-form__label mb-0">Фамилия</label>
            <input id="last_name" type="text" class="form-control bk-form__input" name="last_name" required placeholder="Введите фамилию сотрудника" value="{{ old('last_name') }}">
          </div>

          <div class="col-md-4 form-group mb-2 pl-0">
            <label for="first_name" class="bk-form__label mb-0">Имя</label>
            <input id="first_name" type="text" class="form-control bk-form__input" name="first_name" required placeholder="Введите имя сотрудника" value="{{ old('first_name') }}">
          </div>

          <div class="col-md-4 form-group mb-2 pl-0">
            <label for="mid_name" class="bk-form__label mb-0">Отчество</label>
            <input id="mid_name" type="text" class="form-control bk-form__input" name="mid_name" placeholder="Введите отчество сотрудника" value="{{ old('mid_name') }}">
          </div>
        </div>

      </div>

      <div class=" bk-form__wrap pb-2" data-info="Отдел и должность">

        <div class="row p-0 m-0">

          <div class="col-md-6 form-group mb-2 pl-0">
            <label for="branch_id" class="bk-form__label mb-0">Отдел</label>

            <select name="branch_id" id="branch_id" class="form-control bk-form__input">
              @foreach($branches as $branch)
              <option value="{{ $branch->id }}">
                {{ ucfirst($branch->name) }}
              </option>
              @endforeach
            </select>
          </div>

          <div class="col-md-6 form-group mb-2 pl-0">
            <label for="position_id" class="bk-form__label mb-0">Должность</label>

            <select name="position_id" id="position_id" class="form-control bk-form__input">
              @foreach($positions as $position)
              <option value="{{ $position->id }}">
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
              <option value="{{ $street->id }}">
                {{ ucfirst($street->name) }}
              </option>
              @endforeach
            </select>
          </div>

          <div class="col-md-2 form-group mb-2 pl-0">
            <label for="num_home" class="bk-form__label mb-0">Дом</label>
            <input id="num_home" min="1" max="150" type="number" class="form-control bk-form__input" name="num_home" required value="{{ old('num_home') }}">
          </div>

          <div class="col-md-2 form-group mb-2 pl-0">
            <label for="num_corp" class="bk-form__label mb-0">Корпус</label>
            <input id="num_corp" type="text" class="form-control bk-form__input" name="num_corp" value="{{ old('num_corp') }}">
          </div>

          <div class="col-md-2 form-group mb-2 pl-0">
            <label for="num_flat" class="bk-form__label mb-0">Квартира</label>
            <input id="num_flat" min="1" max="150" type="number" class="form-control bk-form__input" name="num_flat" required value="{{ old('num_flat') }}">
          </div>
        </div>

      </div>

      <div class=" bk-form__wrap pb-2" data-info="Телефоны">

        <div class="row p-0 m-0">

          <div class="col-md-4 form-group mb-2 pl-0">
            <label for="work_phone" class="bk-form__label mb-0">Рабочий</label>
            <input id="work_phone" type="text" class="form-control bk-form__input" name="work_phone" required placeholder="5-55-55" value="{{ old('work_phone') }}">
          </div>

          <div class="col-md-4 form-group mb-2 pl-0">
            <label for="home_phone" class="bk-form__label mb-0">Домашний</label>
            <input id="home_phone" type="text" class="form-control bk-form__input" name="home_phone" placeholder="7-77-77" value="{{ old('home_phone') }}">
          </div>

          <div class="col-md-4 form-group mb-2 pl-0">
            <label for="mob_phone" class="bk-form__label mb-0">Сотовый</label>
            <input id="mob_phone" type="text" class="form-control bk-form__input" name="mob_phone" placeholder="+7-776-123-45-67" value="{{ old('mob_phone') }}">
          </div>
        </div>

      </div>

      <button type="submit" class="btn btn-outline-success">Сохранить</button>

    </div>
  </form>
</div>
@endsection