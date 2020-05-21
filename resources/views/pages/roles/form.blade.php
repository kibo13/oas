@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	@isset($role)
	<h2>Редактирование записи</h2>
	@else
	<h2>Новая запись</h2>
	@endisset

	<form 
		method="POST" 
		@isset($role) action="{{ route('roles.update', $role) }}" @else action="{{ route('roles.store') }}" @endisset 
		class="bk-form">
		@csrf

		<div>
			@isset($role)
			@method('PUT')
			@endisset

			<div class="form-group">
				<label for="name" class="bk-form__label mb-0">Роль</label>
				<input id="name" type="text" class="form-control bk-form__text" name="name" required value="@isset($role) {{ $role->name }} @endisset" placeholder="Введите наименование роли" autofocus>
			</div>

			<button type="submit" class="btn btn-outline-success">Сохранить</button>
		</div>
	</form>
</div>
@endsection