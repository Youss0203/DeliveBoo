@extends('layouts.admin')

@section('title', 'Creating a new post')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
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
        <div class="col-7 sfondo-orange" style="background-color: #ffbb79; border-radius:20px;">
            

            <form action="{{ route('admin.dishes.update', $dish)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3 input-group mt-5">
                    <label for="title" class="input-group-text border-orange">Nome * :</label>
                    <input class="form-control border-orange" type="text" name="name" id="name" value="{{ old('nome', $dish->name)}}" required minlength="2">
                    <div class="invalid-feedback">Il nome del piatto è obbligatorio e deve contenere almeno 2 caratteri.</div>
                </div>

                <div class="mb-3 input-group">
                    <label for="author" class="input-group-text border-orange">Ingredienti * :</label>
                    <input class="form-control border-orange" type="text" name="ingredients" id="ingredients" value="{{ old('ingredients', $dish->ingredients)}}" required minlength="10">
                    <div class="invalid-feedback">Gli ingredienti del piatto sono obbligatoria e deve contenere almeno 10 caratteri.</div>
                </div>

                <div class="mb-3 input-group">
                    <label for="date" class="input-group-text border-orange">Prezzo in (€) euro * :</label>
                    <input class="form-control border-orange" type="text" name="price" id="price" value="{{ old('price', $dish->price)}}">
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 input-group">
                    <label for="post_image" class="input-group-text border-orange">Descrizione * :</label>
                    <input class="form-control border-orange" type="text" name="description" id="description" value="{{ old('description', $dish->description)}}" required minlength="2" maxlength="500">
                    <div class="invalid-feedback">La descrizione è obbligatoria.</div>
                </div>

                <div class="mb-3 input-group border-orange">
                    
                    <input class="form-control border-orange" type="file" name="img_url" id="img_url" value="{{ old('img_url') }}">
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="visibility" id="visibility" @checked(old('visibility', $dish->visibility))>
                        <label class="form-check-label" for="visibility">
                            Visibile *
                        </label>
                    </div>
                </div>
                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-xl btn text-white" style="background-color: #fe7e00;">
                        Aggiorna
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection