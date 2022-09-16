Edit serie
<form action="{{ url('/edit/serie/' . $serie->id) }}" method="POST">
    @csrf
    @method('put')
    <input type="text" name="title" placeholder="Title" value="{{ $serie->title }}">
    <input type="number" name="number_of_seasons" placeholder="No. of Seasons" value="{{ $serie->number_of_seasons }}">
    <input type="date" name="premiere_date" placeholder="Premiere Date" value="{{ $serie->premiere_date }}">
    <input type="text" name="genre" placeholder="Genre" value="{{ $serie->genre }}">
    <input type="submit">
</form>
