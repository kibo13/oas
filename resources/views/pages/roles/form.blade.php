@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	<h2 class="mb-3">
		@isset($role)
			Редактирование записи
		@else 
			Добавление записи
		@endisset
	</h2>

	<form method="POST" @isset($role) action="{{ route('roles.update', $role) }}" @else action="{{ route('roles.store') }}" @endisset class="bk-form">
		@csrf

		<div>
			@isset($role)
			@method('PUT')
			@endisset

			<div class="form-group mb-2">
				<label for="name" class="bk-form__label">Роль</label>
				<input id="name" type="text" class="form-control bk-form__input" name="name" required value="@isset($role) {{ $role->name }} @endisset" placeholder="Введите наименование роли" autofocus>
			</div>

			<div class="form-group">
				<label for="slug" class="bk-form__label mb-0">Код</label>
				<input id="slug" type="text" class="form-control bk-form__input" name="slug" value="@isset($role) {{ $role->slug }} @endisset" placeholder="Введите обозначение роли" autofocus>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-outline-success">Сохранить</button>
				<a href="{{ route('roles.index') }}" class="btn btn-outline-secondary">Назад</a>
			</div>

		</div>
	</form>
</div>
@endsection