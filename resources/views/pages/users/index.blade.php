@extends('layouts.master')

@section('content')
<div class="overflow-hidden pt-4 py-2">
	<h2 class="mb-0">Пользователи</h2>

	<div class="py-2 mb-1">
		<a href="{{ route('users.create') }}" class="btn btn-outline-primary">
			Новый пользователь
		</a>
	</div>

	<div class="table-responsive">
		<table class="bk-table table table-bordered">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Логин</th>
					<th scope="col">Роль</th>
					<th scope="col">Действия</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $key => $user)
				<tr>
					<th scope="row">{{ $key+=1 }}</th>
					<td>{{ $user->name }}</td>
					<td>
						@foreach($user->roles as $role)
						{{ $role->name }}
						@endforeach
					</td>
					<td>
						<div class="d-flex">
							<a href="" class="mr-1">
								<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rss-square" class="bk-btn bk-btn--show svg-inline--fa fa-rss-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
									<path fill="currentColor" d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM112 416c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm157.533 0h-34.335c-6.011 0-11.051-4.636-11.442-10.634-5.214-80.05-69.243-143.92-149.123-149.123-5.997-.39-10.633-5.431-10.633-11.441v-34.335c0-6.535 5.468-11.777 11.994-11.425 110.546 5.974 198.997 94.536 204.964 204.964.352 6.526-4.89 11.994-11.425 11.994zm103.027 0h-34.334c-6.161 0-11.175-4.882-11.427-11.038-5.598-136.535-115.204-246.161-251.76-251.76C68.882 152.949 64 147.935 64 141.774V107.44c0-6.454 5.338-11.664 11.787-11.432 167.83 6.025 302.21 141.191 308.205 308.205.232 6.449-4.978 11.787-11.432 11.787z"></path>
								</svg>
							</a>
							<a href="" class="mr-1">
								<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-square" class="bk-btn bk-btn--edit svg-inline--fa fa-pen-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
									<path fill="currentColor" d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"></path>
								</svg>
							</a>

							<a href="">
								<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="minus-square" class="bk-btn bk-btn--del svg-inline--fa fa-minus-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
									<path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM92 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H92z"></path>
								</svg>
							</a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection