@extends('layouts.app')

@section('content')
    <div class="container-fluid first-login-bg">
        <div class="row justify-content-center">
            <div class="col-md-8">


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <div class="my-5">                        
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center pt-4">
                <a href="{{ route('admin.restaurants.create') }}">
                    <button type="button" class="btn text-white add-plate-btn fs-2 fw-bold ">
                        Aggiungi Ristorante
                    </button>
                </a>
            </div>
        </div>
@endsection
