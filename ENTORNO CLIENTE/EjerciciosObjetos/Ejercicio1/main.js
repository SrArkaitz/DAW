let persona;

function mostrar(objeto) {
    let principal = document.getElementById("Principal");
    let añadir = document.getElementById("añadir");
    let buscar = document.getElementById("buscar");
    if (objeto == "principal") {
        añadir.style.visibility = "hidden";
        añadir.style.display = "none";
        buscar.style.visibility = "hidden";
        buscar.style.display = "none";
        principal.style.visibility = "visible";
        principal.style.display = "initial";
    } else if (objeto == "buscar") {
        añadir.style.visibility = "hidden";
        añadir.style.display = "none";
        principal.style.visibility = "hidden";
        principal.style.display = "none";
        buscar.style.visibility = "visible";
        buscar.style.display = "initial";


    } else {
        añadir.style.visibility = "visible";
        añadir.style.display = "initial";
        principal.style.visibility = "hidden";
        principal.style.display = "none";
        buscar.style.visibility = "hidden";
        buscar.style.display = "none";
    }
}

function añadir() {
    let nombre = document.getElementById("nombre");
    let organizacion = document.getElementById("organizacion");
    let formulario = document.getElementById("formulario");
    let camposAñadidos = document.getElementById("camposNuevos")
    let movil = document.getElementById("movil");
    let fallo = document.getElementById("falloAñadir")
    let parrafoFallo = document.createElement("p");
    let mensajeFallo;
    let haFallado = false;
    var expRegNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
    //var expRegMovil = /^([0-9]{5})+(-){0,1}([0-9]{6})$/;
    var expRegMovil = /^(\+34|0034|34)?[6|7|8|9][0-9]{8}$/;

    if (nombre.value != "") {
        if (movil.value != "") {
            if (expRegNombre.exec(nombre.value)) {
                if (expRegMovil.exec(movil.value)) {
                    //Creando Objeto
                    try {
                        let campos = [];
                        for (let i = 4; i < camposAñadidos.children.length; i++) {
                            campos[i-4] = camposAñadidos.children[i].value;   
                        }
                        persona = new Contactos(nombre.value, organizacion.value, movil.value, campos)
                    } catch (error) {
                       console.log(error);
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
function añadirCampo(){
    let nombreLabel = prompt("Nombre del campo que desea añadir");
    let formulario = document.getElementById("camposNuevos");
    let pInsertar = document.createElement("p");
    let labelTexto = document.createTextNode(nombreLabel + ": ")
    pInsertar.appendChild(labelTexto);
    formulario.appendChild(pInsertar);

    let inputInsertar = document.createElement("input");
    inputInsertar.DOCUMENT_TYPE_NODE  = Text;
    formulario.appendChild(inputInsertar);

    let br = document.createElement("br")
    formulario.appendChild(br)
    formulario.appendChild(br)

}

function buscar() {
    let nombre = document.getElementById("nombreB");
    let organizacionBuscar = document.getElementById("organizacionB");

    for (let i = 0; i < persona.length; i++) {
        if (persona[i].nombre.toLowerCase() == nombre.toLowerCase()) {
            alert("yes")
        }
    }
}
