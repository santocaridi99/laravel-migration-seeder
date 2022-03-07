<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($data as $travel)
        <h1>{{$travel->id}}.+{{$travel->package}}</h1>
        <p>{{$travel->type}}</p>
        <p>{{$travel->destination}}</p>
        <p>{{$travel->price}}$</p>
    @endforeach
</body>
</html>