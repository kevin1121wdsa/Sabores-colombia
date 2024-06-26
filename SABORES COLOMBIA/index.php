<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores Colombia</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    </style>
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
                    <li><a href ="../bienvenida.php">Cerrar sesión</a><li></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <ul class="productos">
            <li onclick="changeBorderColor(this); selectIngredient(this, 'huevo')">
                <h2>Huevo</h2>
                <img src="imagenes/egg.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'arroz')">
                <h2>Arroz</h2>
                <img src="imagenes/rice.png">

            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'pechuga')">
                <h2>Pollo</h2>
                <img src="imagenes/pechuga.png">

            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'harina')">
                <h2>Harina</h2>
                <img src="imagenes/flour.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'cebolla')">
                <h2>Cebolla</h2>
                <img src="imagenes/onion.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'tomate')">
                <h2>Tomate</h2>
                <img src="imagenes/tomato.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'papas')">
                <h2>Papas</h2>
                <img src="imagenes/potato.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'leche')">
                <h2>Leche</h2>
                <img src="imagenes/milk.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'platano')">
                <h2>Platano</h2>
                <img src="imagenes/banana.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'carne')">
                <h2>Carne</h2>
                <img src="imagenes/meat.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'zanahoria')">
                <h2>Zanahoria</h2>
                <img src="imagenes/carrot.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'aguacate')">
                <h2>Aguacate</h2>
                <img src="imagenes/aguacate.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'lechuga')">
                <h2>Lechuga</h2>
                <img src="imagenes/lechuga.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'manzana')">
                <h2>Manzana</h2>
                <img src="imagenes/manzana.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'yuca')">
                <h2>Yuca</h2>
                <img src="imagenes/yuca.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'azucar')">
                <h2>Azúcar</h2>
                <img src="imagenes/Azucar.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'sal')">
                <h2>Sal</h2>
                <img src="imagenes/Sal.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'pimienta')">
                <h2>Pimienta</h2>
                <img src="imagenes/Pimienta.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'aceite')">
                <h2>Aceite</h2>
                <img src="imagenes/oil.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'ajo')">
                <h2>Ajo</h2>
                <img src="imagenes/ajo.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'pimentonRojo')">
                <h2>Pimenton Rojo</h2>
                <img src="imagenes/pimentonRojo.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'pimentonVerde')">
                <h2>Pimenton Verde</h2>
                <img src="imagenes/pimentonVerde.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'pimentonAmarillo')">
                <h2>Pimenton Amarillo</h2>
                <img src="imagenes/pimentonAmarillo.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'cebollaLarga')">
                <h2>Cebolla Larga</h2>
                <img src="imagenes/cebollaLarga.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'Cilantro')">
                <h2>Cilantro</h2>
                <img src="imagenes/cilantro.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'mantequilla')">
                <h2>Mantequilla</h2>
                <img src="imagenes/mantequilla.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'chorizo')">
                <h2>Chorizo</h2>
                <img src="imagenes/chorizo.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'frijoles')">
                <h2>Frijoles</h2>
                <img src="imagenes/frijoles.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'queso')">
                <h2>Queso</h2>
                <img src="imagenes/queso.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'almidonYuca')">
                <h2>Almidon de Yuca</h2>
                <img src="imagenes/almidonYuca.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'mazorca')">
                <h2>Mazorca</h2>
                <img src="imagenes/mazorca.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'migaPan')">
                <h2>Miga de Pan</h2>
                <img src="imagenes/migaPan.png">
            </li>
            <li onclick="changeBorderColor(this); selectIngredient(this, 'chicharron')">
                <h2>Chicharron</h2>
                <img src="imagenes/chicharron.png">
            </li>
        </ul>
        
        <button onclick="window.location.href = 'recetas.php';"  class="btnSiguiente">Siguiente</button>
    </main>
    <script src="home.js"></script>
    <script src="ingredientes.js"></script>
</body>

</html>