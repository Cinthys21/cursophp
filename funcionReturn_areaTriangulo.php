<?php 
function Atriangulo($valor1, $valor2){
	$resultado = ($valor1 * $valor2)/2 ;
	return $resultado;
}
$resultado = Atriangulo(10, 15);
echo 'el triangulo tiene un area: ' . $resultado . ' metros cuadrados';
 ?>