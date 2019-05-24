@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col col-login mx-auto">
            <div class="d-flex align-items-center justify-content-center mb-5">
                <img src="{{ asset('images/logo.png') }}" class="h-6" alt="Logo">
                <span style="font-size: x-large;">Laravel Helper</span>
            </div>
            <form class="card" action="{{ route('login') }}" method="post">
                @csrf
                <div class="card-body p-6">
                    <p class="font-weight-bold">Demo Account:- demo@gmail.com / secret</p>

                    <div class="card-title">Login to your account</div>

                    <div class="form-group">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Enter email">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="form-label">
                            Password
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="float-right small">I forgot password</a>
                            @endif
                        </label>
                        <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" id="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }} />
                            <span class="custom-control-label">Remember me</span>
                        </label>
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted">
                Don't have account yet? <a href="{{ route('register') }}">Sign up</a>
            </div>
        </div>
    </div>
@endsection
