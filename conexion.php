<?php
// conexion.php - Conexión básica a MySQL en XAMPP
$servidor = "localhost";
$usuario  = "root";
$password = "";
$baseDatos = "tienda_airpods";

// Crear conexión
$conexion = mysqli_connect($servidor, $usuario, $password, $baseDatos);

// Verificar conexión
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>