@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="login-bg py-5">
                <div class="flex flex-column align-items-center mt-3 mb-5">
                    <img src="{{ asset('images/logo.png') }}" style="width: 300px; height: 300px" alt="logo">
                </div>
                <form method="POST" action="{{ route('login') }}" class="mt-5 px-3">
                    @csrf
                    <div class="flex flex-column mb-3">
                        <label for="email" class="col mb-2 text-white">Email Address</label>

                        <div class="col-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex flex-column mb-3">
                        <label for="password" class="col mb-2 text-white">Password</label>

                        <div class="col-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col mt-5 mb-3">
                        <button type="submit" class="login-button col-12 text-white">
                            {{ __('Login') }}
                        </button>
                    </div>

                    <div>
                        <div class="col">
                            <a class="btn text-white" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="col">
                            <a class="btn text-white" href="{{ route('register') }}">
                                {{ __('Register new account') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
