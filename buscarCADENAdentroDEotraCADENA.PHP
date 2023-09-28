<?php
    $cadena = "Aprendiendo a programar en PHP";
     $posicion1 = strpos($cadena, "php");
     $posicion2 = stripos($cadena, "php");
     $posicion3 = strpos($cadena, "PHP");
    // Devuelve: No se ha encontrado la cadena 'php'
     if( $posicion1 === false )
        echo "No se ha encontrado la cadena 'php'<br />";
    else
        echo "Cadena 'php' encontrada en la posición [".$posicion1."]<br />";
    // Devuelve: Cadena 'php' encontrada en la posición [27]
     if( $posicion2 === false )
        echo "No se ha encontrado la cadena 'php'<br />";
    else
        echo "Cadena 'php' encontrada en la posición [".$posicion2."]<br />";
    // Devuelve: Cadena 'PHP' encontrada en la posición [27]
     if( $posicion3 === false )
        echo "No se ha encontrado la cadena 'PHP'<br />";
    else
        echo "Cadena 'PHP' encontrada en la posición [".$posicion3."]<br />";
?>