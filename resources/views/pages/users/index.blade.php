@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
	<h2 class="mb-0">Пользователи</h2>

	<div class="py-2 mb-1">
		<a href="{{ route('users.create') }}" class="btn btn-outline-primary">
			Новая запись
		</a>
		<a href="{{ route('roles.index') }}" class="btn btn-outline-secondary">
			Роли
		</a>
	</div>

	<div class="table-responsive">
		<table class="bk-table table table-bordered">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Логин</th>
					<th scope="col">Роль</th>
					<th scope="col">Действие</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $key => $user)
				<tr>
					<td>{{ $key+=1 }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->roles()->pluck('name')->implode(', ') }}</td>
					<td>
						<div class="d-flex">

							<div class="bk-crud__wrap">
								<a href="{{ route('users.edit', $user) }}" class="bk-crud__btn btn btn-warning mr-1">
									Р
								</a>
								<span class="bk-crud__tip">Редактировать</span>
							</div>

							<div class="bk-crud__wrap">
								<form action="{{ route('users.destroy', $user) }}" method="POST">
									@csrf
									@method('DELETE')
									<input class="bk-crud__btn btn btn-danger" type="submit" value="У">
									<span class="bk-crud__tip">Удалить</span>
								</form>
							</div>
							
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</div>
@endsection