@extends('layouts.admin')

@section('title')
    My Dashboard
@endsection

@php
    use Carbon\Carbon;
@endphp

@section('content')
    <div class="container">

        {{-- mostro il messaggio di conferma cancellazione --}}
        @if (session('message'))
            <div class="alert alert-success my-4">
                {!! session('message') !!}
            </div>
        @endif

        <h1 class="text-center py-4 fw-bold">My DcComics Dashboard</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data di uscita</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic['id'] }}</th>
                        <td>{{ $comic['title'] }}</td>
                        <td>{{ $comic['price'] }}</td>
                        <td>{{ $comic['series'] }}</td>
                        <td>{{ Carbon::parse($comic['sale_date'])->format('d/m/Y') }}</td>
                        <td>{{ $comic['type'] }}</td>
                        <td class="d-flex justify-content-between">
                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary me-2"
                                class="btn btn-primary me-2"><i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-success me-2"><i
                                    class="fa-solid fa-pencil"></i></a>

                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <!-- Button trigger modal -->
                                <button role="button" class="btn btn-danger delete-btn" data-bs-toggle="modal"
                                    data-bs-target="delete-modal" data-comic-title="{{ $comic['title'] }}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- modale di conferma cancellazione item --}}
    @include('partials.delete-modal')
@endsection
