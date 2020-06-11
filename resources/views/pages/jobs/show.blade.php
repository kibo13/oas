@extends('layouts.master')

@section('content')
<div class="pt-4 py-2">

	<div class="table-responsive">
		<table class="bk-table table table-bordered">
			<thead class="thead-light">
				<tr>
					<th rowspan="2" class="align-top" style="width:5%">#</th>
					<th colspan="2" class="align-top">
						Подробное описание<br>
						<small class="text-muted align-top">по работе №{{ $job->id }}</small>
					</th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<th>1</th>
					<th style="width:15%">Предприятие</th>
					<td>{{ $job->organization->name }}</td>
				</tr>

				<tr>
					<th>2</th>
					<th style="width:15%">Вид работ</th>
					<td>{{ $job->type_job }}</td>
				</tr>

				<tr>
					<th>3</th>
					<th style="width:15%">Тип откл.</th>
					<td>{{ $job->type_off }}</td>
				</tr>

				<tr>
					<th>4</th>
					<th style="width:15%">Описание работы</th>
					<td>{{ $job->desc }}</td>
				</tr>

				<tr>
					<th>5</th>
					<th style="width:15%">Начало работ</th>
					<td>{{ getDMY($job->date_on) }}г. <small class="text-muted align-text-top">{{ getHI($job->time_on) }}</small></td>
				</tr>

				<tr>
					<th>6</th>
					<th style="width:15%">Завершен.работ</th>
					<td>{{ getDMY($job->date_off) }}г. <small class="text-muted align-text-top">{{ getHI($job->time_off) }}</small></td>
				</tr>

				<tr>
					<th>7</th>
					<th style="width:15%">Адреса</th>
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
				</tr>

			</tbody>
		</table>
	</div>

	<a href="{{ route('jobs.report', $job) }}" class="btn btn-outline-primary">Отчет</a>
	<a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">Назад</a>


</div>
@endsection