@section('header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">

		<button type="button" id="sidebarCollapse" class="navbar-btn">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<!-- /.bk-trigger -->

		<button 
			class="navbar-toggler" 
			type="button" 
			data-toggle="collapse" 
			data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
			aria-expanded="false" 
			aria-label="{{ __('Toggle navigation') }}"
		>
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- /.bk-burger -->

		<div class="bk-navbar collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="bk-navbar__list navbar-nav mr-auto">
				@if(Auth::user()->roles()->pluck('slug')->contains('admin'))
				<li class="nav-item">
					<a class="nav-link" href="{{ route('users.index') }}">Пользователи</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Справочник</a>
					<div class="dropdown-menu" aria-labelledby="dropdown04">
						<a class="dropdown-item" href="{{ route('positions.index') }}">Дожности</a>
						<a class="dropdown-item" href="#">Неисправности</a>
						<a class="dropdown-item" href="{{ route('branches.index') }}">Отделы</a>
						<a class="dropdown-item" href="{{ route('organizations.index') }}">Предприятия</a>
					</div>
				</li>
				@endif

				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }}
						<span class="caret"></span>
					</a>
					<!-- /.show-user -->

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a id="logout-link" class="dropdown-item" href="{{ route('logout') }}">
							Выйти
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST">
							@csrf
						</form>
						<!-- /.logout -->

				</li>
			</ul>

		</div>
	</div>
</nav>