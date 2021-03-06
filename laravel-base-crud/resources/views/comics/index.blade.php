@extends('welcome')

@section('page_title', 'comics')

@section('content')
    <a href="{{ route('comics.create') }}">Aggiungi...</a>


    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Thumb</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale date</th>
                <th>Type</th>
            </tr>
        </thead>

        <tbody>
            @foreach($comics as $comic)
                <tr>
                    <td>{{ $comic->title}}</td>
                    <td>{{ $comic->description}}</td>
                    <td> <img src="{{ $comic->thumb}}" alt="comic"></td>
                    <td>{{ $comic->price}}</td>
                    <td>{{ $comic->series}}</td>
                    <td>{{ $comic->sale_date}}</td>
                    <td>{{ $comic->type}}</td>
                    <td>{{ $comic->email}}</td>

                    <td>
                        <a href="{{ route('comics.show', $comic->id ) }}">Dettagli...</a>
                        <a href="{{ route('comics.edit', $comic->id ) }}">Modifica</a>

                        <form action="{{ route('comics.destroy', $comic->id ) }}" method="post">
                            @csrf

                            @method('DELETE')

                            <input type="submit" value="Cancella">
                        </form>

                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection