@extends('auth.layouts.master')

@section('content')
<div class="bk-register">
  <div class="container-fluid">
    <div class="row flex-column align-items-center">

      <div class="d-flex flex-column align-items-center">

        <div class="bk-logo bk-logo--mb d-flex flex-column align-items-center">
          <img class="bk-logo__img bk-logo__img--size-md" src="{{asset("images/logo.png")}}" alt="logo">
          <h3 class="bk-logo__title bk-logo__title--size-md text-center">АИС</h3>
        </div>
        <!-- /.bk-logo -->

        <div class="bk-register-card p-4 rounded">

          <h4 class="bk-register-header text-center text-uppercase">Регистрация</h4>

          <div class="bk-register-body">
            <form method="POST" action="{{ route('register') }}" class="bk-register-form">
              @csrf

              <div class="bk-register-form__group row mb-2">
                <div class="col-md-12 d-flex flex-column align-items-center">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror bk-input bk-register-form__input" name="name" value="{{ old('name') }}" required placeholder="Имя" autofocus autocomplete="off">
                  @error('name')
                  <span class="invalid-feedback bk-register-form__alert" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="bk-register-form__group row mb-2">
                <div class="col-md-12 d-flex flex-column align-items-center">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bk-input bk-register-form__input" name="email" value="{{ old('email') }}" required placeholder="E-mail" autocomplete="off">
                  @error('email')
                  <span class="invalid-feedback bk-register-form__alert" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="bk-register-form__group row mb-2">
                <div class="col-md-12 d-flex flex-column align-items-center">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror bk-input bk-register-form__input" name="password" required placeholder="Пароль" autocomplete="off">
                  @error('password')
                  <span class="invalid-feedback bk-register-form__alert" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="bk-register-form__group row mb-4">
                <div class="col-md-12 d-flex flex-column align-items-center">
                  <input id="password-confirm" type="password" class="form-control bk-input bk-register-form__input" name="password_confirmation" required placeholder="Пароль повторно" autocomplete="off">
                </div>
              </div>

              <div class="bk-register-form__group row">
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary px-4">
                    Регистрация
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