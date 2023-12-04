<?php

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "prueba");

// Comprobación de la conexión
if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}

// Obtención de los datos del formulario
$nomUsuario = $_POST["nomUsuario"];
$pass = $_POST["pass"];


/* // Consulta de inserción
$consulta = "INSERT INTO usuarios (nomUsuario, pass) VALUES ('$nomUsuario', '$pass')";
$consulta2= "Select * from usuarios where nomUsuario= '$nomUsuario' and pass = '$pass'";
 */

// Ejecución de la consulta
$resultado = $conexion->query($consulta);



// Cierre de la conexión
$conexion->close();

header('Location: http://localhost/xampp/proyectoNegocios/proyectoNegocios/logIn.php');
exit;
?>
