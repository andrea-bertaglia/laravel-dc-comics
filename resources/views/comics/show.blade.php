@extends('layouts.admin')

@section('title')
    Dettaglio Comic
@endsection

@php
    use Carbon\Carbon;
@endphp

@section('content')
    <div class="container">
        <div class="d-flex justify-content-end pt-4 pb-2 gap-3">

            {{-- Bottone 'precedente' --}}
            @if ($previous)
                <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $previous->id]) }}">
                    <i class="fa-solid fa-circle-arrow-left"></i> Precedente
                </a>
            @else
                <span class="btn btn-outline-secondary disabled"><i class="fa-solid fa-circle-arrow-left"></i>
                    Precedente</span>
            @endif
            {{-- /Bottone 'precedente' --}}

            {{-- Bottone 'successivo' --}}
            @if ($next)
                <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $next->id]) }}">
                    Successivo <i class="fa-solid fa-circle-arrow-right"></i>
                </a>
            @else
                <span class="btn btn-outline-secondary disabled">Successivo <i
                        class="fa-solid fa-circle-arrow-right"></i></span>
            @endif
            {{-- /Bottone 'successivo' --}}

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
                        <span>{{ Carbon::parse($comics['sale_date'])->format('d/m/Y') }}</span>
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Tipo: </span>
                        <span>{{ $comics->type }}</span>
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Descrizione: </span>
                        <span>{{ $comics->description }}</span>
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Prezzo: </span>
                        <span>$ {{ $comics->price }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
