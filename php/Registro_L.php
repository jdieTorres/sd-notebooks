<?php
include 'Connection.php';

$errores = '';


/*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $contrasena = $_POST['contrasena'];
    $Contrasena_Again = $_POST['Contrasena_Again'];

    echo "$username, $mail, $contrasena";
}*/

// Verificar si se enviaron datos POST

if (isset($_POST['username'], $_POST['mail'], $_POST['contrasena'], $_POST['Contrasena_Again'])) {
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $contrasena = $_POST['contrasena'];
    $Contrasena_Again = $_POST['Contrasena_Again'];

    if (empty($username) or empty($mail) or empty($contrasena) or empty($Contrasena_Again)) {

        $errores .= "<li>No se enviaron datos del formulario.</li>";

    } else {

        $checkQuery_mail = "SELECT * FROM Register WHERE mail = '$mail'";
        $result_mail = $conexion->query($checkQuery_mail);

        $checkQuery_user = "SELECT * FROM Register WHERE username = '$username'";
        $result_user = $conexion->query($checkQuery_user);

        if ($result_mail->num_rows > 0) {

            $errores .= "<li><i class='fa-solid fa-xmark'></i> El correo electrónico ya está en uso.</li>";
        }

        if ($result_user->num_rows > 0) {

            $errores .= "<li><i class='fa-solid fa-xmark'></i> El nombre de usuario ya está en uso.</li>";
        } else {

            if ($contrasena === $Contrasena_Again) {
                $query = "INSERT INTO Register (username, mail, contrasena) 
                        VALUES ('$username', '$mail', '$contrasena')";
                if ($conexion->query($query) === TRUE) {
                    echo '

                        <script>
                            alert("Usuario registrado correctamente"); 
                            window.location = "../sd-notebooks-Back-end/login.html"
                        </script>
                    ';
                } else {
                    echo "Error al registrar: " . $conexion->error;
                }
            } else {
                $errores .= "<li><i class='fa-solid fa-xmark'></i> Las contraseñas no coinciden</li>";
            }

        }

    }

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