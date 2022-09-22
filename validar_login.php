<?php
//TRAIGO LA CONEXION DE LA BD
include 'conexion.php';

//RECOJO LOS DATOS DEL LOGIN
$usuario = $_POST[  'usuario'   ];
$contrasena = $_POST[  'contrasena'  ];

//REALIZO LA CONSULTA A LA BD PARA EL USUARIO
$resultado = $bd -> query(  "SELECT * FROM usuarios WHERE usuario = '$usuario'"  );

//EXTRAIGO LOS RESULTADOS DE LA CONSULA
$datos = $resultado -> fetch_assoc();

// COMPARO LA CONTRASEÑA DE LA BD CON LA CONEXION QUE RECIBI EN EL FORMULARIO
if  ( password_verify($contrasena, $datos['contrasena'])){
    //SI LA CONTRASEÑA ES VALIDA ENTONCES
    header('location: admin.php');
} else {
    //SI LA CONTRASEÑA NO ES VALIDA ENTONCES
    echo "Contraseña Incorrecta";
    header("refresh:2;url=login.php");
}
?>