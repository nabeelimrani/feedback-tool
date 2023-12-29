@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-start">
            <div class="col-md-5">
                <div class="login-logo">
                    <a href="{{ url('/login') }}"><b>Feedback </b> Tool</a>
                    <img src="{{ asset('icon/feedback.png') }}" width="35">
                </div>
                <div class="card" style="background: rgba(255, 255, 255, 0.3);">
                    <div class="card-body">
                        <h4 class="text-center mb-4">Register a new membership</h4>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <div class="input-group">
                                    <input id="name" type="text" placeholder="Enter your full name"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="input-group">
                                    <input id="email" placeholder="Enter your email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
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
                                <div class="input-group">
                                    <input id="password" placeholder="Enter your password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">
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

                            <div class="mb-3">
                                <div class="input-group">
                                    <input id="password-confirm" placeholder="Repeat your password" type="password"
                                        class="form-control" name="password_confirmation" required
                                        autocomplete="new-password">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fa fa-user-plus me-2"></i> Register
                                </button>
                            </div>
                        </form>

                        <p class="mt-3 text-center">
                            <a href="{{ url('/login') }}">
                                <i class="fas fa-sign-in-alt me-1"></i> I already have a membership
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
