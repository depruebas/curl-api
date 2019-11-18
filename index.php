<?php 

	define ( "EOF", "\n");

	# Punto de entrada de la API
	# Recibimos los datos del POST
	$_data_input = file_get_contents( 'php://input');

	# Modificamos el POST
	$d = json_decode( $_data_input, TRUE);
	$d['add-api'] = "Modificado por la API";

	//$data_mod = json_encode( $d);

	# Mostramos por la salida standar el POST recibido modificado
	echo EOF."Respuesta:".EOF;
	print_r( $d);
	echo EOF;
