
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.5.2/firebase-app.js";
  import { getAuth, GoogleAuthProvider,FacebookAuthProvider, signInWithPopup } from "https://www.gstatic.com/firebasejs/10.5.2/firebase-auth.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.5.2/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCTL-u2oW_jnSJ_9gEyUUhj1DUmpKo_H3A",
    authDomain: "sd-notebooks.firebaseapp.com",
    projectId: "sd-notebooks",
    storageBucket: "sd-notebooks.appspot.com",
    messagingSenderId: "128535554889",
    appId: "1:128535554889:web:fa0dc494152d9bb6e4c898",
    measurementId: "G-0PJ8ESSZ28"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);
    auth.languageCode = 'en';
  const provider = new GoogleAuthProvider(), FacebookAuthProvider();
  
  const analytics = getAnalytics(app);


    // Login with Google
  const googleLogin = document.getElementById("googleLogin");
  googleLogin.addEventListener("click", function(){
    
    signInWithPopup(auth, provider)
    .then((result) => {
      const credential = GoogleAuthProvider.credentialFromResult(result);
      const user = result.user;
      console.log(user);
      window.location.href="../views/login_view.html";
    }).catch((error) => {
      const errorCode = error.code;
      const errorMessage = error.message;
    });
  })

    // Login with Facebook
    const FacebookLogin = document.getElementById("FacebookLogin");
    FacebookLogin.addEventListener("click", function(){
      signInWithPopup(auth, provider)
      .then((result) => {
        // The signed-in user info.
        const user = result.user;
        console.log(user);
        window.location.href="../views/login_view.html";
        // This gives you a Facebook Access Token. You can use it to access the Facebook API.
        const credential = FacebookAuthProvider.credentialFromResult(result);
        const accessToken = credential.accessToken;
      })
      .catch((error) => {
        // Handle Errors here.
        const errorCode = error.code;
        const errorMessage = error.message;
        // The email of the user's account used.
        const email = error.customData.email;
        // The AuthCredential type that was used.
        const credential = FacebookAuthProvider.credentialFromError(error);
    
        // ...
      });
    })
