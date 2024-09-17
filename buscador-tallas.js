document.getElementById('buscar').addEventListener('click', function() {
    var ancho = document.getElementById('ancho').value;
    var perfil = document.getElementById('perfil').value;
    var radio = document.getElementById('radio').value;

    var resultado = "";

    // Lógica de búsqueda
    if (ancho === '145' && perfil === '80' && radio === '13') {
        resultado = "Size S";
    } else if (ancho === '195' && perfil === '65' && radio === '15') {
        resultado = "Size M";
    } else if (ancho === '235' && perfil === '40' && radio === '18') {
        resultado = "Size L";
    } else {
        resultado = "Tamaño no encontrado";
    }

    document.getElementById('resultado').innerHTML = resultado;
});
