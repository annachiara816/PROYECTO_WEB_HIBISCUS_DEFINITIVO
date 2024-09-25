<?php
    include_once("conexion.php");

    if(isset($_POST['register'])){
        if(
            strlen($_POST['name'])>= 1 &&
            strlen($_POST['email'])>= 1 &&
            strlen($_POST['address'])>= 1 &&
            strlen($_POST['phone'])>= 1 &&
            strlen($_POST['password'])>= 1
                
        ){
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $addres = trim($_POST['address']);
            $phone = trim($_POST['phone']);
            $password = trim($_POST['password']);
            $fecha = date("d/m/y"); 
        }



    }

?>