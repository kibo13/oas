@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	<h2 class="mb-3">
		@isset($plot)
		Редактирование записи
		@else
		Добавление записи
		@endisset
	</h2>

	<form method="POST" class="bk-form" @isset($plot) action="{{ route('plots.update', $plot) }}" @else action="{{ route('plots.store') }}" @endisset>
		@csrf

		<div>
			@isset($plot)
			@method('PUT')
			@endisset

			<div class="bk-form__wrap pb-2" data-info="Общие сведения">
				<div class="row p-0 m-0">

					<!-- START group branch -->
					<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Отдел</h6>
					<div class="bk-form__select col-sm-auto form-group mb-2 pl-0">
						<select name="branch_id" id="branch_id" class="form-control bk-form__input">
							<option disabled selected>Выберите отдел</option>
							@foreach($branches as $branch)
							<option value="{{ $branch->id }}" @isset($plot) @if($plot->branch_id == $branch->id)
								selected
								@endif
								@endisset
								>
								{{ ucfirst($branch->name) }}
							</option>
							@endforeach
						</select>
					</div>
					<!-- END group branch -->

					<!-- START group address -->
					<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Адрес</h6>
					<div class="bk-form__select col-sm-auto form-group mb-2 pl-0">
						<label for="street" class="bk-form__label mb-0">Улица</label>
						<select name="street_id" id="street" class="form-control bk-form__input">
							<option disabled selected>Выберите улицу</option>
							@foreach($streets as $street)
							<option value="{{ $street->id }}" @isset($plot) @if($plot->street_id == $street->id)
								selected
								@endif
								@endisset
								>
								{{ ucfirst($street->name) }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="bk-form__num col-sm-auto form-group mb-2 pl-0">
						<label for="num_home" class="bk-form__label mb-0">Дом</label>
						<input id="num_home" min="1" max="150" type="number" class="form-control bk-form__input" name="num_home" required value="{{ old('num_home', isset($plot) ? $plot->num_home : null) }}">
					</div>

					<div class="bk-form__num col-sm-auto form-group mb-2 pl-0">
						<label for="num_corp" class="bk-form__label mb-0">Корпус</label>
						<input id="num_corp" type="text" class="form-control bk-form__input" name="num_corp" value="{{ old('num_corp', isset($plot) ? $plot->num_corp : null) }}">
					</div>
					<!-- END group address -->

				</div>
			</div>


			<div class="form-group">
				<button type="submit" class="btn btn-outline-success">Сохранить</button>
				<a href="{{ route('plots.index') }}" class="btn btn-outline-secondary">Назад</a>
			</div>

		</div>
	</form>
</div>
@endsection