@extends('auth.layouts.master')

@section('content')
<div class="bk-login">
  <div class="container-fluid">
    <div class="row flex-column align-items-center">

      <div class="d-flex flex-column align-items-center">

        <div class="bk-logo bk-logo--mb d-flex flex-column align-items-center">
          <img class="bk-logo__img bk-logo__img--size-md" src="{{asset("images/logo.png")}}" alt="logo">
          <h3 class="bk-logo__title bk-logo__title--size-md text-center">АИС</h3>
        </div>
        <!-- /.bk-logo -->

        <div class="bk-login-card p-4 rounded">

          <h4 class="bk-login-header text-center text-uppercase">Авторизация</h4>

          <div class="bk-login-body">
            <form method="POST" action="{{ route('login') }}" class="bk-login-form">
              @csrf

              <div class="bk-login-form__group row mb-2">
                <div class="col-md-12 d-flex flex-column align-items-center">
                  <input id="name" type="name" class="form-control @error('name') is-invalid @enderror bk-input bk-login-form__input" name="name" value="{{ old('name') }}" required placeholder="Логин" autofocus autocomplete="off">
                  @error('name')
                  <span class="invalid-feedback bk-alert-auth" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="bk-login-form__group row mb-4">
                <div class="col-md-12 d-flex flex-column align-items-center">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror bk-input bk-login-form__input" name="password" required placeholder="Пароль" autocomplete="off">
                  @error('password')
                  <span class="invalid-feedback bk-alert-auth" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="bk-login-form__group row mb-2">
                <div class="col-md-12">
                  <div class="form-check text-center">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                      Запомнить меня
                    </label>
                  </div>
                </div>
              </div>

              <div class="bk-login-form__group row">
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary px-4">
                    Войти
                  </button>
                </div>
              </div>



            </form>
          </div>
        </div>
        <!-- /.bk-login-card -->

      </div>
    </div>
  </div>
</div>
@endsection