@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="mb-4 pt-4">
                <h1 class="text-center logo">LOGIN</h1>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-floating mb-3">
                    <input type="email" class="form-control shadow-sm rounded @error('email') is-invalid @enderror"
                        id="floatingInput" name="email" value="{{ old('email') }}" placeholder="name@example.com" required
                        autocomplete="email" autofocus>
                    <label for="floatingInput">{{ __('Email Address') }}</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-floating mb-4">
                    <input type="password"
                        class="form-control rounded shadow-sm @error('password') is-invalid @enderror"
                        id="floatingPassword" name="password" placeholder="password" required
                        autocomplete="current-password">
                    <label for="floatingPassword">{{ __('Password') }}</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row mx-auto">
                    <button type="submit" class="btn btn-dark btn-lg rounded mb-3 shadow">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <span class="mt-3 text-center">Forgot password?
                            <a class="no-line link-dark" href="{{ route('password.request') }}">
                                {{ __('Click here') }}
                            </a>
                        </span>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
