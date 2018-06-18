<?php

include_once("parser/plugin/Parser.php");

$hostname = $_POST['nombreh'];
$path = $_POST['type'];

//Parametros que debemos de modificar //  Parameters that we must modify */
//$path = 'C:\wamp\www\nagios\windows.cfg';
//$path = 'parser/plugin/wifi.cfg';
//************************** */

// Creamos un objeto de tipo Parser
$parser = new Parser($path);

// Para comprobar si un hostname existe en el archivo
$exists = $parser->checkIfExists($hostname);
//echo $exists;

// Para obtener un array de objetos de tipo Host con los hosts del archivo
$hosts = $parser->getHosts();
foreach ($hosts as $host) {

}

// Para obtener un objeto de tipo Host con el nombre de hostname indicado
$host = $parser->getHost($hostname);

// Una vez que tenemos el objeto de tipo Host puedo acceder a sus métodos


echo $host->getUse()."|".$host->getHostname()."|".$host->getAlias()."|".$host->getAddress()."|".$host->getParents()."|".$host->getIconImage()."|".$host->getStatusMapImage()."|".$host->getNotes();


?>