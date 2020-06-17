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
					<th scope="col">Список адресов</th>
					<th scope="col">Действие</th>
				</tr>
			</thead>
			<tbody>

				@foreach($plots as $id => $plot)
				@if($plot->branch->slug != 2)
				<tr>
					<td>{{ $id+=1 }}</td>
					<td>{{ $plot->branch->name }}</td>
					<td>

						@foreach($streets as $street)
						@if($plot->addresses->where('street_id', $street->id)->count())
						{{ $street->name }}
						@endif

						@foreach($plot->addresses as $address)
						<small class="bk-text--small text-muted align-top">
							@if($street->id == $address->street_id)
							д.{{ $address->num_home }},
							@endif
						</small>
						@endforeach

						@if($plot->addresses->where('street_id', $street->id)->count())
						<br>
						@endif

						@endforeach

					</td>
					<td>
						<div class="d-flex">
							<div class="bk-btn bk-btn-crud btn btn-warning mr-1" data-tip="Редактировать">
								<a href="{{ route('plots.edit', $plot) }}" class="bk-btn-wrap bk-btn-link"></a>
								<span class="bk-btn-wrap bk-btn-icon">
									@include('includes.icons.pen')
								</span>
							</div>

							<div class="bk-btn bk-btn-crud btn btn-danger" data-tip="Удалить">
								<a href="javascript:void(0)" class="bk-btn-wrap bk-btn-link bk-btn-del" data-id="{{ $plot->id }}" data-table-name="plot" data-toggle="modal" data-target="#bk-delete-modal">
								</a>
								<span class="bk-btn-wrap bk-btn-icon">
									@include('includes.icons.trash')
								</span>
							</div>

						</div>
					</td>
				</tr>
				@endif
				@endforeach

			</tbody>
		</table>
	</div>

</div>
@endsection