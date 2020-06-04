@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
	<h2 class="mb-0">Участки</h2>

	<div class="py-2 mb-1">
		<a href="{{ route('plots.create') }}" class="btn btn-outline-primary">
			Новая запись
		</a>
	</div>

	<div class="table-responsive">
		<table class="bk-table table table-bordered">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Участок</th>
					<th scope="col">Адрес</th>
					<th scope="col">Действие</th>
				</tr>
			</thead>
			<tbody>
			
			</tbody>
		</table>
	</div>

</div>
@endsection