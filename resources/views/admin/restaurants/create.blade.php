@extends('layouts.admin')

@section('title', 'Crea nuovo ristorante')

@section('main-content')

<section class="container">

    <div class="col-12">
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
    </div>

    <div class="col-12">
        <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="company_name" class="form-label" class="form-control">
                    Nome Ristorante * :
                </label>
                <input type="text" name="company_name" id="company_name" class="form-control" required minlength="2">
                <div class="invalid-feedback">Il nome del ristorante è obbligatorio e deve contenere almeno 2 caratteri.</div>
            </div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Indirizzo * :</label>
                <input type="text" name="address" id="address" class="form-control" required pattern="[A-Za-z0-9\s,]{6,}" required minlength="7">
                <div class="invalid-feedback">Inserisci un indirizzo valido.</div>
            </div>

            <div class="mb-3">
                <label for="vat_no" class="form-label">Partita Iva * :</label>
                <input type="text" name="vat_no" id="vat_no" class="form-control" required minlength="8" maxlength="8">
                <div class="invalid-feedback">La Partita Iva deve avere 8 numeri.</div>
            </div>

            <div class="mb-3">
                <label for="img_url" class="form-label">Foto ristorante * :</label>
                <input type="file" name="img_url" id="img_url" class="form-control">
            </div>

            <div class="mb-3">
                <div class="mb-3 input-group">
                    <div>
                        @foreach ($categories as $category )
                            <input class="form-check-input" type="checkbox" name="categories[]" id="categories-{{ $category->id }}" value="{{ $category->id }}"
                            {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                            <label for="categories-{{ $category->id }}">
                                {{ $category->name }}
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="invalid-feedback" id="categoryError">Seleziona almeno una categoria.</div>
            </div>

            <button type="submit" class="btn btn-primary">Crea ristorante</button>
        </form>
    </div>
</section>

<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        // Seleziona tutti gli input checkbox con name="categories[]"
        const checkboxes = document.querySelectorAll('input[name="categories[]"]');
        let isChecked = false;
        
        // Controlla se almeno uno dei checkbox è selezionato
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                isChecked = true;
                return;
            }
        });
        
        // Se nessun checkbox è stato selezionato, mostra un messaggio di errore e impedisce l'invio del form
        if (!isChecked) {
            document.getElementById('categoryError').style.display = 'block';
            event.preventDefault(); // Impedisce l'invio del form
        }
    });
    </script>

@endsection
