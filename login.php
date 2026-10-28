<?php
// iniciosesion.php - Verificar datos de usuario
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Buscar el usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
        echo "<h2>Bienvenido(a), " . $usuario['nombre'] . "! <a href='index.html'>Ir a la tienda</a></h2>";
    } else {
        echo "<h2>Correo o contraseña incorrectos. <a href='index.html'>Intentar de nuevo</a></h2>";
    }
}
?>