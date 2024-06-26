
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sabores Colombia</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="estilos-carrousel.css">


</head>

<body>
  <header>
    <h1><img src="imagenes/Saborescolombia.png" alt="logo de SaboresColombia"></h1>
    <div class="cajaHeader">
      <nav>
        <ul>
          <li><a href="pantallaInicio.php">Inicio</a></li>
          <li><a href="index.php">INGREDIENTES</a></li>
          <li><a href="recetasInternacionales.php">RECETAS INTERNACIONALES</a></li>
          <li><a href="../CAJA COMENTARIOS/index2.php">Foro</a></li>
          <li><a href="../index.php" class="btn-1">LOGIN</a></li>
          <li><a href ="..//bienvenida.php">Cerrar sesión</a><li>
        </ul>
      </nav>
    </div>
    
    <?php
            if(isset($_SESSION['access_token'])) {
              echo '<img class="foto_usuario"  src="' . $_SESSION["user_image"] . '" alt="Foto de perfil">';
              echo '<a href="#" class="user-name">' . $_SESSION['user_first_name'] . '</a>';
            } else {
              echo '<img class= "foto_ususario" src="imagenes/usuario.png" alt="Imagen">';
              echo '<a class="user-name"  href="#">Usuario</a>';
            }
          ?>

  </header>




  <main class="todoInicio">
    <h1 class="titulo2">BIENVENIDOS A SABORES COLOMBIA</h1>

    <table>
      <tr>
        <td>
          <img src="imagenes/mapaColombia.png" width="550">
        </td>
        <td>
          <p class="parrafo">
            <font size="5">
              ¿Te gustaría experimentar la deliciosa variedad de la cocina colombiana desde la comodidad de tu hogar? En nuestro sitio, te ofrecemos una amplia selección de recetas auténticas que te transportarán a los sabores y aromas de Colombia.</font>
          </p>
          <br>
          <p class="parrafo">
            <font size="5">Ya sea que seas un apasionado cocinero o simplemente estés buscando nuevas ideas para tus comidas, estamos aquí para ayudarte a descubrir platos tradicionales y emocionantes. 
            </font>
        </td>
      </tr>

    </table>
    <hr>
    <h1 class="titulo3">¿Cómo usar Sabores Colombia?</h1>
    <table>
      <tr>
        <td>
          <div class="contenedor-inicio">
            <div>
              <p class="parrafo2">
                <font size="5">¡Es muy simple! Simplemente selecciona los ingredientes que tengas disponibles y da clic al botón de siguiente. El sistema te mostrará las recetas que podrás realizar, y al dara clic a la receta te llevará a un videotutorial.</font>
              </p>
            </div>
            <div class="parrafo-2">
              <p class="parrafo2">
                <font size="5">Además te puedes registrar para acceder a funciones personalizadas como participar en el foro, compartiendo comentarios o experiencias con distintos usuarios o valorizar las recetas.</font>
              </p>
            </div>
          </div>
          <br>
          <p class="parrafo2">
            <font size="5"></font>
        </td>
      </tr>
    </table>

    <div class="slider-box">
      <ul class>
        <li>
          <img src="imagenes/ingredientes.jpg" class="img-1"alt="">
            <div class="texto-carrousel">
            <a class="txt-img1" href="index.php">INGREDIENTES</a>
            </div>

        </li>
        <li>
          <img src="imagenes/foro.jpg"class="img-2" alt="">
            <div class="texto-carrousel">
            <a class="txt-img2"href="../CAJA COMENTARIOS/index2.php">Foro</a>
            </div>
        </li>

        
        
      </ul>
    </div>


    <footer>
  
  <div class="footerContainer">
    <div class="socialIcons">
      <a href="http://localhost:3000"><i class="fa-brands fa-facebook"></i></a>
      <a href=""><i class="fa-brands fa-twitter"></i></a>
      <a href="https://accounts.google.com/o/oauth2/v2/auth/oauthchooseaccount?response_type=code&access_type=online&client_id=947201008132-oovpai6utqaa2im8a5v4h7oq36t1t40b.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%3A3000%2Flogin-register%2Flogin-register%2FSABORES%2520COLOMBIA%2FpantallaInicio.php&state&scope=email%20profile&approval_prompt=auto&service=lso&o2v=2&ddm=0&flowName=GeneralOAuthFlow"><i class="fa-brands fa-google-plus"></i></a>
      
    </div>
  </div> 
  
  <div class="footerNav">
  
  <ul>
    <li><a href="">Home</a> </li>
    <li><a href="">News</a> </li>
    <li><a href="">About</a> </li>
    <li><a href="">Contact us</a> </li>
    <li><a href="">Our Team</a> </li>
  </ul>
  </div>
  
  <div class="footerBottom">
  
  <p>Copyrigth &copy;2024; Designed by<span class="designer"> Natalia Giraldo, Kevin Lopez, Sofia Valencia, Bylen Naspiran</span></p>
  </div>
  
  </footer>
<script src="carrousel.js"></script>
<script src="firebase.js"></script>
<script src="home.js"></script>

</body>

</html>
