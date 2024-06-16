@extends('layouts.app')

@section('title')
    Home Page
@endsection

@php
    use Carbon\Carbon;
@endphp

@section('content')
    <div class="container">
        <h1 class="text-center py-4 fw-bold">Lista DC Comics</h1>
        <div class="row g-4">
            @foreach ($comics as $comic)
                <div class="col-4">
                    <div class="card h-100 w-100" style="width: 18rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="Copertina di {{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title fw-bold py-2">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <span class="fw-bold">Serie: </span>
                                <span>{{ $comic->series }}</span>
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Data di uscita: </span>
                                <span>{{ Carbon::parse($comic['sale_date'])->format('d-m-Y') }}</span>
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Tipo: </span>
                                <span>{{ $comic->type }}</span>
                            </li>
                        </ul>
                        <div class="card-body">
                            <span class="fw-bold">Prezzo: </span>
                            <span>{{ $comic->price }} $</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
