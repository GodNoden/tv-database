<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShowSeriesTable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
</head>

<body>

    <h1>{{ $serie->title }}</h1>
    <h3>CAST:</h3>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Birthday</th>
                <th scope="col">Nationality</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>{{ $serie->casts[0]->name }}</td>
                <td>{{ $serie->casts[0]->last_name }}</td>
                <td>{{ $serie->casts[0]->birthday }}</td>
                <td>{{ $serie->casts[0]->nationality }}</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>{{ $serie->casts[1]->name }}</td>
                <td>{{ $serie->casts[1]->last_name }}</td>
                <td>{{ $serie->casts[1]->birthday }}</td>
                <td>{{ $serie->casts[1]->nationality }}</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>{{ $serie->casts[2]->name }}</td>
                <td>{{ $serie->casts[2]->last_name }}</td>
                <td>{{ $serie->casts[2]->birthday }}</td>
                <td>{{ $serie->casts[2]->nationality }}</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>{{ $serie->casts[3]->name }}</td>
                <td>{{ $serie->casts[3]->last_name }}</td>
                <td>{{ $serie->casts[3]->birthday }}</td>
                <td>{{ $serie->casts[3]->nationality }}</td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
