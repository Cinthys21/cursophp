<?php 
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
 
$semana_reverse = array_reverse($semana);
echo join(', ',$semana_reverse);
 ?>