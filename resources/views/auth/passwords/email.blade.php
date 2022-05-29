@extends('layouts.auth')

@section('content')

    <div class="page-content text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-4">
                <h3>Reset Password</h3>

                <form class="rd-form form-lg" method="POST" action="{{ route('password.email') }}">
                  {{ csrf_field() }}

                  <div class="form-wrap{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input class="form-input" id="login-email" type="email" name="email" value="{{ old('email') }}" data-constraints="@Email @Required">
                    <label class="form-label" for="login-email">E-mail</label>

                     @if ($errors->has('email'))
                        <span style="color: red">{{ $errors->first('email') }}</span>
                    @endif
                  </div>

                  <button class="button button-lg button-round button-block button-primary-invert" type="submit">Send Password Reset Link</button>
                </form>
            </div>
          </div>
        </div>
      </div>

@endsection
