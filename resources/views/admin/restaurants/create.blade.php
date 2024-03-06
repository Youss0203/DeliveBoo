@extends('layouts.admin')

@section('title', 'Crea nuovo ristorante')

@section('main-content')




<section class="container">
    <div class="col-12">


        <form action="{{ route('admin.restaurants.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="company_name"class="form-label">
                    Nome Ristorante
                </label>
                <input type="string" name="company_name" id="company_name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="description"class="form-label">Indirizzo:</label>
                <input type="string" name="address" id="address" class="form-control">
            </div>

            <div class="mb-3">
                <label for="vat_no"class="form-label">Partita Iva</label>
                <input type="integer" name="vat_no" id="vat_no" class="form-control">
            </div>

            <div class="mb-3">
                <label for="img_url"class="form-label">Foto ristorante</label>
                <input type="file" name="img_url" id="img_url" class="form-control">
            </div>

            <div class="mb-3">

                <div class="mb-3 input-group">
                    <div>
                        @foreach ($categories as $category )
                        
                            <input class="form-check-input" type="checkbox" name="categories[]" id="categories-{{ $category->id }}" value="{{ $category->id }}"
                            {{ in_array( $category->id, old('categories', $restaurants->categories->pluck('id')->toArray())) ? 'checked' : '' }}>
                            <label for="categories-{{ $category->id }}">
                                {{ $category->category }}
                            </label>
                            
                        @endforeach


                       
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Crea ristorante</button>

        
        </form>
        
    </div>
@endsection