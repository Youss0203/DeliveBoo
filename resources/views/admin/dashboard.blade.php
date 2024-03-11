@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
            <div class="card" style="width: 50rem;">
                <img src="{{ $restaurant->img_url}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1>{{ $restaurant->company_name }}</h1>
                  <p class="card-text">{{ $restaurant->address }}</p>
                </div>
              </div>
            

              <div>
                <a class="px-5" href="{{ route('admin.dishes.create') }}">
                    <button class="btn btn-primary">
                        Aggiungi Piatto
                    </button>
                </a>
                <a href="{{ route('admin.dishes.index') }}">
                    <button class="btn btn-primary">
                        Vedi i tuoi piatti
                    </button>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection