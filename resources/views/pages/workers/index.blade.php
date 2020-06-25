@extends('layouts.master')

@section('content')
<div id="worker-index" class="overflow-hidden pt-4 py-2">
	<h2 class="mb-1">Сотрудники</h2>

	@if(Auth::user()->permissions()->pluck('slug')->contains('emp_full'))
	<div class="py-2 mt-1">
		<a href="{{ route('workers.create') }}" class="btn btn-outline-primary">
			Новая запись
		</a>
	</div>
	@endif

	<div class="table-responsive mt-1">
		<table id="worker-table" class="bk-table table table-bordered table-hover">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Ф.И.О.</th>
					<th scope="col">Отдел</th>
					<th scope="col">Должность</th>
					<th scope="col">Адрес</th>
					<th scope="col">Телефоны</th>
					@if(Auth::user()->permissions()->pluck('slug')->contains('emp_full'))
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
						{{ $worker->address->street->name }}
						{{ $worker->address->num_home }}
						-
						{{ $worker->num_flat }}
					</td>
					<td class="phones">
						@if($worker->work_phone != null) Раб: {{ $worker->work_phone }}<br>@endif
						@if($worker->home_phone != null) Дом: {{ $worker->home_phone }}<br>@endif
						@if($worker->mob_phone != null) Моб: {{ $worker->mob_phone }} @endif
					</td>
					@if(Auth::user()->permissions()->pluck('slug')->contains('emp_full'))
					<td>
						<div class="d-flex">
							<div class="bk-btn bk-btn-crud btn btn-warning mr-1" data-tip="Редактировать">
								<a href="{{ route('workers.edit', $worker) }}" class="bk-btn-wrap bk-btn-link"></a>
								<span class="bk-btn-wrap bk-btn-icon">
									@include('includes.icons.pen')
								</span>
							</div>

							<div class="bk-btn bk-btn-crud btn btn-danger" data-tip="Удалить">
								<a href="javascript:void(0)" class="bk-btn-wrap bk-btn-link bk-btn-del" data-id="{{ $worker->id }}" data-table-name="worker" data-toggle="modal" data-target="#bk-delete-modal">
								</a>
								<span class="bk-btn-wrap bk-btn-icon">
									@include('includes.icons.trash')
								</span>
							</div>

						</div>
					</td>
					@endif
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>
@endsection