@extends('layout.welcome')
@section('page_title', 'Creazione di un nuovo comic')
@section('content')

<form action="{{ route ('comics.store') }}" method="post">
@csrf

<label for="title"></label>
<input type="text" name="title" id="title">

<label for="description"></label>
<textarea name="description" id="description" cols="30" rows="10"></textarea>

<label for="thumb"></label>
<input type="text" name="thumb" id="thumb">


<label for="price"></label>
<input type="text" name="price" id="price">

<label for="series"></label>
<input type="text" name="series" id="series">

<label for="sale_date"></label>
<input type="date" name="sale_date" id="sale_date">

<label for="type"></label>
<input type="text" name="type" id="type">

<input type="submit" value="Invia">
</form>