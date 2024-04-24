
let selectedIngredients = [];

function selectIngredient(element, ingredientName) {
    element.classList.toggle('selected');
    const index = selectedIngredients.indexOf(ingredientName);
    if (index === -1) {
        selectedIngredients.push(ingredientName);
    } else {
        selectedIngredients.splice(index, 1);
    }
    localStorage.setItem('selectedIngredients', JSON.stringify(selectedIngredients));
    mostrarRecetas();
}

function cargarIngredientesSeleccionados() {
    const storedIngredients = localStorage.getItem('selectedIngredients');
    if (storedIngredients) {
        selectedIngredients = JSON.parse(storedIngredients);
        mostrarRecetas();
    }
    document.querySelectorAll('.recetas li').forEach(function(receta) {
        receta.style.display = 'none';
    });
}

cargarIngredientesSeleccionados();

function mostrarRecetas() {
    const arrozConPollo = document.getElementById('arrozConPollo');
    const bandejaPaisa = document.getElementById('bandejaPaisa');
    const changua = document.getElementById('changua')
    const empanada = document.getElementById('empanada');
    const pandebono = document.getElementById('pandebono');
    const sancocho = document.getElementById('sancocho');
    const arepaDeHuevo = document.getElementById('arepaDeHuevo');
    const ajiaco = document.getElementById('ajiaco');
    const papaRellena = document.getElementById('papaRellena');
    const huevoPerico = document.getElementById('huevoPerico');
    const tamales = document.getElementById('tamales');
    const arepaDeQueso = document.getElementById('arepaDeQueso');
    const salchipapa = document.getElementById('salchipapa');

    if (selectedIngredients.includes('pechuga') && selectedIngredients.includes('arroz')) {
        arrozConPollo.style.display = 'inline-block';
    } else {
        arrozConPollo.style.display = 'none';
    }
    if(selectedIngredients.includes('chicharron') && selectedIngredients.includes('huevo')){
        bandejaPaisa.style.display = 'inline-block';
    } else {
        bandejaPaisa.style.display = 'none';
    }
    if(selectedIngredients.includes('huevo') && selectedIngredients.includes('leche')){
        changua.style.display = 'inline-block';
    } else{
        changua.style.display = 'none';
    }
    if(selectedIngredients.includes('harina') && selectedIngredients.includes('carne')){
        empanada.style.display = 'inline-block';
    } else{
        empanada.style.display = 'none';
    }
    if(selectedIngredients.includes('almidonYuca') && selectedIngredients.includes('leche')){
        pandebono.style.display = 'inline-block';
    } else{
        pandebono.style.display = 'none';
    }
    if(selectedIngredients.includes('carne') && selectedIngredients.includes('yuca')){
        sancocho.style.display = 'inline-block';
    } else{
        sancocho.style.display = 'none';
    }
    if(selectedIngredients.includes('huevo') && selectedIngredients.includes('harina')){
        arepaDeHuevo.style.display = 'inline-block';
    } else{
        arepaDeHuevo.style.display = 'none';
    }
    if(selectedIngredients.includes('pechuga') && selectedIngredients.includes('papas')){
        ajiaco.style.display = 'inline-block';
    } else{
        ajiaco.style.display = 'none';
    }
    if(selectedIngredients.includes('papas') && selectedIngredients.includes('carne')){
        papaRellena.style.display = 'inline-block';
    } else{
        papaRellena.style.display = 'none';
    }
    if(selectedIngredients.includes('huevo') && selectedIngredients.includes('tomate')){
        huevoPerico.style.display = 'inline-block';
    } else{
        huevoPerico.style.display = 'none';
    }
    if(selectedIngredients.includes('pechuga') && selectedIngredients.includes('carne')){
        tamales.style.display = 'inline-block';
    } else{
        tamales.style.display = 'none';
    }
    if(selectedIngredients.includes('harina') && selectedIngredients.includes('queso')){
        arepaDeQueso.style.display = 'inline-block';
    } else{
        arepaDeQueso.style.display = 'none';
    }
    if(selectedIngredients.includes('chorizo') && selectedIngredients.includes('papas')){
        salchipapa.style.display = 'inline-block';
    } else{
        salchipapa.style.display = 'none';
    }
}

// Adjuntar evento a los enlaces para limpiar el almacenamiento local antes de seguir el enlace
document.querySelectorAll('a').forEach(function(enlace) {
    enlace.addEventListener('click', function() {
        localStorage.removeItem('selectedIngredients');
    });
});
