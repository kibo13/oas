@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	@isset($role)
	<h2>Редактирование записи</h2>
	@else
	<h2>Добавление записи</h2>
	@endisset

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

			<button type="submit" class="btn btn-outline-success">Сохранить</button>
		</div>
	</form>
</div>
@endsection