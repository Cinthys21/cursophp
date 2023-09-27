<?php
//ENVIO DE VARIABLES A TRAVES DE METODO POST
//STRING
//CONCATENACION

if($_POST){
    $txNombre=$_POST['txtNombre'];
    $txtApellido=$_POST['txtApellido'];//Comilla simple indica que es un grupo de caracteres
    echo "Hola ".$txtNombre." ".$txtApellido;//Comillas doble "hola" indica que es un string OSEA TEXTO, El punto indica CONCATENAR
    //CONCATENACION es la union de elementos
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENVIO DE VARIABLES Y CONCATENACION</title>
</head>
<body>
    <form action="ejercicio5.php" method="post">
        
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br/>
        
        Apellido:
        <input type="text" name="txtApellido" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>