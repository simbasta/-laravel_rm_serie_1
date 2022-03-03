<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$a + $b}}</h1>
    <h2>{{$b - $a}}</h2>

    @if (is_numeric($a.$b))
    <h1>{{$a + $b}}</h1>
    <h2>{{$b - $a}}</h2>
    @else
        <h1>ERROR</h1>
    @endif
</body>
</html>
