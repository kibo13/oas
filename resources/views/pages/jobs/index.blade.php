@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
	<h2 class="mb-1">Учет работ</h2>

	@if(Auth::user()->roles()->pluck('slug')->contains('disp_oas'))
	<div class="py-2 mt-1">
		<a href="{{ route('jobs.create') }}" class="btn btn-outline-primary">
			Новая запись
		</a>
	</div>
	@endif

	<div class="table-responsive mt-1">
		<table class="bk-table table table-bordered">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Предприятие</th>
					<th scope="col">Вид работ</th>
					<th scope="col">Тип откл.</th>
					<th scope="col">Начало работ</th>
					<th scope="col">Окончание работ</th>
					<th scope="col">Адрес</th>
					<th scope="col">Действие</th>
				</tr>
			</thead>
			<tbody>

				@foreach($jobs as $id => $job)
				<tr>
					<td>{{ $id+=1 }}</td>
					<td>{{ $job->organization->name }}</td>
					<td>{{ $job->type_job }}</td>
					<td>{{ $job->type_off }}</td>
					<td>{{ date('d.m.Y H:i', strtotime($job->date_on)) }}</td>
					<td>{{ date('d.m.Y H:i', strtotime($job->date_off)) }}</td>
					<td class="address">
						{{ $job->street->name }}
						{{ $job->num_home }}
						{{ $job->num_corp }}
					</td>
					<td>
						<div class="d-flex">
							<div class="bk-crud__wrap">
								<a href="{{ route('jobs.show', $job) }}" class="bk-crud__btn btn btn-info mr-1">
									П
								</a>
								<span class="bk-crud__tip">Просмотр</span>
							</div>

							@if(Auth::user()->roles()->pluck('slug')->contains('disp_oas'))
							<div class="bk-crud__wrap">
								<a href="{{ route('jobs.edit', $job) }}" class="bk-crud__btn btn btn-warning mr-1">
									Р
								</a>
								<span class="bk-crud__tip">Редактировать</span>
							</div>

							<div class="bk-crud__wrap">
                <a 
                  href="javascript:void(0)" 
                  class="bk-crud__btn bk-crud__btn--del btn btn-danger" 
                  data-toggle="modal" 
                  data-target="#bk-delete-modal"
                  data-id="{{ $job->id }}"
                  data-table-name="job"
                >
                  У
                </a>
                <span class="bk-crud__tip">Удалить</span>
              </div>

							@endif
						</div>
					</td>

				</tr>
				@endforeach

			</tbody>
		</table>
	</div>

	{{ $jobs->links() }}
</div>
@endsection