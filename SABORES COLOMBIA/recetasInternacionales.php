<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas internacionales</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    </style>
    <link rel="stylesheet" href="estilos.css">
</head>
<header>
    <h1><img src="imagenes/Saborescolombia.png" alt="logo de SaboresColombia"></h1>
    <div class="cajaHeader">
        <nav>
            <ul>
                <li><a href="pantallaInicio.php">Inicio</a></li>
                <li><a href="index.php">INGREDIENTES</a></li>
                <li><a href="recetasInternacionales.php">RECETAS INTERNACIONALES</a></li>
                <li><a href="../CAJA COMENTARIOS/index2.php">FORO</a></li>
                <li><a href="../index.php" class = "btn-1">LOGIN</a></li>
                <li><a href ="../bienvenida.php">Cerrar sesión</a><li></li>

            </ul>
        </nav>
    </div>
</header>

<body>
    <div class="container">
        <h1>Recetas con Ingredientes</h1>
        <input type="text" id="ingredientes" placeholder="Ingresar ingredientes en inglés y separados por comas">
        <button id="recetas-btn" >Buscar Recetas</button>
        <div id="recetas"></div>
        <a href="recetasInternacionales.php" class="btnInternacionales">Volver</a>
    </div>
    
</body>
<script src="api.js"></script>
</html>