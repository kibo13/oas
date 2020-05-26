@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	<h2 class="mb-3">Добавление записи</h2>

	<form method="POST" class="bk-form" action="{{ route('jobs.store') }}">
		@csrf

		<div>

			<div class=" bk-form__wrap pb-2" data-info="Общие сведения о работе">
				<div class="row p-0 m-0">

					<div class="col-md-4 form-group mb-2 pl-0">
						<label for="organization_id" class="bk-form__label mb-0">Предприятие</label>

						<select name="organization_id" id="organization_id" class="form-control bk-form__input">
							<option disabled selected>Выберите предприятие</option>
							@foreach($organizations as $organization)
							<option value="{{ $organization->id }}">
								{{ ucfirst($organization->name) }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="col-md-4 form-group mb-2 pl-0">
						<label for="type_job" class="bk-form__label mb-0">Вид работ</label>

						<select name="type_job" id="type_job" class="form-control bk-form__input">
							<option disabled selected>Выберите вид работ</option>
							@foreach($type_job as $id)
							<option value="{{ $id['name'] }}">
								{{ $id['name'] }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="col-md-4 form-group mb-2 px-0">
						<label for="type_off" class="bk-form__label mb-0">Тип откл.</label>

						<select name="type_off" id="type_off" class="form-control bk-form__input">
							<option disabled selected>Выберите тип откл.</option>
							@foreach($type_off as $id)
							<option value="{{ $id['name'] }}">
								{{ $id['name'] }}
							</option>
							@endforeach
						</select>
					</div>

				</div>
			</div>

			<div class=" bk-form__wrap pb-2" data-info="Место и сроки проведения работы">
				<div class="row p-0 m-0">

					<div class="col-md-4 form-group mb-2 pl-0">
						<label for="street" class="bk-form__label mb-0">Улица</label>

						<select name="street_id" id="street" class="form-control bk-form__input">
							<option disabled selected>Выберите улицу</option>
							@foreach($streets as $street)
							<option value="{{ $street->id }}">
								{{ ucfirst($street->name) }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="col-md-1 form-group mb-2 pl-0">
						<label for="num_home" class="bk-form__label mb-0">Дом</label>
						<input id="num_home" min="1" max="150" type="number" class="form-control bk-form__input" name="num_home" required value="{{ old('num_home') }}">
					</div>

					<div class="col-md-1 form-group mb-2 pl-0">
						<label for="num_corp" class="bk-form__label mb-0">Корпус</label>
						<input id="num_corp" type="text" class="form-control bk-form__input" name="num_corp" value="{{ old('num_corp') }}">
					</div>

					<div class="col-md-3 form-group mb-2 pl-0 ">
						<label for="date_on" class="bk-form__label mb-0">Начало работы</label>
						<input id="date_on" type="datetime-local" class="form-control bk-form__input" name="date_on" value="{{ old('date_on') }}" required>
					</div>

					<div class="col-md-3 form-group mb-2 px-0 overflow-hidden">
						<label for="date_off" class="bk-form__label mb-0">Окончание работы</label>
						<input id="date_off" type="datetime-local" class="form-control bk-form__input" name="date_off" value="{{ old('date_off') }}" required>
					</div>

				</div>
			</div>

			<div class="bk-form__wrap pb-2" data-info="Описание работы">
				<div class="row p-0 m-0">

					<div class="col-md-12 form-group mb-2 px-0">
						<textarea class="form-control" name="desc" style="height:80px;" placeholder="Введите описание работы">
						</textarea>
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