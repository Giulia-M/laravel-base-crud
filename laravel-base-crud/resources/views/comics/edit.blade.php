@extends('welcome')
@section('page_title', 'Modifica')

@section('content')
    <a href="{{ route('comics.index')}}">Torna alla home</a>

    <form  method="post">
    @csrf

    @method('put')
    <label for="title"></label>
    <input type="text" name="title" id="title" value="{{ $comic->title}}">

    <label for="description"></label>
    <textarea name="description" id="description" cols="30" rows="10" value="{{ $comic->description}}"></textarea>

    <label for="thumb"></label>
    <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb}}">


    <label for="price"></label>
    <input type="text" name="price" id="price" value="{{ $comic->price}}">

    <label for="series"></label>
    <input type="text" name="series" id="series" value="{{ $comic->series}}">

    <label for="sale_date"></label>
    <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date}}">

    <label for="type"></label>
    <input type="text" name="type" id="type" value="{{ $comic->type}}">

    {{-- <input type="submit" value="Salva"> --}}
    </form>
@endsection