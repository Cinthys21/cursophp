<?php

//aprendiendo methodo post
if($_POST) {
//Recibir informacion del formulario HTML(metodo post)
$nombre=$_POST['txtNombre'];
echo "Hola ".$nombre;
//podemos insertar elementos html en un archivo php*/
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINTHYA PRACTICA PHP</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
        
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>