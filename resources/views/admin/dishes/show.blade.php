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
                {{ $dish->desription }}
            </p>
            <div class="p-5">
                <p>
                    <img src="{{ $dish->img_url }}" alt="">
                </p>
            </div>
                <button class="btn btn-sm btn-success">
                    Edit
                </button>
                <button class="btn btn-sm btn-warning">
                    Delete
                </button>
            </p>
        </tr>
        </div>
    </div>
</div>
@endsection