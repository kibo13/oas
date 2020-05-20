@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
	<h2 class="mb-0">Пользователи</h2>

	<div class="py-2 mb-1">
		<a href="{{ route('users.create') }}" class="btn btn-outline-primary">
			Новый пользователь
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

			</tbody>
		</table>
	</div>

</div>
@endsection