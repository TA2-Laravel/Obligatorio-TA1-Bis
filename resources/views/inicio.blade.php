<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($posts as $p)
        Id: {{ $p -> id}} <br />
        Titulo: {{ $p -> titulo}} <br />
        Autor: {{ $p -> autor}} <br />
        Fecha: {{ $p -> created_at}} <br /> <br />
        {{ $p -> cuerpo }} <br /> <br />

    @endforeach
</body>
</html>