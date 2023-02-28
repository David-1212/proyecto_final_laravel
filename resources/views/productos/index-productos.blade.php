<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <h2>Listado de productos</h2>
    <a href="/producto/create">Agregar Producto</a><br>
    <ul>

        @foreach($productos as $m)
            <li>{{$m->nombre_producto}}</li>
            <a href="/producto/{{ $m -> id }}">Ver detalle</a>
            <a href="/producto/{{ $m -> id }}/edit">Editar</a>
        @endforeach
    </ul>
</body>
</html> 