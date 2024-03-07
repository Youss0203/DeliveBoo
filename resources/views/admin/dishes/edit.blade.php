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
        <div class="col-7">
            

            <form action="{{ route('admin.dishes.update', $dish)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 input-group">
                    <label for="title" class="input-group-text">Name:</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ old('nome', $dish->name)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="author" class="input-group-text">Ingredients:</label>
                    <input class="form-control" type="text" name="ingredients" id="ingredients" value="{{ old('ingredients', $dish->ingredients)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="date" class="input-group-text">Price:</label>
                    <input class="form-control" type="text" name="price" id="price" value="{{ old('price', $dish->price)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="post_image" class="input-group-text">Description:</label>
                    <input class="form-control" type="text" name="description" id="description" value="{{ old('description', $dish->description)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="date" class="input-group-text">Image url:</label>
                    <input class="form-control" type="text" name="img_url" id="img_url" value="{{ old('img_url', $dish->img_url)}}">
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="visibility" id="visibility" @checked(old('visibility', $dish->visibility))>
                        <label class="form-check-label" for="visibility">
                            Visible
                        </label>
                    </div>
                </div>
                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-xl btn-primary">
                        Update post
                    </button>
                    <button type="reset" class="btn btn-xl btn-warning">
                        Reset all fields
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection