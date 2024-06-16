@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center border border-tertiary py-2 mt-3">{{ $comicArray->title }}</h1>
        <div class="row py-4">
            <div class="col-4">
                <img src="{{ $comicArray->thumb }}" alt="">
            </div>
            <div class="col-8">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span class="fw-bold">Serie: </span>
                        <span>{{ $comicArray->series }}</span>
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Data di uscita: </span>
                        <span>{{ $comicArray->sale_date }}</span>
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Tipo: </span>
                        <span>{{ $comicArray->type }}</span>
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Descrizione: </span>
                        <span>{{ $comicArray->description }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
