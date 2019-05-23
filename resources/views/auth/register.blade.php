@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col col-login mx-auto">
            <div class="d-flex align-items-center justify-content-center mb-5">
                <img src="{{ asset('images/logo.png') }}" class="h-6" alt="Logo">
                <span style="font-size: x-large;">Laravel Helper</span>
            </div>
            <form class="card" action="{{ route('register') }}" method="post">
                @csrf
                <div class="card-body p-6">
                    <div class="card-title">Create new account</div>

                    <div class="form-group">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter Name" autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Enter Email">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter Password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted">
                Already have account? <a href="{{ route('login') }}">Sign in</a>
            </div>
        </div>
    </div>
@endsection
