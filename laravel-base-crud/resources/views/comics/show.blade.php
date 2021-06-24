@extends('layout.welcome')
@section('page_title', 'Dettagli utente')

@section('content')

<a href="{{ route('comics.index')}}">Torna alla home</a>

<ul>
    <li>Title {{ $comic->title}}</li>
    <li>description {{ $comic->description}}</li>
    <li>Thumb {{ $comic->thumb}}</li>
    <li>Price {{ $comic->price}}</li>
    <li>Series {{ $comic->series}}</li>
    <li>Date {{ $comic->sale_date}}</li>
    <li>Type {{ $comic->type}}</li>
</ul>

<a href="{{ route ('comics.create' ) }}">Aggiungi</a>

@endsection