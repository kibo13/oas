@section('header')
<nav class="navbar navbar-expand-sm navbar-light bg-light">
	<div class="container-fluid px-1">

		<button type="button" id="sidebarCollapse" class="navbar-btn">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<!-- /.bk-trigger -->

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- /.bk-burger -->

		<div class="bk-navbar collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="bk-navbar__list navbar-nav d-flex justify-content-end w-100">

				@if(Auth::user()->roles()->pluck('slug')->contains('admin'))
				<li @nbactive('user*')>
					<a class="nav-link" href="{{ route('users.index') }}">Пользователи</a>
				</li>
				@endif
				<!-- /.admin-panel -->

				@if(Auth::user()->roles()->pluck('info')->contains('1'))
				<li class="nav-item dropdown mr-2">
					<a id="navbarDropdown" class="nav-link dropdown-toggle bk-navbar__info pr-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						Информация
					</a>
					<!-- /.show-user -->
					<div class="bk-navbar__dropitem dropdown-menu dropdown-menu-right p-0" aria-labelledby="navbarDropdown">

						@if(Auth::user()->roles()->pluck('slug')->contains('hh'))
						<a class="dropdown-item bk-navbar__link" href="{{ route('branches.index') }}">
							Отделы
						</a>
						@endif

						@if(Auth::user()->roles()->pluck('slug')->contains('disp_zheu'))
						<a class="dropdown-item bk-navbar__link" href="{{ route('plots.index') }}">
							Участки
						</a>
						@endif

						@if(Auth::user()->roles()->pluck('slug')->contains('pts'))
						<a class="dropdown-item bk-navbar__link" href="{{ route('organizations.index') }}">
							Предприятия
						</a>
						<a class="dropdown-item bk-navbar__link" href="{{ route('addresses.index') }}">
							Адреса
						</a>
						<a class="dropdown-item bk-navbar__link" href="{{ route('defects.index') }}">
							Неисправности
						</a>
						@endif

				</li>
				@endif
				<!-- /.info -->

				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle bk-navbar__info pr-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }}
						<span class="caret"></span>
					</a>
					<!-- /.show-user -->

					<div class="bk-navbar__dropitem dropdown-menu dropdown-menu-right p-0" aria-labelledby="navbarDropdown">
						<a id="logout-link" class="dropdown-item bk-navbar__link" href="{{ route('logout') }}">
							Выйти
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST">
							@csrf
						</form>
						<!-- /.logout -->

				</li>
				<!-- /.btn-logout -->
			</ul>

		</div>
	</div>
</nav>