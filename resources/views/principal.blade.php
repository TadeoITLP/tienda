<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Tienda TEC</h1><br>
        @if ($usuario)
            Bienvenido: {{$usuario->nombre}}
        @endif
    </header>
    <nav>
        <ul>
            <li>
            </li>
        </ul>
    </nav>
    <section id="banner">
        <img src="/img/banner_default.png"/>
    </section>
    <section id="oferas">
        <img src="oferta1.jgp"/>
    </section>
    <section id="ProductosMasNuevos">
        @foreach ($productosMasNuevos as $producto)
            <article>
                <!--<img src="{{$producto->foto}}"/><br>-->
                <img src="img\galleta_animalitos.jpg"><br>
                <p>{{$producto->nombre}}<br>
                $ {{$producto->precio}}</p>
            </article>
        @endforeach
    </section>
    <section id="ProductosMasVendidos">
        @foreach ($productosMasVendidos as $producto)
            <article>
                <!--<img src="{{$producto->foto}}"/><br>-->
                <img src="img\galleta_animalitos.jpg"><br>
                <p>{{$producto->nombre}}<br>
                $ {{$producto->precio}}</p>
            </article>
        @endforeach
    </section>
    <section id="ProductosPorCategoria">
        @foreach ($productosPorCategoria as $producto)
            <article>
                <!--<img src="{{$producto->foto}}"/><br>-->
                <img src="img\galleta_animalitos.jpg"><br>
                <p>{{$producto->nombre}}<br>
                $ {{$producto->precio}}</p>
            </article>
        @endforeach
    </section>
    <footer>
        <p>Direccion: Blvd. Forjadores de BCS. 4720 Macro Aula<br>
        Tel: l12315415523<br>
        Email:</p>
    </footer>
</body>
</html>
