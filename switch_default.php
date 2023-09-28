<?php
/*Entre los paréntesis de switch() debemos poner la variable cuyo valor deseamos comparar.

Escribir break al final de cada case porque de lo contrario, tras encontrarse una coincidencia y procesar el código fuente correspondiente, se continuarán evaluando el resto de opciones.

Si ninguno de los valores indicados en los case se corresponde con el de la variable, se ejecutará el código PHP dentro de default (si lo ponemos al final del switch() no es necesario usar break)*/
    $dia = 7;
    switch( $dia )
    {
         case 1: case 2: case 3: case 4: case 5:
            echo "Entre semana";
            break;
        case 6: case 7:
            echo "Fin de semana";
            break;
        default:
            echo "Valor no válido";
    }
?>