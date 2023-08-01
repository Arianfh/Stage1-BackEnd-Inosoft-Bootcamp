<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>
    <h1>{{$subtitle}}</h1>
    <hr>
    @for ($i = 1; $i <= 5; $i++)
        <li>{{$i}}</li>

        @switch ($i % 2 === 1)
            @case(1)
                <p>ini bilangan ganjil</p>
            @case(2)
                <p>ini bilang genap</p>
                @break
        @endswitch
    @endfor
</body>
</html>