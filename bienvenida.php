<?php 
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        //header("Location: index.php");
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .header-container {
            background-color: #ADD8E6;
            padding: 20px 0;
            text-align: center;
        }

        .header-container img {
            max-width: 500px;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 20px 20px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #000000;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #000000;
            background-color: #ADD8E6;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<header class="header-container">
    <img src="Saborescolombia.png" alt="logo de SaboresColombia">
</header>
    <div class="container">
        <h1>HAS CERRADO SESIÓN DE SABORES COLOMBIA,
            ¡VUELVE PRONTO!</h1>
        <a href ="php/cerrar_sesion.php">Cerrar sesión</a>
    </div>

</body>
</html>
