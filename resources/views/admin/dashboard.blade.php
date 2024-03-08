@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">
                Welcome back, {{ Auth::user()->name }}
                {{ $restaurant->company_name }}
                {{ $restaurant->address }}

            </h2>
            

            <div class="col-6">
              
                <a href="{{ route('admin.dishes.create') }}">
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
@endsection