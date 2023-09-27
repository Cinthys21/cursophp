<?php 
$paises = array('mexico', 'españa', 'colombia', 'peru', 'Argentina', 'venezuela','guatemala' );
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>DOCUMENTO</title>
 </head>
 <body>
 
<h1>PAISES LATAM</h1>
<?php 

foreach ($paises as $pais) {
	if ($pais == 'españa') {
		continue;
		// code...
	}
	echo $pais .'<br>';
	// code...
}

 ?>
 </body>
 </html>