<?php
require 'conexion.php';

/*$sql="SELECT Clasif_gastos_Clave_gasto, Precio, Fecha FROM gastos";
//$sql="SELECT Clasif_gastos_Clave_gasto, Precio, Fecha, CONCAT( '$ ', SUM( gastos.Precio ) ) AS TotalGastos FROM gastos";
$resultado=mysql_query($sql,$conexion);
*/
$sql2 = "SELECT CONCAT('$ ',SUM(gastos.Precio)) AS TotalGastos FROM gastos";
$resultado2=mysql_query($sql2,$conexion);
if($resultado2){
$cost=array();
$i=0;
while($fila=mysql_fetch_assoc($resultado2)){
$cost[$i]=$fila;
$i=$i+1;
}
}else{
die("Error: ".mysql_error());
}
/*
if($resultado){
  $datos = array();  
  $i=0;
  while($fila=mysql_fetch_assoc($resultado)){
  $datos[$i]=$fila;
  $datos[$i+1]="";
  $i=$i+1;
  }  
  $datos[$i]=$cost[0];
}else{
 die("Error al consultar los datos: ".mysql_error());   
}*/
mysql_close($conexion);
//echo json_encode($datos);
echo json_encode($cost);
?>