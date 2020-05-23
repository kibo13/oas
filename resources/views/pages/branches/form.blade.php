@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  @isset($branch)
  <h2>Редактирование записи</h2>
  @else
  <h2>Новая запись</h2>
  @endisset

  <form method="POST" @isset($branch) action="{{ route('branches.update', $branch) }}" @else action="{{ route('branches.store') }}" @endisset class="bk-form">
    @csrf

    <div>
      @isset($branch)
      @method('PUT')
      @endisset

      <div class="form-group">
        <label for="name" class="bk-form__label mb-0">Отдел</label>
        <input id="name" type="text" class="form-control bk-form__input" name="name" required value="@isset($branch) {{ $branch->name }} @endisset" placeholder="Введите наименование должности" autofocus>
      </div>

      <button type="submit" class="btn btn-outline-success">Сохранить</button>

    </div>
  </form>
</div>
@endsection