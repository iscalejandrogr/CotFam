 <?php
include "conexion.php";

$opAuto=$_POST["opAuto"];
$PrecioAuto=$_POST["PrecioAuto"];  
$fecha=date("Ymj");

$sql="INSERT INTO gastos (idgastos, Clasif_gastos_Clave_gasto, Precio, Fecha, datos_familiares_iddatos_familiares)VALUES('','$opAuto','$PrecioAuto','$fecha','1')";
$insertar=mysql_query($sql,$conexion);

  if($insertar){
    echo "Producto: ".$opAuto."<br>";
    echo "Precio: ".$PrecioAuto."<br>";
    echo "Fecha: ".$fecha."<br>";
    echo "Datos guardados correctamente";
  }else{
    echo "Error no se pudieron guardar los datos".mysql_error();
  }
  mysql_close($conexion);
?>
 