@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>
                {{ $dish->name }}
            </h2>
        </div>
        <div class="col-12">
            <h2 scope="row">
                {{ $dish->id }}
            </h2>

            <p>
                {{$dish->ingredients}}
            </p>

            <p>
                {{ $dish->price }} €
            </p>
            <p>
                {{ $dish->description }}
            </p>
            <div class="p-5">

            @if ( str_starts_with($dish->img_url, 'http'))
                <img src="{{ $dish->img_url }}" alt="">
            @else
                <img src="{{ asset('storage') . '/' . $dish->img_url }}" alt="">
            @endif

            </div>
            <a href="{{ route('admin.dishes.edit', $dish) }}">
                <button class="btn btn-sm btn-success mx-1">
                    Modifica
                </button>
            </a>
             <!-- Button trigger modal --> 
             <button type="button" class="btn btn-warning btn-sm mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $dish->id }}">
                Cancella
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal-{{ $dish->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Attenzione</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Vuoi veramente cancellare {{ $dish->name }}?
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
        </tr>
        </div>
    </div>
</div>
@endsection