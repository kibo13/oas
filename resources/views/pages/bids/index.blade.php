@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
	<h2 class="mb-1">Заявки</h2>

	@if(Auth::user()->roles()->pluck('slug')->contains('disp_zheu'))
	<div class="py-2 mt-1">
		<a href="{{ route('bids.create') }}" class="btn btn-outline-primary">
			Новая запись
		</a>
	</div>
	@endif

	<div class="table-responsive mt-1">
		<table class="bk-table table table-bordered">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Адрес</th>
					<th scope="col">Поступила</th>
					<th scope="col">Тип(э/с)</th>
					<th scope="col">Неисправность</th>
					<th scope="col">Отдел</th>
					<th scope="col">Статус</th>
					<th scope="col">Действие</th>
				</tr>
			</thead>
			<tbody>



			</tbody>
		</table>
	</div>

	{{ $bids->links() }}
</div>
@endsection