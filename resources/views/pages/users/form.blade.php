@extends('layouts.master')

@section('content')
<div id="user-wrap" class="overflow-hidden pt-4 py-2">

	<h2 class="mb-3">
		@isset($user)
		Редактирование записи
		@else
		Добавление записи
		@endisset
	</h2>

	<form method="POST" class="bk-form" @isset($user) action="{{ route('users.update', $user) }}" @else action="{{ route('users.store') }}" @endisset>
		@csrf

		<div>
			@isset($user)
			@method('PUT')
			@endisset

			<!-- START group users -->
			<div class="bk-form__wrap mb-2" data-info="Общие сведения">
				<div class="row p-0 m-0">

					<h6 class="w-100 border-bottom py-1 pl-1 bk-text--info font-weight-bold">Логин</h6>
					<div class="bk-form__select col-sm-auto form-group mb-2 px-0">
						<input name="name" type="text" class="form-control bk-form__input @error('name') is-invalid @enderror" placeholder="Введите логин" autocomplete="off" value="{{ old('name', isset($user) ? $user->name : null) }}">

						@error('name')
						<span class="invalid-feedback bk-alert-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<h6 class="w-100 border-bottom py-1 pl-1 bk-text--info font-weight-bold">E-mail</h6>
					<div class="bk-form__select col-sm-auto form-group mb-2 px-0">
						<input id="email" type="text" class="form-control bk-form__input @error('email') is-invalid @enderror" name="email" placeholder="Введите E-mail" autocomplete="off" value="{{ old('email', isset($user) ? $user->email : null) }}">
						@error('email')
						<span class="invalid-feedback bk-alert-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<h6 class="w-100 border-bottom py-1 pl-1 bk-text--info font-weight-bold">
						Пароль
						<small class="text-muted align-top">мин.длина пароля 6 символов</small>
					</h6>
					<div class="bk-form__select col-sm-auto form-group mb-2 px-0">

						<input id="password" type="password" class="form-control bk-form__input @error('password') is-invalid @enderror" name="password" autocomplete="off" placeholder="Пароль">
						@error('password')
						<span class="invalid-feedback bk-alert-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<h6 class="w-100 m-0 pl-0"></h6>
					<div class="bk-form__select col-sm-auto form-group mb-2 px-0">
						<input id="confirm-password" type="password" class="form-control bk-form__input @error('password') is-invalid @enderror " name="password_confirmation" autocomplete="off" placeholder="Подтверждение">
						@error('password')
						<span class="invalid-feedback bk-alert-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<h6 class="w-100 border-bottom py-1 pl-1 bk-text--info font-weight-bold">Роли</h6>
					<div class="bk-form__select col-sm-auto form-group mb-2 px-0">
						<select id="role-select" class="form-control bk-form__input @error('role_id') is-invalid @enderror">
							<option disabled selected>Выберите роль</option>
							@foreach($roles as $role)
							<option 
								value="{{ $role->id }}" 
								data-slug="{{ $role->slug }}"
								@isset($user) 
									@if($user->role_id == $role->id)
										selected
									@endif
								@endisset
							>
								{{ $role->name }}
							</option>
							@endforeach
						</select>

						@error('role_id')
						<span class="invalid-feedback bk-alert-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror

					</div>

					<input id="user-slug" type="hidden" name="role_id" value="{{ old('role_id', isset($user) ? $user->role_id : null) }}">

					<h6 class="w-100 border-bottom mb-1 py-1 pl-1 bk-text--info font-weight-bold">Доступ</h6>
					<div class="table-responsive" style="user-select: none;">
						<table class="bk-table table table-bordered table-hover">

							<thead class="thead-light">
								<tr>
									<th style="width:5%">#</th>
									<th>Разделы</th>
									<th style="width:30%" class="text-center">Просмотр</th>
									<th style="width:30%" class="text-center">Редактирование</th>
								</tr>
							</thead>
							<tbody>
								@foreach($sections as $id => $section)
								<tr>
									<td>{{ $id+=1 }}</td>
									<td>{{ $section }}</td>
									@if($permissions->where('name', $section)->count() == 2)
									@foreach($permissions as $perm)
									@if($perm->name == $section)
									<td class="text-center">

										<input name="permissions[]" type="checkbox" class="bk-checkbox {{$perm->slug}}" value="{{ $perm->id }}" @isset($user) @if($user->permissions->where('id', $perm->id)->count())
										checked="checked"
										@endif
										@endisset
										>

									</td>
									@endif
									@endforeach
									@else
									@foreach($permissions as $perm)
									@if($perm->name == $section)
									<td class="text-center">
										<input name="permissions[]" type="checkbox" class="bk-checkbox {{$perm->slug}}" value="{{ $perm->id }}" @isset($user) @if($user->permissions->where('id', $perm->id)->count())
										checked="checked"
										@endif
										@endisset
										>
									</td>
									<td class="text-center font-weight-bold">-</td>
									@endif
									@endforeach
									@endif
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- END group users -->

			<div class="form-group">
				<button id="user-save" type="submit" class="btn btn-outline-success">Сохранить</button>
				<a href="{{ route('users.index') }}" class="btn btn-outline-secondary">Назад</a>
			</div>

		</div>
	</form>

</div>
@endsection