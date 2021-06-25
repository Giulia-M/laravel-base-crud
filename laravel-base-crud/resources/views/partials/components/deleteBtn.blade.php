<form action="{{ route('comics.destroy', $comic->id ) }}" method="post">
@csrf

@method('DELETE')

<input type="submit" value="Cancella">
</form>