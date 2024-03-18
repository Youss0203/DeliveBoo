@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
    <div class="container ">
        <div class="row pe-0">
            <div class="col-12">
                <div>
                    <section class="col-12 col-md-6 offset-md-3">
                        <div class="card custom_restaurant-card" style="width: 100%">
                            <div>
                                @if (str_starts_with($restaurant->img_url, 'http'))
                                    <img class="img-fluid rounded-top my_dash_img" src="{{ $restaurant->img_url }}"
                                        alt="">
                                @else
                                    <img class="img-fluid rounded-top"
                                        src="{{ asset('storage') . '/' . $restaurant->img_url }}" alt="">
                                @endif
                            </div>
                            <div class="card-body d-flex align-items-center flex-column mb-3">
                                <h1 class="mb-3">{{ $restaurant->company_name }}</h1>
                                <p class="card-text">{{ $restaurant->address }}</p>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <a class="pe-5" href="{{ route('admin.dishes.create') }}">
                                    <button class="btn btn-success">
                                        Aggiungi Piatto
                                    </button>
                                </a>
                                <a href="{{ route('admin.dishes.index') }}">
                                    <button class="prova btn btn-info">
                                        Vedi i tuoi piatti
                                    </button>
                                </a>
                            </div>
                        </div>
                    </section>

                    {{-- <section class="col-xs-12 col-md-4">
                <div class="d-flex justify-content-center">
                    <a class="px-5 mb-2" href="{{ route('admin.dishes.create') }}">
                        <button class="btn btn-primary" style="width: 8rem">
                            Aggiungi Piatto
                        </button>
                    </a>
                    <a href="{{ route('admin.dishes.index') }}">
                        <button class="btn btn-primary" style="width: 8rem">
                            Vedi i tuoi piatti
                        </button>
                    </a>
                </div>
            </section> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

