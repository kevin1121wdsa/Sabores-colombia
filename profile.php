<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login with Facebook in PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="estilos-carrousel.css">
</head>
<body>
  <div class="PROFILE">
  <?php if($_SESSION['fb_id']) { ?>
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <h1>Hello <?php echo $_SESSION['fb_name']; ?></h1>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <?php echo $_SESSION['fb_pic']?>
            <div class="card-body">
              <h4 class="card-title"><?php echo $_SESSION['fb_name']; ?></h4>
              <p class="card-text"><?php echo $_SESSION['fb_id']; ?></p>
              <p class="card-text"><?php echo $_SESSION['fb_email']; ?></p>
              <a href="logoutfb.php" class="btn btn-primary">Logout</a>
              <a href="http://localhost:3000/login-register/login-register/SABORES%20COLOMBIA/pantallaInicio.php" class="btn-siguiente-sabores">Siguiente</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>


  <style>
    .PROFILE{
      margin-left: 540px;

      
    }
    .btn-siguiente-sabores {
      margin-left: 10px;
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      text-align: center;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .btn-siguiente-sabores:hover {
      background-color: #0056b3;
      color: white;
      text-decoration: none;

    }

    .btn-siguiente-sabores:active {
      background-color: #003d80;
    }

  </style>
</body>
</html>
