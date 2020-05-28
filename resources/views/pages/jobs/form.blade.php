@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	@isset($job)
	<h2 class="mb-3">Редактирование записи</h2>
	@else
	<h2 class="mb-3">Добавление записи</h2>
	@endisset

	<form method="POST" class="bk-form" @isset($job) action="{{ route('jobs.update', $job) }}" @else action="{{ route('jobs.store') }}" @endisset>

		@csrf

		<div>
			@isset($job)
			@method('PUT')
			@endisset

			<div class=" bk-form__wrap pb-2" data-info="Общие сведения о работе">
				<div class="row p-0 m-0">

					<h6 class="col-md-12 border-bottom py-1 pl-0">Предприятие</h6>
					<div class="col-md-4 form-group mb-2 pl-0">
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

					<h6 class="col-md-12 border-bottom py-1 pl-0">Вид работ</h6>
					<div class="col-md-4 form-group mb-2 pl-0">
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

					<h6 class="col-md-12 border-bottom py-1 pl-0">Тип откл.</h6>
					<div class="col-md-4 form-group mb-2 pl-0">
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

				</div>
			</div>

			<div class=" bk-form__wrap pb-2" data-info="Сроки проведения работы">
				<div class="row p-0 m-0">

					<h6 class="col-md-12 border-bottom py-1 pl-0">Дата и время начала работы</h6>

					<div class="col-md-2 form-group mb-2 pl-0">
						<input name="date_on" type="date" class="form-control bk-form__input" value="{{ old('date_on', isset($job) ? $job->date_on : null) }}" required>
					</div>

					<div class="col-md-2 form-group mb-2 pl-0">
						<input name="time_on" type="time" class="form-control bk-form__input" value="{{ old('time_on', isset($job) ? $job->time_on : null) }}" required>
					</div>

					<h6 class="col-md-12 border-bottom py-1 pl-0">Дата и время заверш.работы</h6>

					<div class="col-md-2 form-group mb-2 pl-0">
						<input name="date_off" type="date" class="form-control bk-form__input" value="{{ old('date_off', isset($job) ? $job->date_off : null) }}" required>
					</div>

					<div class="col-md-2 form-group mb-2 pl-0">
						<input name="time_off" type="time" class="form-control bk-form__input" value="{{ old('time_off', isset($job) ? $job->time_off : null) }}" required>
					</div>

				</div>
			</div>

			<div class=" bk-form__wrap pb-2" data-info="Место проведения работы">
				<div class="row p-0 m-0">

					<div class="col-md-2 form-group mb-2 pl-0">
						<label for="street" class="bk-form__label mb-0">Улица</label>

						<select name="street_id" id="street" class="form-control bk-form__input">
							<option disabled selected>Выберите улицу</option>
							@foreach($streets as $street)
							<option value="{{ $street->id }}" @isset($job) @if($job->street_id == $street->id)
								selected
								@endif
								@endisset
								>
								{{ ucfirst($street->name) }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="col-md-1 form-group mb-2 pl-0">
						<label for="num_home" class="bk-form__label mb-0">Дом</label>
						<input id="num_home" min="1" max="150" type="number" class="form-control bk-form__input" name="num_home" required value="{{ old('num_home', isset($job) ? $job->num_home : null) }}">
					</div>

					<div class="col-md-1 form-group mb-2 pl-0">
						<label for="num_corp" class="bk-form__label mb-0">Корпус</label>
						<input id="num_corp" type="text" class="form-control bk-form__input" name="num_corp" value="{{ old('num_corp', isset($job) ? $job->num_corp : null) }}">
					</div>

				</div>
			</div>

			<div class=" bk-form__wrap pb-2" data-info="Описание работы">
				<div class="row p-0 m-0">

					<div class="col-md-4 form-group mb-2 pl-0">
						<textarea class="form-control" name="desc" style="height:80px;" placeholder="Введите описание работы">{{ old('desc', isset($job) ? $job->desc : null) }}</textarea>
					</div>

				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-outline-success">Сохранить</button>
				<a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">Назад</a>
			</div>

		</div>
	</form>
</div>
@endsection