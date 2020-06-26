@extends('layouts.master')

@section('content')
<div id="job-index" class="bk-page overflow-hidden pt-4 py-2">
	<h2 class="mb-1">Учет работ</h2>

	@if(Auth::user()->permissions()->pluck('slug')->contains('job_full'))
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
		<table id="job-table" class="bk-table table table-bordered table-hover">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Вид работ</th>
					<th scope="col">Тип откл.</th>
					<th scope="col">Начало работ</th>
					<th scope="col">Заверш.работ</th>
					<th scope="col">Адрес</th>
					<th scope="col" class="no-sort">Действие</th>
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

							@if(Auth::user()->permissions()->pluck('slug')->contains('job_full'))
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
							@endif

						</div>
					</td>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>

</div>
@endsection