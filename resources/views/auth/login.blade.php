@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-start">
            <div class="col-md-5">
                <div class="login-logo">
                    <a href="{{ url('/login') }}"><b>Feedback </b> Tool</a>
                    <img src="{{ asset('icon/feedback.png') }}" width="50">
                </div>
                <div class="card" style="background: rgba(255, 255, 255, 0.3);">
                    <div class="card-body ">
                        <h4 class="text-center mb-4">Sign in to start your session</h4>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <input id="email" type="email" placeholder="Enter your email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input id="password" placeholder="Enter your password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>



                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-sign-in-alt me-2"></i> Sign In
                                </button>
                            </div>
                        </form>

                        @if (Route::has('password.request'))
                            <p class="mt-3">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <i class="fa fa-key me-1"></i> {{ __('Forgot Your Password?') }}
                                </a>
                            </p>
                        @endif
                        <p class="mt-3">
                            <a href="{{ url('/register') }}" class="text-center">
                                <i class="fas fa-user-plus me-1"></i> Register a new membership
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
