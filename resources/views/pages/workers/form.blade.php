@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	<h2 class="mb-3">
		@isset($worker)
		Редактирование записи
		@else
		Добавление записи
		@endisset
	</h2>

	<form method="POST" class="bk-form" @isset($worker) action="{{ route('workers.update', $worker) }}" @else action="{{ route('workers.store') }}" @endisset>
		@csrf
		<div>
			@isset($worker)
			@method('PUT')
			@endisset

			<div class="bk-form__wrap pb-2" data-info="Общие сведения">
				<div class="row p-0 m-0">

					<!-- START group personal -->
					<div class="bk-form__plot col-md-auto form-group mb-2 pl-0">
						<label for="last_name" class="bk-form__label mb-0">Фамилия</label>
						<input id="last_name" type="text" class="form-control bk-form__input" name="last_name" required placeholder="Введите фамилию" value="{{ old('last_name', isset($worker) ? $worker->last_name : null) }}">

					</div>

					<div class="bk-form__plot col-md-auto form-group mb-2 pl-0">
						<label for="first_name" class="bk-form__label mb-0">Имя</label>
						<input id="first_name" type="text" class="form-control bk-form__input" name="first_name" required placeholder="Введите имя" value="{{ old('first_name', isset($worker) ? $worker->first_name : null) }}">

					</div>

					<div class="bk-form__plot col-md-auto form-group mb-2 pl-0">
						<label for="mid_name" class="bk-form__label mb-0">Отчество</label>
						<input id="mid_name" type="text" class="form-control bk-form__input" name="mid_name" placeholder="Введите отчество" value="{{ old('mid_name', isset($worker) ? $worker->mid_name : null) }}">

					</div>
					<!-- END group personal -->

					<!-- START group branch and position -->
					<h6 class="w-100 m-0 p-0"></h6>
					<div class="bk-form__plot col-sm-auto form-group mb-2 pl-0">
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

					<div class="bk-form__plot col-sm-auto form-group mb-2 pl-0">
						<label for="position_id" class="bk-form__label mb-0">Должность</label>

						<select name="position_id" id="position_id" class="form-control bk-form__input">
							<option disabled selected>Выберите должность</option>
							@foreach($positions as $position)
							<option value="{{ $position->id }}" @isset($worker) @if($worker->position_id == $position->id)
								selected
								@endif
								@endisset
								>
								{{ ucfirst($position->name) }}
							</option>
							@endforeach
						</select>
					</div>
					<!-- END group branch and position -->

					<!-- START group address -->
					<h6 class="w-100 m-0 p-0"></h6>
					<div class="bk-form__street col-sm-auto form-group mb-2 pl-0">

						<label for="address" class="bk-form__label mb-0">Адрес</label>
						<select name="address_id" id="address" class="form-control bk-form__input">
							<option disabled selected>Выберите адрес</option>
							@foreach($addresses as $address)
							<option value="{{ $address->id }}" @isset($worker) @if($worker->address_id == $address->id)
								selected
								@endif
								@endisset
								>
								{{ $address->street->name }}
								д.{{ $address->num_home }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="bk-form__home col-sm-auto form-group mb-2 pl-0">
						<label for="num_flat" class="bk-form__label mb-0">Квартира</label>
						<input id="num_flat" min="1" max="150" type="number" class="form-control bk-form__input" name="num_flat" required value="{{ old('num_flat', isset($worker) ? $worker->num_flat : null) }}">
					</div>
					<!-- END group address -->

					<!-- START group phones -->
					<h6 class="w-100 m-0 p-0"></h6>

					<div class="bk-form__plot col-md-auto form-group mb-2 pl-0">
						<label for="work_phone" class="bk-form__label mb-0">Тел.раб.</label>
						<input id="work_phone" type="text" class="form-control bk-form__input" name="work_phone" required placeholder="5-55-55" value="{{ old('work_phone', isset($worker) ? $worker->work_phone : null) }}">
					</div>

					<div class="bk-form__plot col-md-auto form-group mb-2 pl-0">
						<label for="home_phone" class="bk-form__label mb-0">Тел.дом.</label>
						<input id="home_phone" type="text" class="form-control bk-form__input" name="home_phone" placeholder="5-55-55" value="{{ old('home_phone', isset($worker) ? $worker->home_phone : null) }}">
					</div>

					<div class="bk-form__plot col-md-auto form-group mb-2 pl-0">
						<label for="mob_phone" class="bk-form__label mb-0">Тел.моб.</label>
						<input id="mob_phone" type="text" class="form-control bk-form__input" name="mob_phone" placeholder="+7-776-123-45-67" value="{{ old('mob_phone', isset($worker) ? $worker->mob_phone : null) }}">
					</div>
					<!-- END group phones -->
				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-outline-success">Сохранить</button>
				<a href="{{ route('workers.index') }}" class="btn btn-outline-secondary">Назад</a>
			</div>

		</div>
	</form>
</div>
@endsection