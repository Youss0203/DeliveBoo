@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Benvenuto!') }}

                        <div class="my-5">

                    <div>





                        <a href="{{ route('admin.restaurants.create') }}">
                            <button class="p-3 my-4">
                                Aggiungi ristorante
                            </button>
                        </a>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
