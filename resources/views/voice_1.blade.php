<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        header {
            display: flex;
            padding: 0 50px;
            justify-content: center;
            align-items: center;
        }

        ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
        }

        li > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
        }

        .active {
            color: red;
        }

        h1 {
            text-align: center;
        }
    </style>
    <title>{{ Route::currentRouteName() }}</title>
</head>
<body>
    <header>
        <h2>Hello World</h2>
        <nav>
            <ul>
                <li><a href="{{ route("Home") }}"> {{ $home }}</a></li>
                @foreach ($other_voices as $index => $voice)
                    @php $route_value = "voice_".$index @endphp
                    <li><a href="{{ route("Voce ".($index+1)) }}" class="{{($index===0)?"active":""}}">{{ $voice }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>
    <h1>Sei sulla rotta {{ Route::currentRouteName() }}</h1>
</body>
</html>
</html>