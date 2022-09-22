<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

    <h1>Registro</h1>

    <form action = "insertar_datos.php" method = "post">
        <label for = "usuario">Usuario :</usuario>    
        <input name = "usuario" id = "usuario" type = "text">
        <br>
        <br>
        <label for = "contrasena">Contraseña :</psw>    
        <input name = "contrasena" id = "contrasena" type = "password">
        <br>
        <br>
        <input type = "submit" value = "registrar">
    </form>
    
</body>
</html>