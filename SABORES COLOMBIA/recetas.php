<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Recetas</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    </style>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="estilos.css">
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
                    <li><a href="../CAJA COMENTARIOS/index2.php">FORO</a></li>
                    <li><a href="../index.php" class="btn-1">LOGIN</a></li>
                    <li><a href ="../bienvenida.php">Cerrar sesión</a><li>

                </ul>
            </nav>
        </div>
    </header>
    <div class="icons2" id="animatedElement">
        <i class='bx bxl-google'></i>
        <i class='bx bxl-facebook-circle'></i>
        <i class='bx bxl-linkedin'></i>
    </div>
    <div class="recetas" >
        <h2 style="text-align: center;">SELECCIONA LA RECETA PARA VER MÁS</h2>
            <button onclick="mostrarRecetas()">BUSCAR</button>
            <ul>
                <li id="bandejaPaisa" onclick="window.location.href = 'bandejapaisa.php';">
                    <h2>Bandeja Paisa</h2>
                    <img src="imagenes/bandejapaisa.png">
    
                </li>
                <li  id="arrozConPollo" onclick="window.location.href = 'arrozconpollo.php';">
                    <h2>Arroz Con Pollo</h2>
                    <img src="imagenes/arrozpollo.png">
                </li>
                <li id="changua" onclick="window.location.href = 'changua.php';">
                    <h2>Changua</h2>
                    <img src="imagenes/changua.png">
                </li>
                <li id="empanada" onclick="window.location.href = 'empanada.php';">
                    <h2>Empanada</h2>
                    <img src="imagenes/empanadas.png">
                </li>
                <li id="pandebono" onclick="window.location.href = 'pandebono.php';">
                    <h2>Pandebono</h2>
                    <img src="imagenes/pandebono.png">
                </li>
                <li id="sancocho" onclick="window.location.href = 'sancocho.php';">
                    <h2>Sancocho</h2>
                    <img src="imagenes/sancocho.png">
                </li>
                <li id="arepaDeHuevo" onclick="window.location.href = 'arepadehuevo.php';">
                    <h2>Arepa de Huevo</h2>
                    <img src="imagenes/arepahuevo.png">
                </li>
                <li id="ajiaco" onclick="window.location.href = 'ajiaco.php';">
                    <h2>Ajiaco</h2>
                    <img src="imagenes/ajiaco.png">
                </li>
                <li id="papaRellena" onclick="window.location.href = 'paparellena.php';">
                    <h2>Papa Rellena</h2>
                    <img src="imagenes/papaRellena.png">
                </li>
                <li id="huevoPerico" onclick="window.location.href = 'huevospericos.php';">
                    <h2>Huevos Perico</h2>
                    <img src="imagenes/Perico.png">
                </li>
                <li id="tamales" onclick="window.location.href = 'tamales.php';">
                    <h2>Tamales</h2>
                    <img src="imagenes/tamal.png">
                </li>
                <li id="arepaDeQueso" onclick="window.location.href = 'arepadequeso.php';">
                    <h2>Arepa de queso</h2>
                    <img src="imagenes/ArepaQueso.png">
                </li>
                <li id="salchipapa" onclick="window.location.href = 'salchipapa.php';">
                    <h2>Salchipapa</h2>
                    <img src="imagenes/salchipapa.png">
                </li>
            </ul>
    </div>

</body>
<script src="ingredientes.js"></script>
</body>

</html>