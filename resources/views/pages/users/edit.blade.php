@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  <h2>Редактирование записи</h2>

  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>$error</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form method="POST" action="{{ route('users.update', $user) }}" class="bk-form">
    @csrf
    <div>
      @method('PUT')

      <div class="bk-form__wrap" data-info="Пользователь">
        <div class="form-group mb-2">
          <label for="name" class="bk-form__label mb-0">Логин</label>
          <input id="name" type="text" class="form-control bk-form__text" name="name" placeholder="Введите логин" autocomplete="off" value="@if(old('name')) {{ old('name') }} @else {{ $user->name }} @endif">
        </div>

        <div class="form-group mb-2">
          <label for="email" class="bk-form__label mb-0">E-mail</label>
          <input id="email" type="text" class="form-control bk-form__text" name="email" placeholder="Введите E-mail" autocomplete="off" value="@if(old('email')) {{ old('email') }} @else {{ $user->email }} @endif">
        </div>

        <div class="form-group mb-0">
          <label for="password" class="bk-form__label mb-2">Пароль</label>
          <input id="password" type="password" class="form-control bk-form__text" name="password" autocomplete="off">
        </div>

        <div class="form-group mb-0">
          <label for="password" class="bk-form__label mb-0">Подтверждение</label>
          <input id="password" type="password" class="form-control bk-form__text" name="password_confirmation" autocomplete="off">
        </div>
      </div>
      <!-- .bk-form__wrappers  -->

      <div class="bk-form__wrap" data-info="Роли">

        @foreach($roles as $key => $role)
        <div class="custom-control custom-checkbox mb-2">
          <input type="checkbox" class="custom-control-input" @if($user->roles->where('id', $role->id)->count())
          checked="checked"
          @endif

          name="roles[]"
          value="{{ $role->id }}"
          id="{{ $key }}"
          >
          <label class="custom-control-label bk-form__label--checkbox" for="{{ $key }}">
            {{ ucfirst($role->name) }}
          </label>
        </div>
        @endforeach

      </div>
      <!-- .bk-form__wrappers  -->

      <button type="submit" class="btn btn-outline-success">Сохранить</button>
    </div>
  </form>

</div>
@endsection