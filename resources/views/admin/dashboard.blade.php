@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center py-4">My DcComics Dashboard</h1>

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
                @foreach ($comicArray as $comic)
                    <tr>
                        <th scope="row">{{ $comic['id'] }}</th>
                        <td>{{ $comic['title'] }}</td>
                        <td>{{ $comic['price'] }}</td>
                        <td>{{ $comic['series'] }}</td>
                        <td>{{ $comic['sale_date'] }}</td>
                        <td>{{ $comic['type'] }}</td>
                        <td>
                            <a href="{{ route('admin.show', ['admin' => $comic->id]) }}" class="btn btn-primary me-2"
                                class="btn btn-primary me-2"><i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="" class="btn btn-outline-success me-2"><i class="fas fa-pencil"></i></a>
                            <a href="" class="btn btn-outline-danger me-2" disabled><i class="fas fa-trash"></i></a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
