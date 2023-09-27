<?php 
	$meses=array('enero','febrero','marzo','abril',
	'mayo','junio','julio','agosto','setiembre',
	'octubre','noviembre','diciembre');

	echo "el conteo de meses es:";
	echo count($meses). '<br />';
	$contador = 0;
	while ($contador < count($meses)) {
		echo $meses[$contador] . '<br />'; 
		$contador++;
		// code...
	
	}
	

 ?>