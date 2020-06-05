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

					<!-- START group plot -->
					<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Участок</h6>
					<div class="bk-form__select col-sm-auto form-group mb-2 pl-0">

						@isset($plot)
							<input type="hidden" name="branch_id" value="{{ $plot->branch->id }}">
						@endisset

						<select 
							name="branch_id" 
							class="form-control bk-form__input @error('branch_id') is-invalid @enderror"
							@isset($plot)
								disabled
							@endisset
						>
							<option disabled selected>Выберите участок</option>
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

						@error('branch_id')
						<span class="invalid-feedback bk-alert-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<!-- END group plot -->

					<!-- START group addresses -->
					<h6 class="w-100 border-bottom mr-3 py-1 pl-0">Список адресов</h6>
					<div id="home-list" class="d-flex flex-wrap pl-2 mr-3" style="height: 250px; overflow-y: auto;">

						@foreach($addresses as $id => $address)
						<div class="bk-form__address col-sm-auto custom-control custom-checkbox mb-2">
							<input id="{{ $id }}" name="addresses[]" type="checkbox" class="custom-control-input" value="{{ $address->id }}" @isset($plot) @if($plot->addresses->where('id', $address->id)->count())
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
				<button type="submit" class="btn btn-outline-success">Сохранить</button>
				<a href="{{ route('plots.index') }}" class="btn btn-outline-secondary">Назад</a>
			</div>

		</div>
	</form>

</div>
@endsection