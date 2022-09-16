<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Series</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">


</head>

<body>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Number of Seasons</th>
                <th scope="col">Premiere Date</th>
                <th scope="col">Genre</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($series as $serie)
                <tr>
                    <th scope="row">{{ $serie->id }}</th>
                    <td><a href={{ '/series/' . $serie->id }}>{{ $serie->title }}</a></td>
                    <td>{{ $serie->number_of_seasons }}</td>
                    <td>{{ $serie->premiere_date }}</td>
                    <td>{{ $serie->genre }}</td>
                    <td>
                        <a class="btn btn-outline-info" href={{ '/edit/' . $serie->id . '/serie/' }}>Edit</a>
                    </td>
                    <td>
                        <form method="POST" action={{ '/delete/serie/' . $serie->id }}>
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-primary" href="/create/serie" role="button">Crear</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

</body>

</html>
