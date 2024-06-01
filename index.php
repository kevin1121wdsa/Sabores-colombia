<!DOCTYPE html>
<html>
<head>
  <title>Facebook Login</title>
  <style>
    Para aumentar el tamaño del contenedor en un 20%, puedes ajustar la propiedad max-width y aumentar el valor del padding en el selector .container. Aquí te muestro los cambios necesarios en el código CSS:
cssCopy code.container {
  max-width: 600px;
  padding: 60px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  text-align: center;
}
Explicación de los cambios:

Se ha aumentado el valor de max-width de 500px a 600px, lo que representa un aumento del 20% en el ancho máximo del contenedor.
Se ha aumentado el valor del padding de 40px a 60px, lo que proporciona más espacio interno alrededor del contenido y aumenta el tamaño general del contenedor.

Aquí te dejo el código completo con los cambios aplicados:
htmlCopy code<!DOCTYPE html>
<html>
<head>
  <title>Facebook Login</title>
  <style>
  Para centrar nuevamente el contenedor después de aumentar su tamaño, puedes ajustar las propiedades left y transform en el selector .container. Aquí te muestro los cambios necesarios en el código CSS:
cssCopy code.container {
  max-width: 600px;
  padding: 60px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
<html>
<head>
  <title>Facebook Login</title>
  <style>
  Para agrandar la letra del botón "Inicia sesión con Facebook!", puedes ajustar la propiedad font-size en el selector .login-link. Aquí te muestro los cambios necesarios en el código CSS:
cssCopy code.login-link {
  display: inline-block;
  padding: 30px 50px;
  background-color: #4267B2;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  font-size: 24px;
}
Explicación de los cambios:

Se ha agregado la propiedad font-size: 24px; al selector .login-link para aumentar el tamaño de la letra del botón.

Aquí te dejo el código completo con los cambios aplicados:
htmlCopy code<!DOCTYPE html>
<html>
<head>
  <title>Facebook Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #F1F1F1;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .container {
      font-size: 15px;
      max-width: 700px;
      padding: 70px;
      background-color: #F3F3F3;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    h1 {
      color: #333;
      margin-top: 0;
    }
    .error {
      color: red;
      margin-bottom: 10px;
    }
    .login-link {
      display: inline-block;
      padding: 20px 40px;
      background-color: #4267B2;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-size: 24px;
    }
    .login-link:hover {
      background-color: #385898;
    }
    .img-rounded {
      border-radius: 50%;
      width: 200px;
      height: 200px;
      display: block;
      margin: 20px auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Facebook Login</h1>
    <?php
    //initialize facebook sdk
    require 'vendor/autoload.php';
    session_start();
    $fb = new Facebook\Facebook([
      'app_id' => '992260571894754', // your app id
      'app_secret' => 'c35456d3723032d2657820c098f1ac18', // your app secret
      'default_graph_version' => 'v2.5',
    ]);
    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email']; // optional
    try {
      if (isset($_SESSION['facebook_access_token'])) {
        $accessToken = $_SESSION['facebook_access_token'];
      } else {
        $accessToken = $helper->getAccessToken();
      }
    } catch(Facebook\Exceptions\facebookResponseException $e) {
      // When Graph returns an error
      echo '<p class="error">Graph returned an error: ' . $e->getMessage() . '</p>';
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      // When validation fails or other local issues
      echo '<p class="error">Facebook SDK returned an error: ' . $e->getMessage() . '</p>';
      exit;
    }
    if (isset($accessToken)) {
      if (isset($_SESSION['facebook_access_token'])) {
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
      } else {
        // getting short-lived access token
        $_SESSION['facebook_access_token'] = (string) $accessToken;
        // OAuth 2.0 client handler
        $oAuth2Client = $fb->getOAuth2Client();
        // Exchanges a short-lived access token for a long-lived one
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
        $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
        // setting default access token to be used in script
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
      }
      // redirect the user to the profile page if it has "code" GET variable
      if (isset($_GET['code'])) {
        header('Location: profile.php');
      }
      // getting basic info about user
      try {
        $profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
        $requestPicture = $fb->get('/me/picture?redirect=false&height=200'); //getting user picture
        $picture = $requestPicture->getGraphUser();
        $profile = $profile_request->getGraphUser();
        $fbid = $profile->getProperty('id');           // To Get Facebook ID
        $fbfullname = $profile->getProperty('name');   // To Get Facebook full name
        $fbemail = $profile->getProperty('email');    //  To Get Facebook email
        $fbpic = "<img src='".$picture['url']."' class='img-rounded'/>";
        # save the user nformation in session variable
        $_SESSION['fb_id'] = $fbid.'</br>';
        $_SESSION['fb_name'] = $fbfullname.'</br>';
        $_SESSION['fb_email'] = $fbemail.'</br>';
        $_SESSION['fb_pic'] = $fbpic.'</br>';
      } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo '<p class="error">Graph returned an error: ' . $e->getMessage() . '</p>';
        session_destroy();
        // redirecting user back to app login page
        header("Location: ./");
        exit;
      } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo '<p class="error">Facebook SDK returned an error: ' . $e->getMessage() . '</p>';
        exit;
      }
    } else {
      // replace website URL same as added in the developers.Facebook.com/apps e.g. if you used http instead of https and used
      $loginUrl = $helper->getLoginUrl('http://localhost:3000/', $permissions);
      echo '<div style="text-align: center;">';
      echo '<a href="' . $loginUrl . '" class="login-link">Inicia sesión con Facebook!</a>';
      echo '</div>';
    }
    ?>
  </div>
</body>
</html>