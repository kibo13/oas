@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	<h2 class="mb-3">
		@isset($bid)
		Редактирование записи
		@else
		Добавление записи
		@endisset
	</h2>

	<form method="POST" class="bk-form" @isset($bid) action="{{ route('bids.update', $bid) }}" @else action="{{ route('bids.store') }}" @endisset>

		@csrf

		@isset($bid)
		@method('PUT')
		@endisset

		<div class="bk-form__wrap pb-2" data-info="Общие сведения">
			<div class="row p-0 m-0">

				<!-- START group date and time income -->
				<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Дата и время поступления</h6>
				<div class="bk-form__date col-sm-auto form-group mb-2 pl-0">
					<input name="date_in" type="date" class="form-control bk-form__input" value="{{ old('date_in', isset($bid) ? $bid->date_in : null) }}" required>
				</div>

				<div class="bk-form__time col-sm-auto form-group mb-2 pl-0">
					<input name="time_in" type="time" class="form-control bk-form__input" value="{{ old('time_in', isset($bid) ? $bid->time_in : null) }}" required>
				</div>
				<!-- END group date and time income -->

				<!-- START group plots -->
				<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Участок</h6>
				<div class="col-sm-auto form-group mb-2 pl-0">
					<select name="branch_id" id="bid-plot" class="form-control bk-form__input">
						<option disabled selected>Выберите отдел</option>
						@foreach($branches as $branch)
						<option value="{{ $branch->id }}" @isset($bid) @if($bid->branch_id == $branch->id)
							selected
							@endif
							@endisset
							>
							{{ ucfirst($branch->name) }}
						</option>
						@endforeach
					</select>
				</div>

				<input 
					id="my-num" 
					type="text" 
					name="branch_id" 
					value="{{ old('branch_id', isset($bid) ? $bid->branch_id : $user) }}"
				>

				<h6 class="w-100 mr-3 py-0 my-0 pl-0"></h6>
				<div class="bk-form__street col-sm-auto form-group mb-2 pl-0">

					<label for="bid-street" class="bk-form__label mb-0">Адрес</label>
					<select name="street_id" id="bid-street" class="form-control bk-form__input">
						<option disabled selected>Выберите улицу</option>
						@isset($bid)
						<option value="{{ $bid->street->id }}" selected>
							{{ $bid->street->name	 }}
						</option>
						@endisset
					</select>
				</div>

				<input id="bid-home" type="hidden" name="num_home" value="{{ old('num_home', isset($bid) ? $bid->num_home : null) }}">

				<div class="bk-form__home col-sm-auto form-group mb-2 pl-0">
					<label for="num_flat" class="bk-form__label mb-0">Квартира</label>
					<input id="num_flat" min="1" max="150" type="number" class="form-control bk-form__input" name="num_flat" required value="{{ old('num_flat', isset($bid) ? $bid->num_flat : null) }}">
				</div>
				<!-- END group plots -->

				<!-- START group user -->
				<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Потребитель</h6>
				<div class="col-sm-auto form-group mb-2 pl-0">
					<label for="last_name" class="bk-form__label mb-0">Фамилия</label>
					<input id="last_name" type="text" class="form-control bk-form__input" name="last_name" required placeholder="Введите фамилию" value="{{ old('last_name', isset($bid) ? $bid->last_name : null) }}">
				</div>

				<div class="col-sm-auto form-group mb-2 pl-0">
					<label for="phone" class="bk-form__label mb-0">Телефон</label>
					<input id="phone" type="text" class="form-control bk-form__input" name="phone" placeholder="Введите телефон" value="{{ old('phone', isset($bid) ? $bid->phone : null) }}">
				</div>
				<!-- END group user -->

				<!-- START group type_defect -->
				<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Тип (э/с)</h6>
				<div class="col-sm-auto form-group mb-2 pl-0">

					<select name="type_id" id="bid-type" class="form-control bk-form__input">
						<option disabled selected>Выберите тип</option>
						@foreach($types as $type)
						<option value="{{ $type->id }}" @isset($bid) @if($bid->type_id == $type->id)
							selected
							@endif
							@endisset
							>
							{{ ucfirst($type->name) }}
						</option>
						@endforeach
					</select>
				</div>
				<!-- END group type_defect -->

				<!-- START group description -->
				<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Характер неисправности</h6>
				<div class="col-sm-auto form-group mb-2 pl-0">

					<select name="defect_id" id="defect_id" class="form-control bk-form__input">
						<option disabled selected>Выберите неисправность</option>
						@isset($bid)
						<option value="{{ $bid->defect->id }}" selected>
							{{ $bid->defect->desc	 }}
						</option>
						@endisset
					</select>

				</div>
				<!-- END group description -->

			</div>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-outline-success">Сохранить</button>
			<a href="{{ route('bids.index') }}" class="btn btn-outline-secondary">Назад</a>
		</div>
	</form>
</div>
@endsection