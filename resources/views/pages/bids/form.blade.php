@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	@isset($bid)
	<h2 class="mb-3">Редактирование записи</h2>
	@else
	<h2 class="mb-3">Добавление записи</h2>
	@endisset

	<form method="POST" class="bk-form" @isset($bid) action="{{ route('bids.update', $bid) }}" @else action="{{ route('bids.store') }}" @endisset>

		@csrf

		<div>
			@isset($bid)
			@method('PUT')
			@endisset

			<!-- START group general information -->
			<div class="bk-form__wrap pb-2" data-info="Общие сведения">
				<div class="row p-0 m-0">

					<div class="col-md-12 row m-0 p-0">
						<h6 class="col-md-12 border-bottom py-1 pl-0">Дата и время поступления</h6>

						<div class="col-md-2 form-group mb-2 pl-0">
							<input name="date_on" type="date" class="form-control bk-form__input" value="{{ old('date_on', isset($job) ? $job->date_on : null) }}" required>
						</div>

						<div class="col-md-2 form-group mb-2 pl-0">
							<input name="time_on" type="time" class="form-control bk-form__input" value="{{ old('time_on', isset($job) ? $job->time_on : null) }}" required>
						</div>
					</div>

					<div class="col-md-12 row m-0 p-0">

						<div class="col-md-2 form-group mb-2 pl-0">

							<label for="street" class="bk-form__label mb-0">Улица</label>
							<select name="street_id" id="street" class="form-control bk-form__input">
								<option disabled selected>Выберите улицу</option>
								@foreach($streets as $street)
								<option value="{{ $street->id }}" @isset($worker) @if($worker->street_id == $street->id)
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
							<input id="num_home" min="1" max="150" type="number" class="form-control bk-form__input" name="num_home" required value="{{ old('num_home', isset($worker) ? $worker->num_home : null) }}">
						</div>

						<div class="col-md-1 form-group mb-2 pl-0">
							<label for="num_flat" class="bk-form__label mb-0">Квартира</label>
							<input id="num_flat" min="1" max="150" type="number" class="form-control bk-form__input" name="num_flat" required value="{{ old('num_flat', isset($worker) ? $worker->num_flat : null) }}">
						</div>
					</div>

					<div class="col-md-12 row m-0 p-0">
						<div class="col-md-2 form-group mb-2 pl-0">
							<label for="last_name" class="bk-form__label mb-0">Фамилия</label>
							<input id="last_name" type="text" class="form-control bk-form__input" name="last_name" required placeholder="Введите фамилию сотрудника" value="{{ old('last_name', isset($worker) ? $worker->last_name : null) }}">
						</div>

						<div class="col-md-2 form-group mb-2 pl-0">
							<label for="first_name" class="bk-form__label mb-0">Имя</label>
							<input id="first_name" type="text" class="form-control bk-form__input" name="first_name" required placeholder="Введите имя сотрудника" value="{{ old('first_name', isset($worker) ? $worker->first_name : null) }}">
						</div>
					</div>

				</div>

			</div>
			<!-- END group general information -->

			<!-- START group defect -->
			<div class="bk-form__wrap pb-2" data-info="Вид неисправности">
				<div class="row p-0 m-0">

					<div class="col-md-12 row m-0 p-0">

						<div class="col-md-2 form-group mb-2 pl-0">
							<label for="type" class="bk-form__label mb-0">Тип (э/с)</label>

							<select name="type_id" id="type" class="form-control bk-form__input">
								<option disabled selected>Выберите тип</option>
								@foreach($types as $type)
								<option value="{{ $type->id }}" @isset($promiser) @if($promiser->type_id == $type->id)
									selected
									@endif
									@endisset
									>
									{{ ucfirst($type->name) }}
								</option>
								@endforeach
							</select>
						</div>


						<div class="col-md-2 form-group mb-2 pl-0">
							<label for="branch_id" class="bk-form__label mb-0">Отдел</label>

							<select name="branch_id" id="branch_id" class="form-control bk-form__input">
								<option disabled selected>Выберите отдел</option>
								@foreach($branches as $branch)
								<option value="{{ $branch->id }}" @isset($worker) @if($worker->branch_id == $branch->id)
									selected
									@endif
									@endisset
									>
									{{ ucfirst($branch->name) }}
								</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="col-md-12 row m-0 p-0">
						<div class="col-md-4 form-group mb-2 pl-0">
							<label for="last_name" class="bk-form__label mb-0">Фамилия</label>
							<input id="last_name" type="text" class="form-control bk-form__input" name="last_name" required placeholder="Введите фамилию сотрудника" value="{{ old('last_name', isset($worker) ? $worker->last_name : null) }}">
						</div>

						
					</div>

				</div>

			</div>
			<!-- END group defect -->







			<div class="form-group">
				<button type="submit" class="btn btn-outline-success">Сохранить</button>
				<a href="{{ route('bids.index') }}" class="btn btn-outline-secondary">Назад</a>
			</div>

		</div>
	</form>
</div>
@endsection