<?php
$servidor = "localhost";  // Nombre del servidor
$usuario = "root";        // Nombre de usuario
$contra = " ";             // Contraseña
$basedatos = "registro";    // Nombre de la base de datos

// Conexión a la base de datos
$conex = mysqli_connect($servidor, $usuario, $contra, $basedatos);

// Verificar si la conexión ha sido exitosa
if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());  // Mostrar error en caso de que falle la conexión
}
echo "¡Conexión exitosa!";
?>
