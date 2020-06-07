@extends('layouts.master')

@section('content')
<div class="pt-4 py-2">

	<h4 class="mb-2 pb-2 border-bottom">Код работы №{{ $job->id }}</h4>

	<div class="row p-0 m-0">

		<div class="col-md-12 py-0 px-1">
			<p class="font-weight-bold border-bottom mb-0 px-1">
				Предприятие
			</p>

			<p class="px-1 text-muted">
				{{ $job->organization->name }}
			</p>
		</div>

		<div class="col-md-12 py-0 px-1">
			<p class="font-weight-bold border-bottom mb-0 px-1">
				Вид работ
			</p>

			<p class="px-1 text-muted">
				{{ $job->type_job }}
			</p>
		</div>

		<div class="col-md-12 py-0 px-1">
			<p class="font-weight-bold border-bottom mb-0 px-1">
				Тип отключения
			</p>

			<p class="px-1 text-muted">
				{{ $job->type_off }}
			</p>
		</div>

		<div class="col-md-12 py-0 px-1">
			<p class="font-weight-bold border-bottom mb-0 px-1">
				Дата и время начало работы
			</p>

			<p class="px-1 text-muted">
				{{ date('d.m.Y', strtotime($job->date_on)) }}г.
				<span class="bk-text--small align-text-top">{{ date('H:i', strtotime($job->time_on)) }}</span>
			</p>
		</div>

		<div class="col-md-12 py-0 px-1">
			<p class="font-weight-bold border-bottom mb-0 px-1">
				Дата и время завершения работы
			</p>

			<p class="px-1 text-muted">
				{{ date('d.m.Y', strtotime($job->date_off)) }}г.
				<span class="bk-text--small align-text-top">{{ date('H:i', strtotime($job->time_off)) }}</span>
			</p>
		</div>

		<div class="col-md-12 py-0 px-1">
			<p class="font-weight-bold border-bottom mb-0 px-1">
				Место проведения работы
			</p>

			<p class="px-1 text-muted">
				{{ $job->street->name }} {{ $job->num_home }}{{ $job->num_corp }}
			</p>
		</div>

		<div class="col-md-12 py-0 px-1">
			<p class="font-weight-bold border-bottom mb-0 px-1">
				Описание работы
			</p>

			<p class="px-1 text-muted">
				{{ $job->desc }}
			</p>
		</div>

	</div>

	<a href="{{ route('jobs.report', $job) }}" class="btn btn-outline-primary">Отчет</a>
	<a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">Назад</a>


</div>
@endsection