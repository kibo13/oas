@extends('layouts.master')

@section('content')
<div id="job-wrap" class="overflow-hidden pt-4 py-2">

	<h2 class="mb-3">
		@isset($job)
		Редактирование записи
		@else
		Добавление записи
		@endisset
	</h2>

	<form method="POST" class="bk-form" @isset($job) action="{{ route('jobs.update', $job) }}" @else action="{{ route('jobs.store') }}" @endisset>

		@csrf

		<div>
			@isset($job)
			@method('PUT')
			@endisset

			<div class="bk-form__wrap pb-2" data-info="Общие сведения">
				<div class="row p-0 m-0">

					<!-- START group period -->
					<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Дата и время начала работы</h6>
					<div class="bk-form__date col-sm-auto form-group mb-2 pl-0">
						<input id="job-start" name="date_on" type="date" class="form-control bk-form__input" value="{{ old('date_on', isset($job) ? $job->date_on : null) }}" required>
					</div>

					<div class="bk-form__time col-sm-auto form-group mb-2 pl-0">
						<input name="time_on" type="time" class="form-control bk-form__input" value="{{ old('time_on', isset($job) ? $job->time_on : null) }}" required>
					</div>

					<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Дата и время окончания работы</h6>
					<div class="bk-form__date col-sm-auto form-group mb-2 pl-0">
						<input id="job-end" name="date_off" type="date" class="form-control bk-form__input" value="{{ old('date_off', isset($job) ? $job->date_off : null) }}" required>
					</div>

					<div class="bk-form__time col-sm-auto form-group mb-2 pl-0">
						<input name="time_off" type="time" class="form-control bk-form__input" value="{{ old('time_off', isset($job) ? $job->time_off : null) }}" required>
					</div>
					<!-- END group period -->

					<!-- START group organizations -->
					<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Предприятие</h6>
					<div class="bk-form__select col-sm-auto form-group mb-2 pl-0">
						<select name="organization_id" class="form-control bk-form__input">
							<option disabled selected>Выберите предприятие</option>
							@foreach($organizations as $organization)
							<option value="{{ $organization->id }}" @isset($job) @if($job->organization_id == $organization->id)
								selected
								@endif
								@endisset
								>
								{{ ucfirst($organization->name) }}
							</option>
							@endforeach
						</select>

					</div>
					<!-- END group organizations -->

					<!-- START group type_job -->
					<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Вид работ</h6>
					<div class="bk-form__select col-sm-auto form-group mb-2 pl-0">
						<select name="type_job" class="form-control bk-form__input">
							<option disabled selected>Выберите вид работ</option>
							@foreach($type_job as $id)
							<option value="{{ $id['name'] }}" @isset($job) @if($job->type_job == $id['name'])
								selected
								@endif
								@endisset
								>
								{{ $id['name'] }}
							</option>
							@endforeach
						</select>
					</div>
					<!-- END group type_job -->

					<!-- START group type_off -->
					<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Тип отключения</h6>
					<div class="bk-form__select col-sm-auto form-group mb-2 pl-0">
						<select name="type_off" class="form-control bk-form__input">
							<option disabled selected>Выберите тип откл.</option>
							@foreach($type_off as $id)
							<option value="{{ $id['name'] }}" @isset($job) @if($job->type_off == $id['name'])
								selected
								@endif
								@endisset
								>
								{{ $id['name'] }}
							</option>
							@endforeach
						</select>
					</div>
					<!-- END group type_off -->

					<!-- START group description -->
					<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Описание работы</h6>
					<div class="w-100 form-group mb-2 pl-0 mr-3">
						<textarea class="form-control" name="desc" style="height:80px;" placeholder="Введите описание работы">{{ old('desc', isset($job) ? $job->desc : null) }}</textarea>
					</div>
					<!-- END group description -->

					<input 
						id="job-slug" 
						type="hidden" 
						name="slug" 
						value="{{ old('slug', isset($job) ? $job->slug : null) }}">

					<!-- START group addresses -->
					<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Список адресов</h6>
					<div id="home-list" class="d-flex flex-wrap pl-2 mr-3" style="height: 250px; overflow-y: auto;">

						@foreach($addresses as $id => $address)
						<div class="bk-form__address col-sm-auto custom-control custom-checkbox mb-2">
							<input id="{{ $id }}" name="addresses[]" type="checkbox" class="bk-chk custom-control-input" value="{{ $address->id }}" @isset($job) @if($job->addresses->where('id', $address->id)->count())
							checked="checked"
							@endif
							@endisset
							>
							<label class="custom-control-label bk-form__label--checkbox" for="{{ $id }}">
								{{ ucfirst($address->street->name) }} {{ ucfirst($address->num_home) }}
							</label>
						</div>
						@endforeach
					</div>
					<!-- END group addresses -->

				</div>
			</div>

			<div class="form-group">
				<button id="job-save" type="submit" class="btn btn-outline-success">Сохранить</button>
				<a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">Назад</a>
			</div>

		</div>
	</form>
</div>
@endsection