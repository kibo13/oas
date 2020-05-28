@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	@isset($promiser)
			<h2 class="mb-3">Редактирование записи</h2>
		@else
			<h2 class="mb-3">Добавление записи</h2>
	@endisset

	<form 
		method="POST" 
		class="bk-form"

		@isset($promiser) 
				action="{{ route('promisers.update', $promiser) }}" 
			@else 
				action="{{ route('promisers.store') }}" 
		@endisset		
	>

		@csrf

		<div>
			@isset($promiser)
				@method('PUT')
			@endisset
			
			<!-- START type_statement -->
			<div class=" bk-form__wrap pb-2" data-info="Тип заявки">
				<div class="row p-0 m-0">

					<div class="col-md-2 form-group mb-2 pl-0">
						<label for="type" class="bk-form__label mb-0">Тип (э/с)</label>

						<select name="type_id" id="type" class="form-control bk-form__input">
							<option disabled selected>Выберите тип</option>
							@foreach($types as $type)
							<option 
								value="{{ $type->id }}" 
								@isset($promiser)
									@if($promiser->type_id == $type->id)
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
						<label for="date_on" class="bk-form__label mb-0">Дата подключения </label>
						<input id="date_on" type="date" class="form-control bk-form__input" name="date_on" value="{{ old('date_on', isset($promiser) ? $promiser->date_on : null) }}" required>
					</div>

					<div class="col-md-2 form-group mb-2 pl-0">
						<label for="date_off" class="bk-form__label mb-0">Дата отключения</label>
						<input id="date_off" type="date" class="form-control bk-form__input" name="date_off" value="{{ old('date_off', isset($promiser) ? $promiser->date_off : null) }}" required>
					</div>

				</div>
			</div>
			<!-- END type_statement -->

			<!-- START Address -->
			<div class=" bk-form__wrap pb-2" data-info="Адрес">

				<div class="row p-0 m-0">

					<div class="col-md-3 form-group mb-2 pl-0">
						<label for="street" class="bk-form__label mb-0">Улица</label>

						<select name="street_id" id="street" class="form-control bk-form__input">
							<option disabled selected>Выберите улицу</option>
							@foreach($streets as $street)
							<option 
								value="{{ $street->id }}" 
								@isset($promiser)
									@if($promiser->street_id == $street->id)
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
						<input id="num_home" min="1" max="150" type="number" class="form-control bk-form__input" name="num_home" required value="{{ old('num_home', isset($promiser) ? $promiser->num_home : null) }}">
					</div>

					<div class="col-md-1 form-group mb-2 pl-0">
						<label for="num_corp" class="bk-form__label mb-0">Корпус</label>
						<input id="num_corp" type="text" class="form-control bk-form__input" name="num_corp" value="{{ old('num_corp', isset($promiser) ? $promiser->num_corp : null) }}">
					</div>

					<div class="col-md-1 form-group mb-2 pl-0">
						<label for="num_flat" class="bk-form__label mb-0">Квартира</label>
						<input id="num_flat" min="1" max="150" type="number" class="form-control bk-form__input" name="num_flat" required value="{{ old('num_flat', isset($promiser) ? $promiser->num_flat : null) }}">
					</div>
				</div>

			</div>
			<!-- END Address -->

			<div class="form-group">
				<button type="submit" class="btn btn-outline-success">Сохранить</button>
				<a href="{{ route('promisers.index') }}" class="btn btn-outline-secondary">Назад</a>
			</div>

		</div>
	</form>
</div>
@endsection