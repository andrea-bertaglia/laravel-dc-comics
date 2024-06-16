@extends('layouts.admin')

@section('title')
    Aggiungi nuovo
@endsection

@section('content')
    <div class="container py-4">
        <div class="row d-flex justify-content-center">
            <h3 class="py-3 text-center">Aggiungi un nuovo fumetto</h3>
            <div class="col-6">
                <form method="POST" action="{{ route('admin.store') }}">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" aria-describedby="thumb" name="thumb"
                            value="https://">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" aria-describedby="series" name="series">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="date" class="form-control" id="sale_date" aria-describedby="sale_date"
                            name="sale_date">
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" id="type" name="type">
                            <option selected>Scegli...</option>
                            <option value="1">comic book</option>
                            <option value="2">graphic novel</option>
                        </select>
                        <label class="input-group-text" for="type">Opzioni</label>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" aria-describedby="price" name="price"
                            value="$">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea type="text" class="form-control" id="description" aria-describedby="description" name="description">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>

    </div>
@endsection
