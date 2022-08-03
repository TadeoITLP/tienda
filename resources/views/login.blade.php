<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name="login" method="post" action="/login/entrar">
        @csrf
        Usuario:<input type="text" name="usuario"><br/>
        Password:<input type="password" name="password"><br/>
        <input type="submit" value="entrar">
    </form>
</body>
</html>
