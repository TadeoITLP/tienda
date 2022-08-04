<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1>Tienda TEC</h1>
    </header>
    <nav>
        <ul>
            <li>
            </li>
        </ul>
    </nav>
    <section id="banner">
        <img src="banner_default.png"/>
    </section>
    <section id="oferas">
        <img src="oferta1.jgp"/>
    </section>
    <section id="productosNuevos">
        @foreach ($productosNuevos as $producto)
            <article>
                <img src="{{$producto->foto}}"/><br>
                <p>{{$producto->nombre}}<br>
                $ {{$producto->precio}}</p>
            </article>
        @endforeach
    </section>
    <section id="masVendidos">
        <article>
            <img src="producto1.jpg"/><br>
            <p>Producto 1<br>
            $ 1,000.00</p>
        </article>
        <article>
            <img src="producto1.jpg"/><br>
            <p>Producto 2<br>
            $ 1,000.00</p>
        </article>
        <article>
            <img src="producto1.jpg"/><br>
            <p>Producto 3<br>
            $ 1,000.00</p>
        </article>
        <article>
            <img src="producto1.jpg"/><br>
            <p>Producto 4<br>
            $ 1,000.00</p>
        </article>
    </section>
    <section id="productosCategoria">
        <article>
            <img src="producto1.jpg"/><br>
            <p>Producto 1<br>
            $ 1,000.00</p>
        </article>
        <article>
            <img src="producto1.jpg"/><br>
            <p>Producto 2<br>
            $ 1,000.00</p>
        </article>
        <article>
            <img src="producto1.jpg"/><br>
            <p>Producto 3<br>
            $ 1,000.00</p>
        </article>
        <article>
            <img src="producto1.jpg"/><br>
            <p>Producto 4<br>
            $ 1,000.00</p>
        </article>
    </section>
    <footer>
        <p>Direccion: Blvd. Forjadores de BCS. 4720 Macro Aula<br>
        Tel: l12315415523<br>
        Email:</p>
    </footer>
</body>
</html>
