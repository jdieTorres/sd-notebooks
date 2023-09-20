<?php
include 'Connection.php';

// Verificar si se enviaron datos POST
if (isset($_POST['username'], $_POST['mail'], $_POST['contrasena'], $_POST['Contrasena_Again'])) {
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $contrasena = $_POST['contrasena'];
    $Contrasena_Again = $_POST['Contrasena_Again'];

    $checkQuery = "SELECT * FROM Register WHERE mail = '$mail'";
    $result = $conexion->query($checkQuery);
    if ($result->num_rows > 0) {
        echo "El correo electrónico ya está en uso. Por favor, elija otro.";
    }if ($contrasena === $Contrasena_Again) {
        $query = "INSERT INTO Register (username, mail, contrasena) 
                  VALUES ('$username', '$mail', '$contrasena')";
        if ($conexion->query($query) === TRUE) {
            echo '
        <script>
            alert("Usuario registrado correctamente"); 
            window.location = "../login.html"
        </script>
    ';
        } else {
            echo "Error al registrar: " . $conexion->error;
        }
    } else {
        echo "Las contraseñas no coinciden";
    }
} else {
    echo "No se enviaron datos del formulario.";
}
mysqli_close($conexion);

/*
include 'Connection.php';
$username = $_POST['username'];
$mail = $_POST['mail'];
$contrasena = $_POST['contrasena'];
$Contrasena_Again = $_POST['Contrasena_Again']; // Corregido el nombre del campo

$Mysql = "INSERT INTO Register (username, mail, contrasena) 
        VALUES ('$username', '$mail', '$contrasena')";

if ($conexion->query($Mysql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conexion->error;
}

$start = mysqli_query($conexion, $Mysql);

if($start){
    echo '
        <script>
            alert("Usuario registrado correctamente"); 
            window.location = "../login.html"
        </script>
    ';
}else{
    echo '
        <script>
            alert("Err Intente Nuevamente"); 
            window.location = "../sign_up.php"
        </script>
    ';
}

mysqli_close($conexion);
*/
?>