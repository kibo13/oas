@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
	<h2 class="mb-0">Сотрудники</h2>


	<div class="py-2 mb-1">
		<a href="" class="btn btn-outline-primary">
			Новый сотрудник
		</a>
		<a href="{{ route('branches.index') }}" class="btn btn-outline-secondary">
			Отделы
		</a>
		<a href="{{ route('positions.index') }}" class="btn btn-outline-secondary">
			Должности
		</a>
		<a href="{{ route('streets.index') }}" class="btn btn-outline-secondary">
			Улицы
		</a>
	</div>

	<div class="table-responsive">
		<table class="bk-table table table-bordered">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Фамилия И.О.</th>
					<th scope="col">Отдел</th>
					<th scope="col">Должность</th>
					<th scope="col">Адрес</th>
					<th scope="col">Телефоны</th>
					<th scope="col">Действие</th>
				</tr>
			</thead>
			<tbody>


			</tbody>
		</table>
	</div>

</div>
@endsection