<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="{{asset('css/registro.css')}}">
    <link rel="stylesheet" href="{{asset('img')}}"> 
    <title>Cuenta</title>

</head>
<body>
      <div class="login-container">
          <div class="login-info-container">
            <h1 class="title">Registrate</h1>
            <div class="social-login">
                <div class="social-login-element">
                    <img src="image/google.png" alt="google-image">
                    <span>Google</span>
                </div>
                <div class="social-login-element">
                    <img src="image/facebook.png" alt="facebook-image">
                    <span>Facebook</span>
                </div>
            </div>
            <p>o</p>
            <form class="inputs-container">
                <input class="input" type="text" placeholder="Usuario" required>
                <input class="input" type="email" placeholder="Gmail" require>
                <input class="input" type="password"placeholder="Contraseña" require>
                <input class="input" type="password" placeholder="Confirma Contraseña">
                <p>Olvidaste la contraseña? <span class="span">Click aqui</span></p>
                <button class="btn">login</button>
                <p>No tienes una cuenta? <span class="span">Click aqui</span></p>
            </form>
          </div>
            <img class="image-container" src="image/registerimage.jpg" alt="">
      </div>

</body>
</html>
