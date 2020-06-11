<div class="d-flex flex-column flex-md-row justify-content-between mt-2 mb-3">

	@if(Auth::user()->roles()->pluck('slug')->contains('oas'))
	<div class="mb-4 mb-md-0">
		<a href="{{ route('briefs.create') }}" class="btn btn-sm btn-outline-primary">
			Новая запись
		</a>
	</div>
	@endif

	<form class="mt-2 mt-md-0" method="GET" action="{{ route('briefs.index') }}">
		<div class="d-flex flex-column flex-sm-row">

			<div class="d-flex">
				<div class="bk-form__datepicker">
					<small class="bk-form__datepicker--text text-dark font-weight-bold">Начало периода</small>
					<input 
						type="date" 
						name="date_from" 
						class="bk-form__datepicker--field" 
						value="{{ request()->date_from }}"
						required>
				</div>

				<div class="bk-form__datepicker">
					<small class="bk-form__datepicker--text text-dark font-weight-bold">Конец периода</small>
					<input 
						type="date" 
						name="date_to" 
						class="bk-form__datepicker--field bl-none" 
						value="{{ request()->date_to }}" 
						required>
				</div>
			</div>

			<div class="d-flex mt-2 mt-sm-0">
				<div class="bk-form__btn ml-0 ml-sm-1">
					<button type="submit" class="bk-form__btn--link btn btn-sm btn-outline-info">Фильтр</button>
				</div>
				<div class="bk-form__btn ml-1">
					<a href="{{ route('briefs.index') }}" class="bk-form__btn--link btn btn-sm btn-outline-info">
						Сброс
					</a>
				</div>
				<div class="bk-form__btn ml-1">
					<a id="brief-print" href="javascript:void(0);" class="bk-form__btn--link btn btn-sm btn-outline-primary">
						Отчет
					</a>
				</div>
			</div>

		</div>
	</form>
</div>