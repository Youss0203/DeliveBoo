@extends('layouts.admin')

@section('title', 'Create new Project')

@section('main-content')

 
<section class="container-create d-flex justify-content-center" style="background-color: #ffbb79; border-radius:20px;">
    <div class="col-8 col-md-10 col-sm-12">
        <div class="col-12">
            {{-- Errors alert --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
        </div>

        <form class="form-create mt-5" action="{{ route('admin.dishes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3 input-group border-orange">
                <label for="name_project" class="input-group-text border-orange">Nome piatto * :</label>
                <input class="form-control border-orange" type="text" name="name" id="name" value="{{ old('name') }}" required minlength="2">
                <div class="invalid-feedback">Il nome del piatto è obbligatorio e deve contenere almeno 2 caratteri.</div>
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


            
            <div class="mb-3 input-group mt-2">
                <label for="author" class="input-group-text border-orange">Ingredienti * :</label>
                <input class="form-control border-orange" type="text" name="ingredients" id="ingredients" required minlength="10" value="{{ old('ingredients') }}">
                <div class="invalid-feedback">Gli ingredienti del piatto sono obbligatoria e deve contenere almeno 10 caratteri.</div>
            </div>

            <div class="mb-3 input-group">
                <label for="date" class="input-group-text border-orange">Prezzo in (€) euro * :</label>
                <input class="form-control border-orange"  type="text" name="price" id="price" value="{{ old('price') }}">
            </div>

            <div class="mb-3 input-group">
                <label for="image" class="input-group-text border-orange">Descrizione * :</label>
                <input class="form-control border-orange" type="text" name="description" id="description" required minlength="2" maxlength="500" value="{{ old('description') }}">
                <div class="invalid-feedback">La descrizione è obbligatoria.</div>
            </div>

            <div class="mb-3 input-group">
                <label for="image" class="input-group-text border-orange">Immagine *</label>
                <input class="form-control border-orange" type="file" name="img_url" id="img_url" value="{{ old('img_url') }}">
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input border-orange" type="checkbox" name="visibility" id="visibility" @checked(old('visibility', $dish->visibility))>
                    <label class="form-check-label" for="visibility">
                        Visibile *
                    </label>
                </div>
            </div>

            <div class="mb-3  input-group">
                    <button class="btn btn-sm btn mx-1" style="background-color: #fe7e00;">
                        Aggiungi piatto
                    </button>
            </div>
            <div class="mb-3  input-group">
                <button type="reset" class="btn btn-xl btn-danger">
                    Pulisci form
                </button>
            </div>
        </form>
@endsection