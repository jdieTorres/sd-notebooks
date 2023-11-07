<?php
include 'Connection.php';

$errores = '';

if (isset($_POST['username'], $_POST['contrasena'])) {

    $verify_user = $_POST['username'];
    $verify_pass = $_POST['contrasena'];

    $dataBase = "SELECT * FROM Register WHERE username='$verify_user' and contrasena='$verify_pass'";
    $access = mysqli_query($conexion, $dataBase);

    if (mysqli_num_rows($access) > 0) {
        // Ingreso exitoso
        echo '
    <script> 
        window.location = "../views/login_view.html"
    </script>
    ';
    } else {

        $errores .= "<li><i class='fa-solid fa-xmark'></i> Usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.</li>";

    }

}



?>