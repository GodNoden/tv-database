<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <title>Landing Page</title>
</head>

<body>
    <div class="container">
        <h2 class="title">The TV Database</h2>
        <div class="logout-btn">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link class="logout-link" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </div>
        <div class="super class">
            <div class="section">
                <a href="/casts">
                    <img src="/images/cast.jpg" alt="Casts" class="icon">
                    <span class="text">Casts</span>
                </a>
            </div>
            <div class="section">
                <a href="/series">
                    <img src="/images/series.jpg" alt="Series" class="icon">
                    <span class="text">Series</span>
                </a>
            </div>
        </div>
    </div>
</body>

</html>