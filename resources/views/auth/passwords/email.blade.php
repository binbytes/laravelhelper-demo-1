@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col col-login mx-auto">
            <div class="d-flex align-items-center justify-content-center mb-5">
                <img src="{{ asset('images/logo.png') }}" class="h-6" alt="Logo">
                <span style="font-size: x-large;">Laravel Helper</span>
            </div>
            <form class="card" action="{{ route('password.email') }}" method="post">
                @csrf
                <div class="card-body p-6">
                    <div class="card-title">Forgot password</div>
                    <p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>
                    <div class="form-group">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{ old('email') }}" autofocus aria-describedby="emailHelp" placeholder="Enter email">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted">
                Forget it, <a href="{{ route('login') }}">send me back</a> to the sign in screen.
            </div>
        </div>
    </div>
@endsection
