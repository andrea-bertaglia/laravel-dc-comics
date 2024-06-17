@extends('layouts.admin')

@section('title')
    My Dashboard
@endsection

@php
    use Carbon\Carbon;
@endphp

@section('content')
    <div class="container">
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
                        <td>{{ Carbon::parse($comic['sale_date'])->format('d-m-Y') }}</td>
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
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                            </form>

                            <!-- Button trigger modal -->
                            {{-- <button role="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fas fa-trash"></i>
                            </button> --}}
                            {{-- modale di conferma cancellazione item --}}
                            {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma cancellazione</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Vuoi cancellare il fumetto?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Chiudi</button>
                                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Cancella</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
