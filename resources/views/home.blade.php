<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
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
    </style>
    <title>Home Laravel</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href=""> {{ $home }}</a></li>
                @foreach ($other_voices as $voice)
                    <li><a href="">{{ $voice }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>
</body>
</html>