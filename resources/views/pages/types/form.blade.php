@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  <h2 class="mb-3">
		@isset($type)
			Редактирование записи
		@else 
			Добавление записи
		@endisset
	</h2>

  <form method="POST" @isset($type) action="{{ route('types.update', $type) }}" @else action="{{ route('types.store') }}" @endisset class="bk-form">
    @csrf

    <div>
      @isset($type)
      @method('PUT')
      @endisset

      <div class="form-group">
        <label for="name" class="bk-form__label mb-0">Тип</label>
        <input id="name" type="text" class="form-control bk-form__input" name="name" required value="@isset($type) {{ $type->name }} @endisset" placeholder="Введите название типа" autofocus>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-outline-success">Сохранить</button>
        <a href="{{ route('types.index') }}" class="btn btn-outline-secondary">Назад</a>
      </div>

    </div>
  </form>
</div>
@endsection