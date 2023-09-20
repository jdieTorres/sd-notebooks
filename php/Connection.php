<?php


$conexion = mysqli_connect("localhost", "root", "Somosmas54321Ds", "Register_User_Login");

if ($conexion) {
    echo 'Conectado exiosamente';
}else{
    echo 'La base de datos no fue conectada';
}
?>