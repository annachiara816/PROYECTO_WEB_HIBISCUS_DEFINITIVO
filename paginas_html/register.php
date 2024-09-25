<?php
    require("conexion.php");

    if(isset($_POST['register'])) {
        // Comprobamos que todos los campos estén llenos
        if(
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['address']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['password']) >= 1
        ) {
            // Limpiamos los valores de los inputs
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $address = trim($_POST['address']); 
            $phone = trim($_POST['phone']);
            $password = trim($_POST['password']);
            $fecha = date("Y-m-d"); // Formato correcto para la fecha en bases de datos

            // Consulta para insertar datos
            $consulta = "INSERT INTO datos (nombre, email, direccion, telefono, contrasena, fecha) 
                        VALUES ('$name', '$email', '$address', '$phone', '$password', '$fecha')";

            // Ejecutamos la consulta
            $resultado = mysqli_query($conex, $consulta);

            // Comprobamos si la inserción fue exitosa
            if ($resultado) {
                echo '<h3 class="success">Tu registro se ha completado</h3>';
            } else {
                echo '<h3 class="error">Ocurrió un error al registrar</h3>';
            }
        } else {
            echo '<h3 class="error">Por favor llena todos los campos</h3>';
        }
    }
?>
