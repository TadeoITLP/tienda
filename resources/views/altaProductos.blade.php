<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name="formulario" method="post" action="/altaProductos/guardar">
        @csrf
        Nombre:<input type="text" name="nombre"/><br>
        Descripcion:<input type="text" name="descripcion"/><br>
        Precio:<input type="number" name="precio"/><br>
        Cantidad:<input type="number" name="cantidad"/><br>
        foto:<input type="file" name="foto"/><br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>
