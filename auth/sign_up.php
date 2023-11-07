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

    <!-- FireBase Google -->

       
        

   

</head>

<body>
   

         <!--    
<script>
 import { getAuth, signInWithPopup, GoogleAuthProvider } from "firebase/auth";

const provider = new GoogleAuthProvider();
import { initializeApp } from "./firebase/app";
import { getAnalytics } from "firebase/analytics";
const firebaseConfig = {
  apiKey: "AIzaSyCTL-u2oW_jnSJ_9gEyUUhj1DUmpKo_H3A",
  authDomain: "sd-notebooks.firebaseapp.com",
  projectId: "sd-notebooks",
  storageBucket: "sd-notebooks.appspot.com",
  messagingSenderId: "128535554889",
  appId: "1:128535554889:web:fa0dc494152d9bb6e4c898",
  measurementId: "G-0PJ8ESSZ28"
};
        
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        const auth = getAuth();

        document.getElementById('googleLogin').addEventListener('click', () => {
            signInWithPopup(auth, provider)
  .then((result) => {
    // This gives you a Google Access Token. You can use it to access the Google API.
    const credential = GoogleAuthProvider.credentialFromResult(result);
    const token = credential.accessToken;
    // The signed-in user info.
    const user = result.user;
    // IdP data available using getAdditionalUserInfo(result)
    // ...
  }).catch((error) => {
    // Handle Errors here.
    const errorCode = error.code;
    const errorMessage = error.message;
    // The email of the user's account used.
    const email = error.customData.email;
    // The AuthCredential type that was used.
    const credential = GoogleAuthProvider.credentialFromError(error);
    // ...
  });
        }); 
</script>

            

    
-->
    




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