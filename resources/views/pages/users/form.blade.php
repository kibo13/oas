@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	<h2 class="mb-3">
		@isset($user)
			Редактирование записи
		@else 
			Добавление записи
		@endisset
	</h2>

	<form 
		method="POST" 
		class="bk-form" 
		@isset($user) 
				action="{{ route('users.update', $user) }}" 
			@else 
				action="{{ route('users.store') }}" 
		@endisset
	>
		@csrf

		<div>
			@isset($user)
				@method('PUT')
			@endisset

			<!-- START group users -->
			<div class="bk-form__wrap" data-info="Пользователь">

				<div class="form-group mb-2">
					<label for="name" class="bk-form__label mb-0">Логин</label>
					<input 
						id="name" 
						name="name" 
						type="text" 
						class="form-control bk-form__input @error('name') is-invalid @enderror" 
						placeholder="Введите логин" 
						autocomplete="off" 
						value="{{ old('name', isset($user) ? $user->name : null) }}"
					>
					
					@error('name')
					<span class="invalid-feedback bk-alert-danger" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="form-group mb-2">
					<label for="email" class="bk-form__label mb-0">E-mail</label>
					<input id="email" type="text" class="form-control bk-form__input @error('email') is-invalid @enderror" name="email" placeholder="Введите E-mail" autocomplete="off" value="{{ old('email', isset($user) ? $user->email : null) }}">
					@error('email')
					<span class="invalid-feedback bk-alert-danger" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="form-group mb-2">
					<label for="password" class="bk-form__label mb-0">Пароль</label>
					<input id="password" type="password" class="form-control bk-form__input @error('password') is-invalid @enderror" name="password" autocomplete="off">
					@error('password')
					<span class="invalid-feedback bk-alert-danger" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="form-group mb-0">
					<label for="password" class="bk-form__label mb-0">Подтверждение</label>
					<input id="password" type="password" class="form-control bk-form__input" name="password_confirmation" autocomplete="off">
				</div>
			</div>
			<!-- END group users -->

			<!-- START group roles -->
			<div class="bk-form__wrap" data-info="Роли">

				@foreach($roles as $key => $role)
				<div class="custom-control custom-checkbox mb-2">
					<input 
						id="{{ $key }}"
						name="roles[]"
						type="checkbox" 
						class="custom-control-input" 
						value="{{ $role->id }}"
						@isset($user)
							@if($user->roles->where('id', $role->id)->count())
								checked="checked"
							@endif			
						@endisset		
					>
					<label class="custom-control-label bk-form__label--checkbox" for="{{ $key }}">
						{{ ucfirst($role->name) }}
					</label>
				</div>
				@endforeach

			</div>
			<!-- END group roles -->

			<div class="form-group">
				<button type="submit" class="btn btn-outline-success">Сохранить</button>
				<a href="{{ route('users.index') }}" class="btn btn-outline-secondary">Назад</a>
			</div>

		</div>
	</form>

</div>
@endsection