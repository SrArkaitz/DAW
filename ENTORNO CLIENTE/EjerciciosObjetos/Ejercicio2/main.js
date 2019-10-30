let tipos=  ["Ciencia ficción", "Drama", "Terror", "Policial", "Aventura", "Comedia", "Accion", "Romance", "Biografia", "Añadir tipo"] //Se cogerian de la base de datos pero al no haber pongo un array...
let contador = 1;
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

function enviar(){
    let titulo = document.getElementById("titulo").value;
    let isbn = document.getElementById("element").value;
    let tipo = document.getElementById("tipo").value;
    let dni = document.getElementById("dni").value;
    let nombre = document.getElementById("nombre").value;
    if (titulo == "") {
        
    }
}
function añadirAutor(){
    let autores = document.getElementById("autores")
    let input = document.createElement("input");
    let br1 = document.createElement("br");
    let br2 = document.createElement("br");
    input.id = "dni"+contador;
    let input2 = document.createElement("input");
    input.id = "nombre"+contador;
    let texto1 = document.createTextNode("DNI");
    let texto2 = document.createTextNode("Nombre y apellidos");
    let label = document.createElement("label");
    let label2 = document.createElement("label");
    label.appendChild(texto1);
    label2.appendChild(texto2);
    autores.appendChild(br1);
    autores.appendChild(label);
    autores.appendChild(input);
    autores.appendChild(br2);
    autores.appendChild(label2);
    autores.appendChild(input2);
    contador++;
}