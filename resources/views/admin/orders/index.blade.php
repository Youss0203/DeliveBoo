@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="index_row row">
        <div class="col-12 p-2 mb-3 text-center">
            <h2>
                Questi sono i tuoi ordini, {{ Auth::user()->name }}!
            </h2>
        </div>
        @forelse ($orders as $order)
        <div class="col-md-4 mb-4">
            <div class="card custom_card">

                <div class="card-body">
                    <p class="card-text"><strong>Nome:</strong> {{ $order->customer_name }} {{ $order->customer_lastname }}</p>
                    <p class="card-text"><strong>Indirizzo:</strong> {{ $order->customer_address }}</p>
                    <p class="card-text"><strong>Telefono:</strong> {{ $order->customer_phone }}</p>
                    <p class="card-text"><strong>Costo totale:</strong> {{ $order->total_amount }}</p>

                </div>
                <div class="card-footer text-center">
                    <!-- Button trigger modal --> 
                    <button type="button" class="btn btn-danger custom_button" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $order->id }}">
                        Cancella
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal-{{ $order->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-3 fw-bolder text-danger" id="exampleModalLabel">Attenzione!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body fs-4">
                        Vuoi veramente cancellare l'ordine di 
                        <span class="">{{ $order->customer_name }} {{ $order->customer_lastname }}?</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <form class="d-inline-block" action="{{ route('admin.orders.destroy', $order) }}" method="POST">
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
            <p>Non ci sono ordini.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection
