@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container px-auto">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-show card mb-3 mx-auto"> <!-- Aggiunto "mx-auto" per centrare orizzontalmente -->
                @if ( str_starts_with($dish->img_url, 'http'))
                    <img src="{{ $dish->img_url }}" class="card-img-top img-fluid" alt="{{ $dish->name }}">
                @else
                    <img src="{{ asset('storage') . '/' . $dish->img_url }}" class="card-img-top" alt="{{ $dish->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title fw-bolder">{{ $dish->name }}</h5>
                    <p class="card-text fw-bold fs-3">{{ $dish->price }} €</p>
                    <p class="card-text">{{ $dish->description }}</p>
                    <p class="card-text fst-italic">{{ $dish->ingredients }}</p>
                    <p class="card-text fs-5"><small class="text-muted">Ultimo aggiornamento: {{ $dish->updated_at->diffForHumans() }}</small></p>
                        <div class="d-flex justify-content-center mt-4">
                            <a href="{{ route('admin.dishes.edit', $dish) }}" class="btn btn-warning text-white mx-1">Modifica</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $dish->id }}">Cancella</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal-{{ $dish->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Attenzione</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Vuoi veramente cancellare {{ $dish->name }}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form class="d-inline-block" action="{{ route('admin.dishes.destroy', $dish) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Cancella</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    @media (max-width: 575.98px) {
        body {
            overflow-y: hidden;
        }
    }
</style>
@endpush