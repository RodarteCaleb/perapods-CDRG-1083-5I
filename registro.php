<?php
// registro.php - Guardar usuario en la base de datos
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre   = $_POST['nombre'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Insertar datos a la tabla usuarios
    $sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

    if (mysqli_query($conexion, $sql)) {
        echo "<h2>¡Registro exitoso! <a href='index.html'>Volver a la tienda</a></h2>";
    } else {
        echo "Error al registrar: " . mysqli_error($conexion);
    }
}
?>