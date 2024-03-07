@extends('layouts.admin')

@section('title', 'Create new Project')

@section('main-content')




<section class="container">
    <div class="col-12">


        <form action="{{ route('admin.dishes.store') }}" method="POST">
            @csrf

            <div class="mb-3 input-group">
                <label for="name_project" class="input-group-text">Name:</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
            </div>


            {{-- <div class="mb-3 input-group">
                <label for="type_id" class="input-group-text">Tipo:</label>
                <select class="form-select" type="text" name="restaurant_id" id="restaurant_id" >
                    @foreach ($restaurants as $restaurant)
                        <option value="{{ $restaurant->id }}"
                            {{ $restaurant->id == old('category_id', $dish->$restaurant) ? 'selected' : '' }}>
                                {{ $restaurant->tipo }}
                        </option>
                    @endforeach
                </select>
            </div> --}}










            <div class="mb-3 input-group">
                <label for="author" class="input-group-text">Ingredients:</label>
                <input class="form-control" type="text" name="ingredients" id="ingredients" value="{{ old('ingredients') }}">
            </div>

            <div class="mb-3 input-group">
                <label for="date" class="input-group-text">Price:</label>
                <input class="form-control" type="text" name="price" id="price" value="{{ old('price') }}">
            </div>

            <div class="mb-3 input-group">
                <label for="image" class="input-group-text">Description</label>
                <input class="form-control" type="text" name="description" id="description" value="{{ old('description') }}">
            </div>

            <div class="mb-3 input-group">
                <label for="linguaggio_usato" class="input-group-text">Image url:</label>
                <input class="form-control" type="text" name="img_url" id="img_url" value="{{ old('img_url') }}">
            </div>
            <div class="mb-3 input-group">
                <label for="linguaggio_usato" class="input-group-text">Visibility:</label>
                <input class="form-control" type="text" name="visibility" id="ivisibility" value="{{ old('visibility') }}">
            </div>

            <div class="mb-3  input-group">
                    <button class="btn btn-sm btn-success mx-1">
                        Create
                    </button>
            </div>
            <div class="mb-3  input-group">
                <button type="reset" class="btn btn-xl btn-warning">
                    Elimina nuovo progetto
                </button>
            </div>
        
        
        </form>
        

@endsection