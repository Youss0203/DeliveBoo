@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="index_row row"> <!-- Removed "row" class -->
        <div class="col-12 p-2 mb-3 text-center">
            <h2>
                Questi sono i tuoi piatti: 
            </h2>
        </div>
        @forelse ($dishes as $dish)
        <div class="col-md-4 mb-4">
            <div class="card custom_card" style="height: 100%">
                <img src="{{ str_starts_with($dish->img_url, 'http') ? $dish->img_url : asset('storage') . '/' . $dish->img_url }}" class="card-img-top" alt="{{ $dish->name }}">
                <div class="card-body d-flex flex-column"> <!-- Added "d-flex" and "flex-column" classes -->
                    <h3 class="card-title fw-bold">{{ $dish->name }}</h3>
                    <p class="card-text">{{ $dish->description }}</p>
                    <h5 class="card-title fst-italic">{{ $dish->ingredients }}</h5>
                    <div class="mt-auto"> <!-- Added "mt-auto" class to push the price div to the bottom -->
                        <p class="card-text fw-bold fs-4 text-black">{{ $dish->price }} €</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.dishes.show', $dish) }}" class="btn text-white" style="background-color: #fe7e00">Mostra</a>
                    <a href="{{ route('admin.dishes.edit', $dish) }}" class="btn btn-warning">Modifica</a>
                    <!-- Button trigger modal --> 
                    <button type="button" class="btn btn-danger custom_button" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $dish->id }}">
                        Cancella
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal-{{ $dish->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-3 fw-bolder text-danger" id="exampleModalLabel">Attenzione!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body fs-4">
                        Vuoi veramente cancellare il piatto 
                        <span class="fw-bolder">{{ $dish->name }}?</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <form class="d-inline-block" action="{{ route('admin.dishes.destroy', $dish) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit">
                                Cancella
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <p>Non ci sono piatti.</p>
        </div>
        @endforelse
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <a href="{{ route('admin.dishes.create') }}" class="btn btn-primary">Aggiungi Piatto</a>
        </div>
    </div>
</div>
@endsection
