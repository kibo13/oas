@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

  <h2 class="mb-3">
		@isset($branch)
			Редактирование записи
		@else 
			Добавление записи
		@endisset
	</h2>

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

      <div class="form-group">
        <button type="submit" class="btn btn-outline-success">Сохранить</button>
        <a href="{{ route('branches.index') }}" class="btn btn-outline-secondary">Назад</a>
      </div>


    </div>
  </form>
</div>
@endsection