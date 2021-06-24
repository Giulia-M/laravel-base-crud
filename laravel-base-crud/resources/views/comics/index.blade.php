@extends('layout.welcome')

@section('page_title', 'comics')

@section('content')
    <a href="{{ route('comics.create') }}">Aggiungi ...</a>
    
    

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
                    <td>{{ $comic->thumb}}</td>
                    <td>{{ $comic->price}}</td>
                    <td>{{ $comic->series}}</td>
                    <td>{{ $comic->sale_date}}</td>
                    <td>{{ $comic->type}}</td>
                    <td>
                        <a href="{{ route('comics.show', $comic->id ) }}">Dettagli...</a>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection