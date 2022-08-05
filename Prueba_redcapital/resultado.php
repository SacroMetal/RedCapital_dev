<?php
$valor = $_REQUEST['numero_ejercicio1'];

function orden_fibonacci($valor){

	$primer_numero  =0;
	$segundo_numero =1;
	$resultado      =0;

	for ($vuelta = 1; $vuelta <= $valor; $vuelta++){

			echo $resultado . " ";

			$resultado 	   = $primer_numero + $segundo_numero;
			$primer_numero = $segundo_numero;
			$segundo_numero= $resultado;	
	}
}
orden_fibonacci($valor);

?>