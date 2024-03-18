@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center fs-3" >{{ __('Accedi') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email *') }}</label>
                            <input id="email" placeholder="Inserisci la tua e-mail" type="email" class="custom_email-button form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password *') }}</label>
                            <input id="password" placeholder="Inserisci la tua password" type="password" class="custom_pw-button form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input id="custom_rememberme-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input">
                            <label class="form-check-label" for="remember">
                                {{ __('Ricordami') }}
                            </label>
                        </div>

                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn" style="background-color: #fe7e00">{{ __('Accedi') }}</button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="mb-0">
                                <a class="pw-forget_custom d-block mt-3" href="{{ route('password.request') }}">
                                    {{ __('Hai dimenticato la tua password?') }}
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
