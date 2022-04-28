<?php
$conexion = mysqli_connect("localhost", "root", "", "bd_contacto");  
//include 'cn.php';
	// recuperar las variables
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];

//consulta para insertar
	$contraseña = md5($contraseña);
$insertar = "INSERT INTO datos(nombre, correo,telefono, mensaje) VALUES ('$nombre',  '$correo',  '$telefono', '$mensaje')";
//ejecutar consulta
$resutado = mysqli_query($conexion, $insertar);
if (!$resutado){
	echo "error al registrarse";

}else {
		echo "Datos Guardados Correctamente<br><a href='contacto.html' > volver</a>";
	
	 
}
//cerrar conexion
mysqli_close($conexion);

?>