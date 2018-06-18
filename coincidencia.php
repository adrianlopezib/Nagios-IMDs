<?php

	$tipo_archivo = $_POST['tipo_archivo'];
	$hostname = $_POST['hostname'];

	$buscar = file( $tipo_archivo );
	$enc = 0;
	$noenc = 0;
	foreach($buscar as $busco){
		if(strstr($busco,$hostname)){
			$enc=1;
		}else{
			$noenc;
		}
		
	}
	
	echo $enc."|";

?>