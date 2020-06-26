@extends('layouts.master')

@section('content')
<div id="user-index" class="bk-page overflow-hidden pt-4 py-2">
	<h2 class="mb-0">Пользователи</h2>

	@if(Auth::user()->permissions()->pluck('slug')->contains('user_full'))
	<div class="py-2 mb-1">
		<a href="{{ route('users.create') }}" class="btn btn-outline-primary">
			Новая запись
		</a>
	</div>
	@endif

	<div class="table-responsive">
		<table id="user-table" class="bk-table table table-bordered table-hover">
			<thead class="thead-light">
				<tr>
					<th style="width: 5%;">#</th>
					<th style="width: 20%;">Логин</th>
					<th style="width: 20%;">Роль</th>
					<th>Права</th>
					@if(Auth::user()->permissions()->pluck('slug')->contains('user_full'))
					<th class="no-sort" style="width: 10%;">Действие</th>
					@endif
				</tr>
			</thead>
			<tbody>
				@foreach($users as $key => $user)
				<tr>
					<td>{{ $key+=1 }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->role->name }}</td>
					<td>
						<div class="bk-perm">
							<a href="javascript:void(0)" class="bk-btn bk-btn-triangle" style="position: absolute; top: 0; right: 5px;">
								<span class="bk-triangle bk-btn-triangle--down"></span>
							</a>
							@foreach($sections as $section)

							@if($user->permissions->where('name', $section)->count())
							<span class="bk-text--info">{{ $section }}</span>
							@endif

							@if($user->permissions->where('name', $section)->count() == 2)
							@foreach($user->permissions as $perm)
							@if($perm->name == $section)
							<small class="text-muted align-top">{{$perm->desc}}</small>
							@endif
							@endforeach
							@else
							@foreach($user->permissions as $perm)
							@if($perm->name == $section)
							<small class="text-muted align-top">{{$perm->desc}}</small>
							@endif
							@endforeach
							@endif

							@if($user->permissions->where('name', $section)->count())
							<br>
							@endif
							@endforeach
						</div>
					</td>
					@if(Auth::user()->permissions()->pluck('slug')->contains('user_full'))
					<td>
						<div class="d-flex">
							<div class="bk-btn bk-btn-crud btn btn-warning mr-1" data-tip="Редактировать">
								<a href="{{ route('users.edit', $user) }}" class="bk-btn-wrap bk-btn-link"></a>
								<span class="bk-btn-wrap bk-btn-icon">
									@include('includes.icons.pen')
								</span>
							</div>

							<div class="bk-btn bk-btn-crud btn btn-danger" data-tip="Удалить">
								<a href="javascript:void(0)" class="bk-btn-wrap bk-btn-link bk-btn-del" data-id="{{ $user->id }}" data-table-name="user" data-toggle="modal" data-target="#bk-delete-modal">
								</a>
								<span class="bk-btn-wrap bk-btn-icon">
									@include('includes.icons.trash')
								</span>
							</div>

						</div>
					</td>
					@endif

				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</div>
@endsection