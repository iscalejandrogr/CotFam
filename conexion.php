<?php
$usuario="n260m_14426545";
$servidor="sql206.260mb.net";
$BD="n260m_14426545_prueba";
$password="drag0n";

$conexion=mysql_connect($servidor,$usuario,$password)or die("Error en la conexión".mysql_error());
mysql_select_db($BD,$conexion);
?>
