@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="row pt-3">
        <div class="col-md-8">
            <div class="card card-login" style="border: 1px solid #fe7e00; width: 700px;">
                <div class="card-header text-center  fs-3">{{ __('Accedi') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email *') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Inserisci la tua e-mail" type="email" class="custom_email-button form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password *') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Inserisci la tua password" type="password" class="custom_pw-button form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check ps-0">
                                    <input id="custom_rememberme-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ricordami') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn text-white" style="background-color: #fe7e00;">
                                    {{ __('Accedi') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="pw-forget_custom d-block mt-3" href="{{ route('password.request') }}">
                                        {{ __('Hai dimenticato la tua password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
