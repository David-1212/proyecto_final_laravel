<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Editar productos</h1>
    <form action="/producto/{{$producto->id}}"method="POST">
        @csrf
        <label for="nombrep">Nombre del producto:</label><br>
        <input type="text" name="nombrep" id= "nombrep" value= "">
        @error('nombrep')
            <i>{{$message}}</i>
        @enderror
        <br>

        <label for="precio">Precio del producto:</label><br>
        <input type="text" name="precio" id= "precio">
        <br>

        <label for="descripcion">Descripcion del producto:</label><br>
        <textarea name="descripcion" id="descripcion" cols="40" rows="10"></textarea>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>