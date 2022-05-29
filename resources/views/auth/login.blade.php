@extends('layouts.auth')

@section('content')

    <div class="page-content text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-4">
              <!-- Tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs nav-tabs-inline">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Login</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Registration</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-1-1">
                    <h3>Login</h3>
                    <!-- RD Mailform-->
                    <form class="rd-form form-lg" method="POST" action="{{ route('login') }}">
                      @csrf

                      <div class="form-wrap">
                        <input class="form-input @error('email') is-invalid @enderror" id="login-email" type="email" name="email" value="{{ old('email') }}" data-constraints="@Email @Required">

                        <label class="form-label" for="login-email">E-mail</label>

                        @error('email')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-wrap">
                        <input class="form-input" id="login-password" type="password" name="password" data-constraints="@Required">
                        <label class="form-label" for="login-password">Password</label>
                      </div>

                      <div class="form-wrap">
                           <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                      </div>

                      <button class="button button-lg button-round button-block button-primary-invert" type="submit">Sign In</button>
                    </form>
                    <div class="group-sm group-sm-justify group-middle social-items"><span><a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a></span></div>
                  </div>

                  <div class="tab-pane fade" id="tabs-1-2">
                    <h3>Registration</h3>
                    <form class="rd-form form-lg" method="POST" action="{{ route('register') }}">
                      @csrf

                      <div class="form-wrap">
                        <input class="form-input @error('name') is-invalid @enderror" id="register-name" type="text" name="name" value="{{ old('name') }}" data-constraints="@Required">
                        <label class="form-label" for="register-name">Name</label>

                        @error('name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-wrap">
                        <input class="form-input @error('email') is-invalid @enderror" id="register-email" type="email" name="email" value="{{ old('email') }}" data-constraints="@Email @Required">
                        <label class="form-label" for="register-email">E-mail</label>

                        @error('email')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-wrap">
                        <input class="form-input @error('password') is-invalid @enderror" id="register-password" type="password" name="password" data-constraints="@Required">
                        <label class="form-label" for="register-password">Password</label>

                        @error('password')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-wrap">
                        <input class="form-input" id="register-confirm-password" type="password" name="password_confirmation" data-constraints="@Required">
                        <label class="form-label" for="register-confirm-password">Confirm Password</label>
                      </div>
                      <button class="button button-lg button-round button-block button-primary-invert" type="submit">Register</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
