@section('header')
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
	<div class="container-fluid">

		<a class="navbar-brand p-0" href="{{ route('home') }}">
			<div class="bk-logo d-flex align-items-start">
				<img class="bk-logo__img bk-logo__img--size-sm" src="{{asset("images/logo.png")}}" alt="logo">
				<h3 class="bk-logo__title bk-logo__title--size-sm text-left">АИС</h3>
			</div>
		</a>
		<!-- /.bk-logo -->

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- /.bk-burger -->

		<div class="collapse bk-navbar navbar-collapse" id="navbarSupportedContent">
			<!-- Left Side Of Navbar -->

			@if(Auth::user()->roles()->pluck('name')->contains('Админ'))
				<ul class="bk-navbar__list navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('users.index') }}">Пользователи</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Справочник</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="#">Отделы</a>
							<a class="dropdown-item" href="#">Дожности</a>
							<a class="dropdown-item" href="#">Неисправности</a>
						</div>
					</li>
				</ul>
			@endif

			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				@guest
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
				</li>
				@if (Route::has('register'))
				<li class="nav-item">
					<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
				</li>
				@endif
				@else
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<!-- /.logout -->
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="
								event.preventDefault();
								document.getElementById('logout-form').submit();">
							{{ __('Выйти') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>

				</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>