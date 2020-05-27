@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	<h2 class="mb-3 pb-2 border-bottom">Просмотр записи</h2>

	<div class="bk-blank row">

		<div class="bk-blank__item col-md-12 bgc-light">
			<h4 class="bk-blank__title m-0">Заявка</h4>
			<p class="bk-blank__text m-0">#{{ $job->id }}</p>
		</div>

		<div class="bk-blank__item col-md-12">
			<h4 class="bk-blank__title m-0">Предприятие</h4>
			<p class="bk-blank__text m-0">{{ $job->organization->name }}</p>
		</div>

		<div class="bk-blank__item col-md-12">
			<h4 class="bk-blank__title m-0">Вид работ</h4>
			<p class="bk-blank__text m-0">{{ $job->type_job }}</p>
		</div>

		<div class="bk-blank__item col-md-12">
			<h4 class="bk-blank__title m-0">Тип отключения</h4>
			<p class="bk-blank__text m-0">{{ $job->type_off }}</p>
		</div>

		<div class="bk-blank__item col-md-12">
			<h4 class="bk-blank__title m-0">Начало работы</h4>
			<p class="bk-blank__text m-0">{{ date('d.m.Y', strtotime($job->date_on)) }}</p>
		</div>

		<div class="bk-blank__item col-md-12">
			<h4 class="bk-blank__title m-0">Окончание работы</h4>
			<p class="bk-blank__text m-0">{{ date('d.m.Y', strtotime($job->date_off)) }}</p>
		</div>

		<div class="bk-blank__item col-md-12">
			<h4 class="bk-blank__title m-0">Место проведения работы</h4>
			<p class="bk-blank__text m-0 p-0">{{ $job->street->name }} {{ $job->num_home }} {{ $job->num_corp }}</p>
		</div>

		<div class="bk-blank__item col-md-12">
			<h4 class="bk-blank__title m-0">Описание работы</h4>
			<p class="bk-blank__text m-0">{{ $job->desc }}</p>
		</div>



	</div>



	<a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">Назад</a>

</div>
@endsection