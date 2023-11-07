<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <script src="main.js" defer type="module"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Notebooks Register</title>
    <link rel="stylesheet" href="../styles/styles_login.css">

    <!-- Fonts -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/a59d4e3777.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Menu Button -->

    <button class="menu-button" onclick="location.href='../index.html'">
        <i class="fa-solid fa-house"></i>
    </button>

    <!-- Register Container -->

    <div class="register-container">

        <h1>Register</h1>

        <!-- Register Form -->

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="register-form">

            <div class="form-grid">
                <label for="mail">Correo:</label>
                <input type="text" name="mail" required>
            </div>

            <div class="form-grid">
                <label for="username">Nombre de usuario:</label>
                <input type="text" name="username" required>
            </div>

            <div class="form-grid">
                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" required>
            </div>

            <div class="form-grid">
                <label for="Contrasena_Again">Repite la Contraseña:</label>
                <input type="password" name="Contrasena_Again" required>
            </div>

            <button type="submit">Registrame</button>

            <div>
            <button type="button" id="googleLogin" class="GoogleButton">
                <img src="../images/Google.png" alt="Google Logo" style="width: 24px; height: auto; margin-right: 5px;"> Google
            </button>
            </div>

            <div>
            <button type="button" id="FacebookLogin" class="FacebookButton">
                <img src="../images/Facebook.png" alt="Facebook Logo" style="width: 24px; height: auto; margin-right: 5px;"> Facebook
            </button>
            </div>
            
        </form>

        

        <?php

        include '../php/Register_user.php';

        if (!empty($errores)): ?>

            <div class="error">
                <ul>
                    <?php echo $errores; ?>
                </ul>
            </div>

        <?php endif; ?>

        <!-- To Login -->

        <div class="register-link">
            <a href="./login.php">¿Ya tienes cuenta? Ingresa</a>
        </div>

        


    </div>
    


</body>

</html>