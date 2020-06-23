@extends('layouts.master')

@section('content')
<div id="promiser-wrap" class="overflow-hidden pt-4 py-2">

	<h2 class="mb-3">
		@isset($promiser)
		Редактирование записи
		@else
		Добавление записи
		@endisset
	</h2>

	<form method="POST" class="bk-form" @isset($promiser) action="{{ route('promisers.update', $promiser) }}" @else action="{{ route('promisers.store') }}" @endisset>

		@csrf

		<div>
			@isset($promiser)
			@method('PUT')
			@endisset

			<div class="bk-form__wrap pb-2" data-info="Общие сведения">
				<div class="row p-0 m-0">

					<div class="bk-form__plot col-sm-auto form-group mb-2 pl-0">
						<label for="promiser-off" class="bk-form__label mb-0">Дата отключения</label>
						<input id="promiser-off" type="date" class="form-control bk-form__input" name="date_off" value="{{ old('date_off', isset($promiser) ? $promiser->date_off : null) }}" required>
					</div>

					<div class="bk-form__plot col-sm-auto form-group mb-2 pl-0">
						<label for="promiser-on" class="bk-form__label mb-0">Дата подключения</label>
						<input id="promiser-on" type="date" class="form-control bk-form__input" name="date_on" value="{{ old('date_on', isset($promiser) ? $promiser->date_on : '') }}">
					</div>

					<h6 class="w-100 m-0 p-0"></h6>
					<div class="bk-form__street col-sm-auto form-group mb-2 pl-0">

						<label for="address" class="bk-form__label mb-0">Адрес</label>
						<select name="address_id" id="address" class="form-control bk-form__input">
							<option disabled selected>Выберите адрес</option>
							@foreach($addresses as $address)
							<option value="{{ $address->id }}" @isset($promiser) @if($promiser->address_id == $address->id)
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
						<input id="num_flat" min="1" max="150" type="number" class="form-control bk-form__input" name="num_flat" required value="{{ old('num_flat', isset($promiser) ? $promiser->num_flat : null) }}">
					</div>

				</div>
			</div>

			<div class="form-group">
				<button id="promiser-save" type="submit" class="btn btn-outline-success">Сохранить</button>
				<a href="{{ route('promisers.index') }}" class="btn btn-outline-secondary">Назад</a>
			</div>

		</div>
	</form>


</div>
@endsection