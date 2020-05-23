@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
	<h2 class="mb-1">Сотрудники</h2>

	@if(Auth::user()->roles()->pluck('slug')->contains('hh'))
	<div class="py-2 mt-1">
		<a href="{{ route('workers.create') }}" class="btn btn-outline-primary">
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
	@endif

	<div class="table-responsive mt-1">
		<table class="bk-table table table-bordered">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Ф.И.О.</th>
					<th scope="col">Отдел</th>
					<th scope="col">Должность</th>
					<th scope="col">Адрес</th>
					<th scope="col">Телефоны</th>
					@if(Auth::user()->roles()->pluck('slug')->contains('hh'))
					<th scope="col">Действие</th>
					@endif
				</tr>
			</thead>
			<tbody>

				@foreach($workers as $id => $worker)
				<tr>
					<td>{{ $id+=1 }}</td>
					<td class="fio">
						{{ $worker->last_name }}<br>
						{{ $worker->first_name }}<br>
						{{ $worker->mid_name }}
					</td>
					<td>{{ $worker->branch->name }}</td>
					<td>{{ $worker->position->name }}</td>
					<td class="address">
						{{ $worker->street->name }}
						{{ $worker->num_home }}
						{{ $worker->num_corp }}
						-
						{{ $worker->num_flat }}
					</td>
					<td class="phones">
						Раб: {{ $worker->work_phone }}<br>
						Дом: {{ $worker->home_phone }}<br>
						Сот: {{ $worker->mob_phone }}
					</td>
					@if(Auth::user()->roles()->pluck('slug')->contains('hh'))
					<td>
						<div>
							<form action="{{ route('workers.destroy', $worker) }}" method="POST">
								<div class="d-flex">

									<div class="bk-crud__wrap mr-1">
										<a href="{{ route('workers.edit', $worker) }}" class="bk-crud__btn btn btn-warning mr-1">
											Р
										</a>
										<span class="bk-crud__tip">Редактировать</span>
									</div>

									<div class="bk-crud__wrap">
										@csrf
										@method('DELETE')
										<input class="bk-crud__btn btn btn-danger" type="submit" value="У">
										<span class="bk-crud__tip">Удалить</span>
									</div>
								</div>
							</form>
						</div>
					</td>
					@endif
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
	{{ $workers->links() }}
</div>
@endsection