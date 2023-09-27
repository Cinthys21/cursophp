<?php
//get envia datos a través de una URL, desde un doc HTML  aun doc PHP
//Recomendable no enviar datos confidenciales o sensibles a través del metodo GET
if($_GET){

    $nombre=$_GET['nombre'];
    echo "Hola ".$nombre;
}
?>