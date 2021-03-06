<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Styles -->
        
    </head>
    <body>
        <div class="container">
            <div class="row row-cols-5">
                @forelse($movies as $movie)
                <div class="col box text-center">
                    <h3>{{$movie->title}}</h3> 
                    <div>
                        Original title: {{$movie->original_title}}
                        <p>Rating: {{$movie->vote}}</p>
                        <p>Country: {{$movie->nationality}}</p>
                        <p>Release date: {{$movie->date}}</p>
                    </div>  
                </div>
                @empty
                <p>nothing</p>
                @endforelse        
            </div>  
        </div>   
    </body>
</html>
