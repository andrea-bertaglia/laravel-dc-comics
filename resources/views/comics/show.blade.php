@extends('layouts.admin')

@section('title')
    Dettaglio Comic
@endsection

@section('content')
    <div class="container">
        <div class="d-flex justify-content-end pt-4 pb-2 gap-3">

            {{-- Bottone 'successivo' --}}
            @if ($comics->id > 1)
                <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comics->id - 1]) }}"><i
                        class="fa-solid fa-circle-arrow-left"></i> Precedente</a>
            @endif
            {{-- /Bottone 'successivo' --}}

            {{-- Bottone 'precedente' --}}
            @if ($comics->id < $comics->count())
                <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comics->id + 1]) }}">Successivo <i
                        class="fa-solid fa-circle-arrow-right"></i></a>
            @endif
            {{-- Bottone 'successivo' --}}

        </div>
        <h1 class="text-center border-bottom border-tertiary py-2 mt-3">{{ $comics->title }}</h1>
        <div class="row py-4">
            <div class="col-4">
                <img class="img-fluid w-100" src="{{ $comics->thumb }}" alt="">
            </div>
            <div class="col-8">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span class="fw-bold">Serie: </span>
                        <span>{{ $comics->series }}</span>
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Data di uscita: </span>
                        <span>{{ $comics->sale_date }}</span>
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Tipo: </span>
                        <span>{{ $comics->type }}</span>
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Descrizione: </span>
                        <span>{{ $comics->description }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
