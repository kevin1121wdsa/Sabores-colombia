
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
    console.log(selectedIngredients);
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
    console.log(selectedIngredients);
}

cargarIngredientesSeleccionados();
console.log(selectedIngredients);

function mostrarRecetas() {
    console.log(selectedIngredients)
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

    if (selectedIngredients.includes('pechuga') && selectedIngredients.includes('arroz') && selectedIngredients.includes('cebolla') && selectedIngredients.includes('tomate')){
        arrozConPollo.style.display = 'inline-block';
    } else {
        arrozConPollo.style.display = 'none';
    }
    if(selectedIngredients.includes('chicharron') && selectedIngredients.includes('huevo') && selectedIngredients.includes('carne') && selectedIngredients.includes('frijoles') && selectedIngredients.includes('aguacate') && selectedIngredients.includes('platano')){
        bandejaPaisa.style.display = 'inline-block';
    } else {
        bandejaPaisa.style.display = 'none';
    }
    if(selectedIngredients.includes('huevo') && selectedIngredients.includes('leche') && selectedIngredients.includes('cebollaLarga')){
        changua.style.display = 'inline-block';
    } else{
        changua.style.display = 'none';
    }
    if(selectedIngredients.includes('harina') && selectedIngredients.includes('carne') && selectedIngredients.includes('papas')){
        empanada.style.display = 'inline-block';
    } else{
        empanada.style.display = 'none';
    }
    if(selectedIngredients.includes('almidonYuca') && selectedIngredients.includes('leche') && selectedIngredients.includes('queso') && selectedIngredients.includes('huevo')){
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
    if(selectedIngredients.includes('pechuga') && selectedIngredients.includes('papas') && selectedIngredients.includes('mazorca')){
        ajiaco.style.display = 'inline-block';
    } else{
        ajiaco.style.display = 'none';
    }
    if(selectedIngredients.includes('papas') && selectedIngredients.includes('carne') && selectedIngredients.includes('cebolla') && selectedIngredients.includes('huevo') && selectedIngredients.includes('harina')){
        papaRellena.style.display = 'inline-block';
    } else{
        papaRellena.style.display = 'none';
    }
    if(selectedIngredients.includes('huevo') && selectedIngredients.includes('tomate') && selectedIngredients.includes('cebolla')){
        huevoPerico.style.display = 'inline-block';
    } else{
        huevoPerico.style.display = 'none';
    }
    if(selectedIngredients.includes('pechuga') && selectedIngredients.includes('carne') && selectedIngredients.includes('harina') && selectedIngredients.includes('huevo')){ 
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

document.querySelectorAll('a').forEach(function(enlace) {
    enlace.addEventListener('click', function() {
        localStorage.removeItem('selectedIngredients');
    });
});
