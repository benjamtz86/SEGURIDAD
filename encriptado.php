<?php
    echo md5 ("hola mundo :D");

    echo "<br>";

    echo sha1("hola mundo :D");

    echo "<br>";

    // print_r(hash_algos());

    $saludo = "hola mundo :D";

    echo hash('sha3-512', $saludo);
    
    echo "<br>";

    // foreach ( hash_algos() as $algoritmo ) {
    //     echo $algoritmo. ': ' . hash( $algoritmo, $saludo) . '<br>';
    // }

    $encriptada = password_hash($saludo, PASSWORD_DEFAULT, [ 'cost' => 10]);
    //lo del cost 20 no se hace porque se encripta 20 veces y tarda un chongo

    if(password_verify("hola mundo :D", $encriptada)){
        // sino se escribe el hola mundo :D igual, sale contraseña incorrecta
        echo "acceso correcto :D";
    }else{
        echo "no es tu contraseña";
    };


?>