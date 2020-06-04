@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	<h2 class="mb-3">
		@isset($address)
		Редактирование записи
		@else
		Добавление записи
		@endisset
	</h2>

	<form method="POST" @isset($address) action="{{ route('addresses.update', $address) }}" @else action="{{ route('addresses.store') }}" @endisset class="bk-form">
		@csrf

		<div>
			@isset($address)
			@method('PUT')
			@endisset

			<div class="bk-form__wrap pb-2" data-info="Общие сведения">
				<div class="row p-0 m-0">

					<!-- START group address -->
					<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Адрес</h6>
					<div class="bk-form__street col-sm-auto form-group mb-2 pl-0">
						<label for="street" class="bk-form__label mb-0">Улица</label>
						<select name="street_id" id="street" class="form-control bk-form__input">
							<option disabled selected>Выберите улицу</option>
							@foreach($streets as $street)
							<option value="{{ $street->id }}" @isset($address) @if($address->street_id == $street->id)
								selected
								@endif
								@endisset
								>
								{{ ucfirst($street->name) }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="bk-form__home col-sm-auto form-group mb-2 pl-0">
						<label for="num_home" class="bk-form__label mb-0">Дом</label>
						<input id="num_home" type="text" class="form-control bk-form__input" name="num_home" required value="{{ old('num_home', isset($address) ? $address->num_home : null) }}">
					</div>
					<!-- END group address -->

				</div>
			</div>


			<div class="form-group">
				<button type="submit" class="btn btn-outline-success">Сохранить</button>
				<a href="{{ route('addresses.index') }}" class="btn btn-outline-secondary">Назад</a>
			</div>

		</div>
	</form>
</div>
@endsection