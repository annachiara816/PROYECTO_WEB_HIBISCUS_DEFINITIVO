<?php

require("conexion.php");

if (isset($_POST['register'])) {
    // Validar que los campos no estén vacíos
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['address']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {
        // Limpiar y asegurar los datos de entrada
        $name = mysqli_real_escape_string($conex, trim($_POST['name']));
        $email = mysqli_real_escape_string($conex, trim($_POST['email']));
        $address = mysqli_real_escape_string($conex, trim($_POST['address']));
        $phone = mysqli_real_escape_string($conex, preg_replace('/\D/', '', $_POST['phone']));
        $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
        $fecha = date("Y-m-d");

        // Consulta para insertar datos
        $consulta = "INSERT INTO datos (nombre, email, direccion, telefono, contrasena, fecha) 
                    VALUES ('$name', '$email', '$address', '$phone', '$password', '$fecha')";

        // Ejecutar la consulta
        $resultado = mysqli_query($conex, $consulta);

        // Comprobar si la inserción fue exitosa
        if ($resultado) {
            echo '<h3 class="success">Tu registro se ha completado correctamente!!</h3>';
        } else {
            echo '<h3 class="error">Ocurrió un error al registrar: ' . mysqli_error($conex) . '</h3>';
        }
    } else {
        echo '<h3 class="error">Por favor llena todos los campos</h3>';
    }
}

?> 

