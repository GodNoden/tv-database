<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Series</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/series-casts.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="title">Series</h2>
            </div>
        </div>

        <div class="row">
            <div class="back-btn">
                <a href="/" class="back-link">← Volver</a>
            </div>

            @foreach ($series as $index => $serie)
            <div class="col-md-3 mb-4{{ $index < 4 ? ' mt-4' : '' }}">
                <div class="card d-flex flex-column align-items-center" style="width: 18rem;">
                    <img src={{ $serie->picture }} class="card-img" />
                    <div class="card-body text-center">
                        <a class="serie-title" href={{ '/series/' . $serie->id}} class="card-title">{{ $serie->id }} {{ $serie->title }} </a>
                        <p class="card-text">Number of seasons: {{$serie->number_of_seasons}}</p>
                        <p class="card-text">Premiere date: {{ $serie->premiere_date }}</p>
                        <p class="card-text">Genre: {{ $serie->genre }}</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-outline-info" href={{ '/edit/' . $serie->id . '/serie/' }}>Edit</a>
                            <form method="POST" action={{ '/delete/serie/' . $serie->id }}>
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row justify-content-center">
            <a class="btn btn-primary" href="/create/serie" role="button">Crear</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
