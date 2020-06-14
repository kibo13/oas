<nav class="navbar navbar-expand-sm navbar-light bg-light px-md-4">

	<a class="navbar-brand p-0" href="{{ route('home') }}">
		<div class="bk-logo d-flex align-items-start">
			<img class="bk-logo__img bk-logo__img--size-sm" src="{{asset("images/logo.png")}}" alt="logo">
			<h3 class="bk-logo__title bk-logo__title--size-sm text-left">АИС</h3>
		</div>
	</a>
	<!-- /.logo -->


	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- /.btn-toggle -->

	<div class="bk-navbar collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="bk-navbar__list navbar-nav d-flex justify-content-end w-100">

			@if (Auth::check())
			<li>
				<a class="nav-link" href="{{ route('statements.index') }}">Панель управления</a>
			</li>
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
				</div>
			</li>

			@else
			<li>
				<a class="nav-link" href="{{ route('login') }}">Войти</a>
			</li>
			@endif



		</ul>

	</div>
	<!-- /.list-group -->

</nav>