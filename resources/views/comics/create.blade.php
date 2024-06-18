@extends('layouts.admin')

@section('title')
    Aggiungi un nuovo fumetto
@endsection

@section('content')
    <div class="container py-4">
        <div class="row d-flex justify-content-center">
            <h3 class="py-3 text-center">Aggiungi un nuovo fumetto</h3>
            <div class="col-6">
                <form method="POST" action="{{ route('comics.store') }}">
                    {{-- csrf token di sicurezza --}}
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" id="title" aria-describedby="title" name="title"
                            value="{{ old('title') }}"
                            class="form-control 
                        @error('title') is-invalid @enderror">
                        @error('title')
                            <div id="title-error" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" aria-describedby="thumb" name="thumb"
                            value="https://">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" value="{{ old('series') }}" name="series"
                            class="form-control 
                    @error('series') is-invalid @enderror">
                        @error('series')
                            <div id="series-error" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="date" value="{{ old('sale_date') }}" name="sale_date"
                            class="form-control 
                    @error('sale_date') is-invalid @enderror">
                        @error('sale_date')
                            <div id="sale_date-error" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3 d-flex flex-column">
                        <label for="type" class="form-label">Tipologia</label>
                        <select class="form-select w-100" id="type" name="type">
                            <option>Scegli...</option>
                            <option @selected(old('type') === 'comic book') value="comic book">comic book</option>
                            <option @selected(old('type') === 'graphic novel') value="graphic novel">graphic novel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" value="{{ old('price') }}" name="price"
                            class="form-control 
                    @error('price') is-invalid @enderror">
                        @error('price')
                            <div id="price-error" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea type="text" class="form-control" id="description" aria-describedby="description" name="description">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Salva</button>
                </form>
            </div>
        </div>

    </div>
@endsection
