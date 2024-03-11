@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 p-2 mb-3 text-center">
            <h2>
                Questi sono i tuoi piatti presenti {{ Auth::user()->name }}!
            </h2>
        </div>
        <!-- table row -->
        <div class="col-12">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Ingredienti</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Immagini</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $dishes as $dish )
                        <tr>
                            <td>
                                <a href="{{ route('admin.dishes.show', $dish) }}">
                                    {{ $dish->name }}
                                </a>
                            </td>
                            <td>
                                {{ $dish->ingredients }}
                            </td>
                            <td>
                                {{ $dish->price }} €
                            </td>
                            <td>
                                {{ $dish->description }}
                            </td>
                            <td>
                                <div width="10">
                                    @if ( str_starts_with($dish->img_url, 'http'))
                                        <img class="img-fluid" src="{{ $dish->img_url }}" alt="">
                                    @else
                                        <img src="{{ asset('storage') . '/' . $dish->img_url }}" alt="">
                                    @endif
                                </div>
                            </td>
                            <td class="">
                                <a href="{{ route('admin.dishes.show', $dish) }}">
                                    <button class="btn btn-sm btn-info" style="min-width: 4rem;">
                                        Mostra
                                    </button>
                                </a>
                                <a href="{{ route('admin.dishes.edit', $dish) }}">
                                    <button class="btn btn-sm btn-success mx-1" style="min-width: 4rem;">
                                        Edita
                                    </button>
                                </a>
                               
                                 <!-- Button trigger modal --> 
                                 <button type="button" class="btn btn-warning btn-sm mx-1 custom_button" style="min-width: 4rem;" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $dish->id }}">
                                    Cancella
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal-{{ $dish->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Attenzione...</h1>
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
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                Non ci sono piatti
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

            <div class="col-6">
                <a href="{{ route('admin.dishes.create') }}">
                    <button class="btn btn-primary">
                        Aggiungi Piatto
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
