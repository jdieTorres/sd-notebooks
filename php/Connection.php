<?php


$conexion = mysqli_connect("localhost", "root", "uninpahu", "Register_User_Login");

if ($conexion) {
    echo 'Conectado exiosamente';
}else{
    echo 'La base de datos no fue conectada';
}
?>
