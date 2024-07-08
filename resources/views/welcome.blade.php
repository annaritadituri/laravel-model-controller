<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>

<body>

    <h1 class="text-center my-5">Movies collection</h1>

    <div class="container my-5">
        <div class="row g-5">
            @foreach ($movies as $movie)
                <div class="col-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <p class="card-text">Original title: {{ $movie['original_title'] }}</p>
                            <p class="card-text">Nationality: {{ $movie['nationality'] }}</p>
                            <p class="card-text">Date: {{ $movie['date'] }}</p>
                            <p class="card-text">Vote: {{ $movie['vote'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
</body>

</html>
