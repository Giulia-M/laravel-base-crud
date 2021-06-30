@extends('welcome')
@section('page_title', 'Creazione di un nuovo comic')
@section('content')
<a href="{{ route('comics.index')}}">Torna alla home</a>

<form action="{{ route ('comics.store') }}" method="post">
@csrf

<label for="title">Title</label>
<input type="text" name="title" id="title">

<label for="description">Description</label>
<textarea name="description" id="description" cols="30" rows="10"></textarea>

<label for="thumb">Thumb</label>
<input type="text" name="thumb" id="thumb">


<label for="price">Price</label>
<input type="text" name="price" id="price">

<label for="series">Series</label>
<input type="text" name="series" id="series">

<label for="sale_date">sale_date</label>
<input type="date" name="sale_date" id="sale_date">

<label for="type">Type</label>
<input type="text" name="type" id="type">

<input type="submit" value="Invia">
</form>