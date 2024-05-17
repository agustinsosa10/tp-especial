<?php
    include "funciones.php";
    $ar_letras = array();
    $MAX = 100;

    for( $i = 0 ; $i < $MAX ; $i++) {
        $ar_letras[$i] = letra_random("a", "z");
    }

    var_dump($ar_letras);

    $letras = 'a';

    if(letraEnArreglo($ar_letras, $letras)) {
        echo " el caracter se encuentra en el arreglo";
    }else {
        echo "el caracter no esta en el arreglo";
    }

    $contador = contador($ar_letras, $letras);
    echo "la cantidad de veces que se repite son: ".$contador;

    contar_letras($ar_letras);
    porcentaje_de_letras();
    var_dump($letras_contadas)
    

?>