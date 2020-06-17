@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
	<h2 class="mb-1">Учет работ</h2>

	@if(Auth::user()->roles()->pluck('slug')->contains('oas'))
	<div class="py-2 mt-1">
		<a href="{{ route('jobs.create') }}" class="btn btn-outline-primary">
			Новая запись
		</a>
	</div>
	@endif

	@if($count != 0)
	<div class="mt-1 mb-2 bk-callout bk-callout-info">
		<h6 class="m-0 p-0">
			Количество запланированных работ<br>на
			<span class="bk-text--info text-info font-weight-bold">{{ getDMY($today) }}г.</span>
			составляет:
			<span class="bk-text--info text-info font-weight-bold">{{ $count }}</span>
		</h6>
	</div>
	@endif

	<div class="table-responsive mt-1">
		<table class="bk-table table table-bordered table-hover">
			<thead class="thead-light">
				<tr>
					<th rowspan="2" class="align-top">#</th>
					<th rowspan="2" class="align-top">Вид работ</th>
					<th rowspan="2" class="align-top">Тип откл.</th>
					<th colspan="2" class="text-center">Период проведения работ</th>
					<th rowspan="2" class="align-top">Адреса</th>
					<th rowspan="2" class="align-top print-hide">Действие</th>
				</tr>
				<tr>
					<th scope="col" class="text-center">Начало</th>
					<th scope="col" class="text-center">Заверш.</th>
				</tr>
			</thead>
			<tbody>

				@foreach($jobs as $id => $job)
				<tr @if($job->date_on == $today) class="table-info" @endif>
					<td>{{ $id+=1 }}</td>
					<td>{{ $job->type_job }}</td>
					<td>{{ $job->type_off }}</td>
					<td>{{ getDMY($job->date_on) }}г. <small class="text-muted align-text-top">{{ getHI($job->time_on) }}</small></td>
					<td>{{ getDMY($job->date_off) }}г. <small class="text-muted align-text-top">{{ getHI($job->time_off) }}</small></td>
					<td>

						@foreach($streets as $street)
						@if($job->addresses->where('street_id', $street->id)->count())
						{{ $street->name }}
						@endif

						@foreach($job->addresses as $address)
						<small class="bk-text--small text-muted align-top">
							@if($street->id == $address->street_id)
							д.{{ $address->num_home }},
							@endif
						</small>
						@endforeach

						@if($job->addresses->where('street_id', $street->id)->count())
						<br>
						@endif

						@endforeach

					</td>
					<td>
						<div class="d-flex">
							<div class="bk-btn bk-btn-crud btn btn-info mr-1" data-tip="Состояние">
								<a href="{{ route('jobs.show', $job) }}" class="bk-btn-wrap bk-btn-link"></a>
								<span class="bk-btn-wrap bk-btn-icon">
									@include('includes.icons.eye')
								</span>
							</div>

							<div class="bk-btn bk-btn-crud btn btn-warning mr-1" data-tip="Редактировать">
								<a href="{{ route('jobs.edit', $job) }}" class="bk-btn-wrap bk-btn-link"></a>
								<span class="bk-btn-wrap bk-btn-icon">
									@include('includes.icons.pen')
								</span>
							</div>

							<div class="bk-btn bk-btn-crud btn btn-danger" data-tip="Удалить">
								<a href="javascript:void(0)" class="bk-btn-wrap bk-btn-link bk-btn-del" data-id="{{ $job->id }}" data-table-name="job" data-toggle="modal" data-target="#bk-delete-modal">
								</a>
								<span class="bk-btn-wrap bk-btn-icon">
									@include('includes.icons.trash')
								</span>
							</div>

						</div>
					</td>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>

	{{ $jobs->links() }}
</div>
@endsection