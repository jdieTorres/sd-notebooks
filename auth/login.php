<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Notebooks Login</title>
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

    <!-- Login Container -->

    <div class="login-container">

        <h1>Login</h1>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="login-form">

            <!-- Login Form -->

            <div class="form-grid">
                <label for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-grid">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>

            <button type="submit">Iniciar Sesión</button>  

            <div class="form-grid">
                
            
</div>
        </form>

        <?php

        include '../php/Login_user.php';

        if (!empty($errores)): ?>

            <div class="error">
                <ul>
                    <?php echo $errores; ?>
                </ul>
            </div>

        <?php endif; ?>

        <!-- To Register -->

        <div class="login-link">
            <a href="./sign_up.php">¿No tienes cuenta? Crea una</a>
        </div>
    </div>
</body>
</html>