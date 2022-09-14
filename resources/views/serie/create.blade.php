Insert new Serie

<form action="{{ url('/post/serie') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <input type="number" name="number_of_seasons" placeholder="No. of Seasons">
    <input type="date" name="premiere_date" placeholder="Premiere Date">
    <input type="text" name="genre" placeholder="Genre">
    <input type="submit" name="Enviar">
</form>
