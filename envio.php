 <?php
include "conexion.php";

$nom=$_POST["nombre"];
$app=$_POST["apellidoP"]; 
$apm=$_POST["apellidoM"]; 
$tel=$_POST["telefono"]; 
$email=$_POST["email"]; 
$dir=$_POST["direc"]; 
$obs=$_POST["observ"]; 

$sql="INSERT INTO usuarios (Id_Usuario, Nombre, Apellido_P, Apellido_M, Telefono, Correo, Direccion, Observaciones)VALUES('','$nom','$app','$apm','$tel','$email','$dir','$obs')";
$insertar=mysql_query($sql,$conexion);
if($insertar){
echo "Nombre: ".$nom."<br>";
echo "Apellido Paterno: ".$app."<br>";
echo "Apellido Materno: ".$apm."<br>";
echo "Teléfono: ".$tel."<br>";
echo "Email: ".$email."<br>";
echo "Dirección: ".$dir."<br>";
echo "Observaciones: ".$obs."<br>";
echo "Datos guardados correctamente";
}else{

echo "error no se pudieron guardar los datos";
}
mysql_close($conexion);












/*
$sql="INSERT INTO usuarios (Id_Usuario, Nombre, Apellido_P, Correo)VALUES('','$nom','$app','$email')";
$consul=mysql_query($sql,$cadena);

if($consul){
echo "Nombre: ".$nom."<br>";
echo "Apellidos: ".$app."<br>";
echo "Email: ".$email."<br>";

echo "Datos guardados satisfactoriamente";
}else{
echo "Error al enviar los datos: ".mysql_error();
}
mysql_close($cadena);
*/

?>
 