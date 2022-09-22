<?php
//TRAIGO LA CONEXION DE LA BD
include 'conexion.php';

//RECOJO LOS DATOS DEL FORMULARIO CIFRANDO LA CONTRASEÑA
$usuario = $_POST[  'usuario'   ];
$contrasena = password_hash($_POST[   'contrasena'  ], PASSWORD_DEFAULT);

//REALIZO LA CONSULTA A LA BD PARA EL USUARIO
$sql = "INSERT INTO usuarios VALUES (null, '$usuario' , '$contrasena')";

// EJECUTO LA CONSULTA
if  ( $bd -> query( $sql )  )   {
    //SI LA CONTRASEÑA ES VALIDA ENTONCES
    echo "USUARIO REGISTRADO CORRECTAMENTE";
} else {
    //ERROR EN EL REGISTRO
    echo "Error: <br>" . $conn->error;
}
?>
<br>
<a href = "login.php">LOGIN</a>