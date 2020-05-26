@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  @isset($street)
  <h2>Редактирование записи</h2>
  @else
  <h2>Добавление записи</h2>
  @endisset

  <form method="POST" @isset($street) action="{{ route('streets.update', $street) }}" @else action="{{ route('streets.store') }}" @endisset class="bk-form">
    @csrf

    <div>
      @isset($street)
      @method('PUT')
      @endisset

      <div class="form-group">
        <label for="name" class="bk-form__label mb-0">Улица</label>
        <input id="name" type="text" class="form-control bk-form__input" name="name" required value="@isset($street) {{ $street->name }} @endisset" placeholder="Введите название улицы" autofocus>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-outline-success">Сохранить</button>
        <a href="{{ route('streets.index') }}" class="btn btn-outline-secondary">Назад</a>
      </div>

    </div>
  </form>
</div>
@endsection