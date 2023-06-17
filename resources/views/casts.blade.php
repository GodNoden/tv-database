<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>casts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/series-casts.css') }}">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="title">Casts</h2>
            </div>

            <div class="back-btn">
                <a href="/" class="back-link">← Volver</a>
            </div>

            @foreach ($casts as $index => $cast)
            <div class="col-md-3 mb-4{{ $index < 4 ? ' mt-4' : '' }}">
                <div class="card" style="width: 18rem;">
                    <img src={{ $cast->picture }} />
                    <div class="card-body">
                        <h5 class="card-title">{{ $cast->name }} {{ $cast->last_name }}</h5>
                        <p class="card-text">Birthday: {{$cast->birthday}}</p>
                        <p class="card-text">Nationality: {{ $cast->nationality }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>