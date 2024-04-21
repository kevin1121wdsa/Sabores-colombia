function recetas() {
    const apiKey = '1415ae930635409e90e4ea3026d495c5';
    const ingredientesInput = document.getElementById('ingredientes');
    const ingredientes = ingredientesInput.value; // Obtener el valor del input
    
    const url = `https://api.spoonacular.com/recipes/findByIngredients?ingredients=${ingredientes}&apiKey=${apiKey}`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            const recetasDiv = document.getElementById('recetas');
            recetasDiv.innerHTML = '';
            
            data.forEach(recipe => {
                const recipeElement = document.createElement('div');
                recipeElement.classList.add('receta');
                recipeElement.innerHTML = `
                    <h2>${recipe.title}</h2>
                    <img src="${recipe.image}" alt="${recipe.title}">
                `;
                recetasDiv.appendChild(recipeElement);
            });
        })
        .catch(error => {
            console.error('Error al obtener recetas:', error);
        });
}

document.addEventListener('DOMContentLoaded', function() {
    const recetasBtn = document.getElementById('recetas-btn');
    recetasBtn.addEventListener('click', recetas);

    const ingredientesInput = document.getElementById('ingredientes');
    ingredientesInput.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            recetas();
        }
    });
});