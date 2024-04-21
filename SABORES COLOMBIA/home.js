function changeBorderColor(element) {
    var currentColor = element.style.borderColor || 'transparent'; // Toma el color actual del borde o establece uno por defecto
    var newColor = currentColor === 'rgb(21, 37, 138)' ? 'rgb(0,0,0)' : 'rgb(21, 37, 138)'; // Define el nuevo color del borde al hacer clic
    element.style.borderColor = newColor; // Cambia el color del borde al nuevo
}

var listaProductos = document.querySelectorAll('.productos li');

listaProductos.forEach(function(item) {
    item.addEventListener('mouseenter', function() {
        // Cambia el color de fondo al pasar el cursor
        this.style.backgroundColor = 'rgb(230,255,255)';
    });

    item.addEventListener('mouseleave', function() {
        // Restaura el color de fondo cuando el cursor se aleja
        this.style.backgroundColor = 'transparent';
    });
});
