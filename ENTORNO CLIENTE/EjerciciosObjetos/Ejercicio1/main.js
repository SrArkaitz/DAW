let contactos = [];
let organizaciones = [];
let numPersona = 0;
let numOrg = 0;
let contador = 4;
function mostrar(objeto) {
    let principal = document.getElementById("Principal");
    let añadir = document.getElementById("añadir");
    let buscar = document.getElementById("buscar");
    let organizacion = document.getElementById("organizacionB")
    if (objeto == "principal") {
        añadir.style.visibility = "hidden";
        añadir.style.display = "none";
        buscar.style.visibility = "hidden";
        buscar.style.display = "none";
        principal.style.visibility = "visible";
        principal.style.display = "initial";
        vaciarInput();
    } else if (objeto == "buscar") {
        añadir.style.visibility = "hidden";
        añadir.style.display = "none";
        principal.style.visibility = "hidden";
        principal.style.display = "none";
        buscar.style.visibility = "visible";
        buscar.style.display = "initial";
        vaciarInput();
        for (let i = 1; i < organizacion.children.length; i++) {
            organizacion.children[i].remove();

        }
        agregarOrganizaciones();

    } else {
        añadir.style.visibility = "visible";
        añadir.style.display = "initial";
        principal.style.visibility = "hidden";
        principal.style.display = "none";
        buscar.style.visibility = "hidden";
        buscar.style.display = "none";
        vaciarInput();
    }
}
/**
 * Función para añadir un contacto nuevo
 */
function añadir() {
    let nombre = document.getElementById("nombre");
    let organizacion = document.getElementById("organizacion");
    let formulario = document.getElementById("camposFormulario");
    let movil = document.getElementById("movil");
    let campos = [];
    let fallo = document.getElementById("falloAñadir")
    let parrafoFallo = document.createElement("p");
    let mensajeFallo;
    let existeUsuario = false;
    let haFallado = false;
    var expRegNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
    //var expRegMovil = /^([0-9]{5})+(-){0,1}([0-9]{6})$/;
    var expRegMovil = /^(\+34|0034|34)?[6|7|8|9][0-9]{8}$/;

    if (nombre.value != "") {
        if (movil.value != "") {
            if (expRegNombre.exec(nombre.value)) {
                if (expRegMovil.exec(movil.value)) {
                    //Crear contacto
                    for (let x = 0; x < contactos.length; x++) {
                        if (contactos[x].nombre == nombre.value && contactos[x].movil) {
                            existeUsuario = true;
                        }

                    }
                    if (existeUsuario == false) {


                        try {
                            for (let i = 4; i < contador; i++) {
                                campos[i - 4] = document.getElementById("campo" + i).value;
                            }
                            contactos[numPersona] = new Contactos(nombre.value, organizacion.value, movil.value, campos);
                            numPersona++;

                            //guardar organizacion
                            try {
                                if (organizacion.value != "") {
                                    let hayOrganizacion = false;
                                    for (let x = 0; x < organizaciones.length; x++) {
                                        if (organizaciones[x].nombre == organizacion.value) {
                                            hayOrganizacion = true
                                        }
                                    }
                                    if (hayOrganizacion == false) {
                                        alert(organizacion.value)
                                        organizaciones[numOrg] = new Organizacion(organizacion.value);
                                        numOrg++;
                                    }
                                }
                            } catch (error) {
                                alert("No se pudo guardar la organización");
                                vaciarInput();

                            }

                        } catch (error) {
                            alert("Lo sentimos, no se pudo agregar el contacto");
                            vaciarInput();
                        }
                    }else{
                        alert("El usuario ya existe");
                        vaciarInput();
                    }
                } else {
                    haFallado = true;
                    mensajeFallo = "Fallo en el teléfono, introduzca un número de teléfono correcto";
                }
            } else {
                haFallado = true;
                mensajeFallo = "Fallo en el nombre, introduzcalo de nuevo";
            }
        } else {
            haFallado = true;
            mensajeFallo = "Por favor, debe indicar el número de teléfono";
        }
    } else {
        haFallado = true;
        mensajeFallo = "Por favor, debe indicar su nombre";
    }
    if (haFallado == true) {
        let textoFallo = document.createTextNode(mensajeFallo);
        parrafoFallo.appendChild(textoFallo)
        document.body.appendChild(parrafoFallo)
        fallo.appendChild(parrafoFallo)
    }

}


//Añadir campo al formulario
function añadirCampo() {
    let nomCampo = prompt("Nombre del campo");

    let formulario = document.getElementById("camposFormulario");
    let p = document.createElement("p");
    p.id = "p" + contador;
    let input = document.createElement("input");
    input.id = "campo" + contador;
    let pText = document.createTextNode(nomCampo + ": ");

    p.appendChild(pText);
    p.appendChild(input);
    formulario.appendChild(p);
    contador++;
}

function agregarOrganizaciones() {
    let organizacionPoner = document.getElementById("organizacionB");

    for (let i = 0; i < organizaciones.length; i++) {
        let option = document.createElement("option")
        let contenidoOption;
        contenidoOption = document.createTextNode(organizaciones[i].nombre)

        option.appendChild(contenidoOption);
        organizacionPoner.appendChild(option);
    }
}

function buscar(organizacion) {
    let nombreBuscar = document.getElementById("nombreB").value;
    let organizacionBuscar = document.getElementById("organizacionB").value;
    try {
        for (let i = 0; i < contactos.length; i++) {
            if (contactos[i].nombre == nombreBuscar && contactos[i].organizacion == organizacionBuscar) {
                alert("El número de teléfono de " + contactos[i].nombre + " es: " + contactos[i].movil);
            }
        }
    } catch (error) {
        alert("No se ha encontrado contacto")
    }

}
function vaciarInput(){
    document.getElementById("nombre").value = "";
    document.getElementById("nombreB").value = "";
    document.getElementById("movil").value = "";
    document.getElementById("organizacion").value = "";
}
