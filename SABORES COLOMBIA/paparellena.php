<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    </style>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="estilos.css">
    <title>Bandeja Paisa</title>
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
    </header>

    <style>
        .video {
            margin-top: 150px;
        }
        .descripcionPapaRellena{
            text-align: center;;
            border: 2px solid #47c9e9;
            border-radius: 20px;
            margin-right: 50px;
            margin-top: 10px;
            padding: 20px;
        }
        .ingredientes{
            margin-top: -50px;
        }
    </style>
    
    
    <div class="ingredientes">
        
        <h2>Ingredientes</h2>
            <ul>
                <li>Papas</li>
                <li>Carne</li>
                <li>Cebolla</li>
                <li>Ajo</li>
                <li>Miga de pan</li>
                <li>Huevo</li>
            </ul>
    </div>
    <div class="video">
        <h2 class="titulo">VIDEO TUTORIAL PARA LA PAPA RELLENA</h1>
        <video controls width="600">
            <source src="imagenes/videoprueba.mp4" type="video/mp4">
        </video>
        <div class="container">
            <style>
                .container{
                    margin-top: 30px;
                    margin-left: 0px;
                    align-items: center;
                }
            </style>
            <div class="row">

        <form action="" method="post">

        <div>
            <h3>CALIFICA LA RECETA</h3>
        </div>

        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>

            <div class="rateyo" id= "rating"
            data-rateyo-rating="4"
            data-rateyo-num-stars="5"
            data-rateyo-score="3">
            </div>

        <span class='result'>0</span>
        <input type="hidden" name="rating">

        </div>

        <div><input type="submit" name="add"> </div>

    </form>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

    <script>


        $(function () {
            $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
                var rating = data.rating;
                $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
                $(this).parent().find('.result').text('rating :'+ rating);
                $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
            });
        });

    </script>
    </body>

    </html>
    <?php
    require 'db_connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        $rating = $_POST["rating"];

        $sql = "INSERT INTO ratee (name,rate) VALUES ('$name','$rating')";
        if (mysqli_query($conn, $sql))
        {
            echo "";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    ?>


        </div>
        <div class="descripcionPapaRellena">
            <p>La papa rellena colombiana es un delicioso plato típico de la gastronomía colombiana que consiste en una papa cocida, aplastada y rellena con un sabroso guiso, luego empanizada y frita hasta obtener una capa dorada y crujiente por fuera, mientras que por dentro conserva un relleno jugoso y lleno de sabor.</p>
        </div>
        
    </body>

    </html>