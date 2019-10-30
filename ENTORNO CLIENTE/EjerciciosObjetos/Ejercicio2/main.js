let tipos=  ["Ciencia ficción", "Drama", "Terror", "Policial", "Aventura", "Comedia", "Accion", "Romance", "Biografia", "Añadir tipo"] //Se cogerian de la base de datos pero al no haber pongo un array...

/**
 * Función que iniciará todas las funciones que se ejecutarán al principio
 */
function inicio(){
    rellenarTipo();
}

/**
 * Función para rellenar los tipos al iniciar la página
 */
function rellenarTipo() {    
    let tipo = document.getElementById("tipo")
    for (let i = 0; i < tipos.length; i++) {
        let option = document.createElement("option");
        let textOption = document.createTextNode(tipos[i]);
        option.appendChild(textOption);
        tipo.appendChild(option);
    }
}

function comprobarAñadir() {
    let tipo = document.getElementById("tipo")
    if (tipo.value == "Añadir tipo") {
        let opcionNueva = prompt("Introduzca opción nueva")
        let option = document.createElement("option");
        let textOption = document.createTextNode(opcionNueva);
        option.appendChild(textOption);
        tipo.appendChild(option);
    }
}