let tipos = ["Ciencia ficción", "Drama", "Terror", "Policial", "Aventura", "Comedia", "Accion", "Romance", "Biografia", "Añadir tipo"] //Se cogerian de la base de datos pero al no haber pongo un array...
let contador = 1;
let contactosAñadidos = 0;
let contadorLibros = 0;
let autores = [];
let libros = [];
let autoresLibro = [];

/**
 * Función que iniciará todas las funciones que se ejecutarán al principio
 */
function inicio() {
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

function enviar() {
    let titulo = document.getElementById("titulo").value;
    let isbn = document.getElementById("isbn").value;
    let tipo = document.getElementById("tipo").value;
    let existeAutor = false;

    //let autoresDiv = document.getElementById("autores");
    let dni = document.getElementById("dni0").value;
    let nombre = document.getElementById("nombre0").value;
    let ejemplares = document.getElementById("ejemplares").value;
    let dis1 = document.getElementById("dis1").checked;
    let dis2 = document.getElementById("dis2").checked;
    let disponible;
    let fecha;
    let expRIsbn = /ISBN\x20(?=.{13}$)\d{1,5}([- ])\d{1,7}\1\d{1,6}\1(\d|X)$/
    let posicionAutor;
    if (titulo != "") {
        if (isbn != "" || expRIsbn.exec(isbn)) {
            if (tipo != "Añadir tipo") {

                //AñadirAutor
                if (dni != "" && nombre != "") {
                    try {
                        existeAutor = false;
                        for (let x = 0; x < autores.length; x++) {

                            if (dni == autores[x].dni && nombre == autores[x].nombre) {
                                existeAutor = true;
                                posicionAutor = x;
                            }
                        }
                        if (existeAutor == false) {
                            //Si no existe lo añadimos como objeto al array de autores y lo añadimos al array que luego añadiremos al objeto libro
                            autores[contactosAñadidos] = new Autor(nombre, dni);
                            contactosAñadidos++;
                            autoresLibro[autoresLibro.length] = autores[autores.length];
                            alert("El autor se ha añadido correctamente")
                            masAutores();
                        } else {
                            //Si existe lo buscamos en el array lo añadimos directamente
                            autoresLibro[autoresLibro.length] = autores[posicionAutor];
                            alert("El autor se ha añadido correctamente")
                            masAutores();
                        }
                    } catch (error) {
                        alert("No se ha podido añadir al autor");
                    }
                    if (ejemplares != "") {
                        if (dis1 != false || dis2 != false) {
                            if (dis1 == true) {
                                disponible = true;
                                fecha = new Date();
                                let existeLibro = false;
                                for (let z = 0; z < libros.length; z++) {
                                    if (libros[z].isbn == isbn) {
                                        existeLibro == true;
                                    }
                                }
                                if (existeLibro == false) {
                                    try {
                                        libros[contadorLibros] = new Libro(titulo, isbn, tipo, ejemplares, disponible, fecha, autoresLibro)
                                        libros[contadorLibros].setAutores(autoresLibro);
                                        alert("Se ha añadido el libro correctamente")
                                        contadorLibros++;
                                    } catch (error) {
                                        alert("No se pudo añadir el libro")
                                    }
                                } else {
                                    alert("Ya existe el libro")
                                }

                            } else {
                                disponible = false;
                                fecha = document.getElementById("fecha").value;
                                try {
                                    libros[contadorLibros] = new Libro(titulo, isbn, tipo, ejemplares, disponible, fecha)
                                    libros[contadorLibros].setAutores(autoresLibro);
                                    contadorLibros++;
                                    alert("El libro se ha añadido correctamente")
                                } catch (error) {
                                    alert("No se pudo añadir el libro")
                                }
                            }
                        } else {
                            alert("Por favor, seleccione la disponibilidad")
                        }
                    } else {
                        alert("Por favor, rellene el número de ejemplares");
                    }
                }
            } else {
                alert("Por favor, seleccione un tipo válido");
            }
        } else {
            alert("Por favor, rellene el ISBN correctamente");
        }
    } else {
        alert("Por favor, rellene el título");
    }
}
function añadirAutor() {
    let autores = document.getElementById("autores")
    let input = document.createElement("input");
    let br1 = document.createElement("br");
    let br2 = document.createElement("br");
    input.id = "dni" + contador;
    let input2 = document.createElement("input");
    input.id = "nombre" + contador;
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
function masAutores() {
    let contadorAutores = 1;
    let posicionAutor = 0;
    let nombre;
    let dni;
    while (document.getElementById("dni" + contadorAutores)) {
        nombre = document.getElementById("nombre" + contadorAutores).value
        dni = document.getElementById("dni" + contadorAutores).value

        try {
            let existeAutor = false;
            for (let x = 0; x < autores.length; x++) {

                if (dni == autores[x].dni) {
                    existeAutor = true;
                    posicionAutor = x;
                }
            }
            if (existeAutor == false) {
                //Si no existe lo añadimos como objeto al array de autores y lo añadimos al array que luego añadiremos al objeto libro
                autores[contactosAñadidos] = new Autor(nombre, dni);
                contactosAñadidos++;
                autoresLibro[autoresLibro.length] = autores[autores.length];
                alert("El autor se ha añadido correctamente")
            } else {
                //Si existe lo buscamos en el array lo añadimos directamente
                autoresLibro[autoresLibro.length] = autores[posicionAutor];
                alert("El autor se ha añadido correctamente")
            }
        } catch (error) {
            alert("No se ha podido añadir todos los autores");
        }
        contadorAutores++;
    }
}