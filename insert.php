<?php

$tipo_archivo = $_POST['tipo_archivo'];
$use = $_POST['use'];
$hostname = $_POST['hostname'];
$alias = $_POST ['alias'];
$address = $_POST ['address'];
$parents = $_POST ['parents'];
$iconimage = $_POST ['iconimage'];
$estatus = $_POST ['estatus'];
$notes = $_POST ['notes'];

//Ver mensajes

$define = "define host{ \n";
$use_2 = "use \t \t \t \t \t";
$hostname_2 = "host_name \t \t \t \t";
$alias_2 = "alias \t \t \t \t \t";
$address_2 = "address \t \t \t \t";
$parents_2 = "parents \t \t \t \t";
$iconimage_2 = "icon_image \t \t \t \t";
$estatus_2 = "statusmap_image \t \t";
$notes_2 = "notes \t \t \t \t \t";
$findefine = "} \n \n";

	
if($archivo = fopen($tipo_archivo, "a+"))
	{
		fwrite($archivo, $define);
		
		fwrite($archivo,  $use_2 . "". $use. "\n");
		fwrite($archivo,  $hostname_2 . "". $hostname. "\n");
		fwrite($archivo,  $alias_2 . "". $alias. "\n");	
		fwrite($archivo,  $address_2 . "". $address. "\n");
		fwrite($archivo,  $parents_2 . "". $parents. "\n");	
		fwrite($archivo,  $iconimage_2 . "". $iconimage. "\n");	
		fwrite($archivo,  $estatus_2 . "". $estatus. "\n");
		fwrite($archivo,  $notes_2 ."".  $notes. "\n");	

		fwrite($archivo, $findefine);
			
	}
		fclose($archivo);

	
	
	
	
?>
