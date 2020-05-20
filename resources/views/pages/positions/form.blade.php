@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">

	@isset($position)
	<h2>Редактировать должность</h2>
	@else
	<h2>Новая должность</h2>
	@endisset

	<form method="POST" @isset($position) action="{{ route('positions.update', $position) }}" @else action="{{ route('positions.store') }}" @endisset class="bk-form">
		@csrf

		<div>
			@isset($position)
				@method('PUT')
			@endisset

			<div class="form-group">
				<label for="name" class="bk-form__label mb-0">Должность</label>
				<input id="name" type="text" class="form-control bk-form__input bk-form__input--md" name="name" required value="@isset($position) {{ $position->name }} @endisset" placeholder="Введите наименование должности" autofocus>
			</div>

			<button type="submit" class="btn btn-outline-success">Сохранить</button>

		</div>
	</form>
</div>
@endsection