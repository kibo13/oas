@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  <h2 class="mb-3">
		@isset($organization)
			Редактирование записи
		@else 
			Добавление записи
		@endisset
	</h2>

  <form method="POST" @isset($organization) action="{{ route('organizations.update', $organization) }}" @else action="{{ route('organizations.store') }}" @endisset class="bk-form">
    @csrf

    <div>
      @isset($organization)
      @method('PUT')
      @endisset

      <div class="form-group">
        <label for="name" class="bk-form__label mb-0">Предприятие</label>
        <input id="name" type="text" class="form-control bk-form__input" name="name" required value="@isset($organization) {{ $organization->name }} @endisset" placeholder="Введите наименование предприятия" autofocus>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-outline-success">Сохранить</button>
        <a href="{{ route('organizations.index') }}" class="btn btn-outline-secondary">Назад</a>
      </div>

    </div>
  </form>
</div>
@endsection