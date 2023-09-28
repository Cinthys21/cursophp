<?php
    $dia = "MIERCOLES";
     switch( $dia )
    {
         case "LUNES":
            echo 1;
             break;
        case "MARTES":
            echo 2;
            break;
        case "MIERCOLES":
            echo 3;
            break;
        case "JUEVES":
            echo 4;
            break;
        case "VIERNES":
            echo 5;
            break;
        case "SABADO":
            echo 6;
            break;
        case "DOMINGO":
            echo 7;
            break;
         default:
            echo "Día no válido";
    }
?>