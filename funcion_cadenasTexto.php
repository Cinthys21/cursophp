<?php 
// $texto = '< > & "" ';
$texto = '<b> Hola Cinthya </b>';
// $texto = 'Hola Carlos';

// echo $texto; 
// echo htmlspecialchars($texto); //convierte caracteres especiales en entidades HTML para que no se ejecuten en el navegador y asi se evita que los usuarios no puedaninyectar codigo en nuestros sitios web(evita mal uso de nuestro codigo en internet).
// echo trim($texto);//Eliminar espacios en blanco al inicio y al final.
// echo strlen($texto); //Permite calcular el tamaño de una cadena de texto.
// echo substr($texto, 1 , 2); //Retorna un pedaso de una linea de una cadena texto.
// echo strtoupper($texto);//Convierte una cadena de texto a mayúsculas
// echo strtolower($texto);//convierte una cadena de texto  minuscula
echo strpos($texto, 't'); //muestra en que posicion esta la letra colocada en el parametro.

 ?>