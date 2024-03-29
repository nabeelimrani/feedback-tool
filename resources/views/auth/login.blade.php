@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-start">
            <div class="col-md-5">
                <div class="login-logo">
                    <a href="{{ url('/login') }}"><b>Feedback </b> Tool</a>
                    <img src="{{ asset('icon/feedback.png') }}" width=50>
                </div>
                <div class="card" style="background: rgba(255, 255, 255, 0.3);">
                    <div class="card-body ">
                        <p class="login-box-msg">Sign in to start your session</p>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <input id="email" type="email" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="input-group-append">
                                    <div class="" style="width: 40px; height: 38px;">
                                        <lord-icon src="https://cdn.lordicon.com/zfmcashd.json" trigger="hover"
                                            style="width: 70px;">
                                        </lord-icon>
                                    </div>
                                </div>

                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input id="password" placeholder="Password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                <div class="input-group-append">
                                    <div class=""
                                        style="width: 40px; height: 38px;
                                        ">
                                        <lord-icon src="https://cdn.lordicon.com/ccrgnftl.json" trigger="hover"
                                            style="width: 70px;" class="text-danger">
                                        </lord-icon>
                                    </div>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fa fa-sign-in-alt"></i> Sign In
                                    </button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="d-grid">
                                    <a href="{{ URL::to('googleLogin') }}">
                                        <img src="https://onymos.com/wp-content/uploads/2020/10/google-signin-button.png"
                                            width="410px" height="45px" style="margin-top: 12px"
                                            alt="Sign in with Google">
                                    </a>
                                </div>
                            </div>

                        </form>

                        @if (Route::has('password.request'))
                            <p class="mb-1">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <i class="fa fa-key"></i> {{ __('Forgot Your Password?') }}
                                </a>
                            </p>
                        @endif
                        <p class="mb-0">
                            <a href="{{ url('/register') }}" class="text-center">
                                <i class="fas fa-user-plus"></i> Register a new membership
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
