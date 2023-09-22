<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Conexión a la base de datos MySQL
$servername = "192.168.100.95"; 
$username = "jaziel";
$password = "55869";
$dbname = "users";

// Crea la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Obtener datos del formulario
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

// Insertar datos en la tabla usuarios
$sql = "INSERT INTO usuarios (usuario, constrasena) VALUES ('$usuario', '$contrasena')";

if ($conexion->query($sql) === TRUE) {
    echo "<p style='color: green;'>Registro exitoso</p>";
    // Enlace estilizado para volver al formulario
    echo "<p><a href='index.html' style='text-decoration: none; color: blue;'>Volver al formulario</a></p>";
} else {
    echo "<p style='color: red;'>Error al registrar: " . $conexion->error . "</p>";
}

// Cerrar la conexión
$conexion->close();
?>