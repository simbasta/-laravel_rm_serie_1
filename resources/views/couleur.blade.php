<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$c}}</h1>

    <ul>
        {!!$c == 'rouge' ? '<li><b>rouge</b></li>' : '<li>rouge</li>'!!}
        {!!$c == 'orange' ? '<li><b>orange</b></li>' : '<li>orange</li>'!!}
        {!!$c == 'vert' ? '<li><b>vert</b></li>' : '<li>vert</li>'!!}
        {!!$c == 'noir' ? '<li><b>noir</b></li>' : '<li>noir</li>'!!}
    </ul> 
</body>
</html>