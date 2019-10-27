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
                    if (organizacion.value != "") {
                        let obj = new Contactos();
                        let propiedades = "";
                        for (let i = 0; i < formulario.children.length; i++) {
                            if (formulario.children[i].nodeName.toLowerCase() == "input" && formulario.children[i].nodeType == "text") {
                                if (formulario.children[i] === formulario.lastChild) {
                                    propiedades += '"' + formulario.children[i - 1].value + '" : "' + formulario.children[i].value
                                } else {
                                    alert(formulario.children[i - 1].value)
                                    propiedades += '"' + formulario.children[i - 1].value + '" : "' + formulario.children[i].value + ", "
                                }
                            }
                        }
                        obj.persona = {propiedades}
                    } else {
                        let obj = new Contactos();
                        let propiedades = "";
                        for (let i = 0; i < formulario.children.length; i++) {
                            if (formulario.children[i].nodeName.toLowerCase() == "input" && formulario.children[i].id != "organizacion" && formulario.children[i].nodeType == "text") {
                                if (formulario.children[i] === formulario.lastChild) {
                                    propiedades += '"' + formulario.children[i - 1].value + '" : "' + formulario.children[i].value;
                                } else {
                                    alert(formulario.children[i - 1].value)
                                    propiedades += '"' + formulario.children[i - 1].value + '" : "' + formulario.children[i].value + ", ";
                                }
                            }
                        }
                        obj.persona = {propiedades}
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
    let formulario = document.getElementById("formulario");
    let labelInsertar = document.createElement("label");
alert(formulario.length)
    labelInsertar.appendChild = nombreLabel;
    //document.body.appendChild(labelInsertar)
    formulario.insertBefore(labelInsertar, formulario.childNodes[formulario.length]);

    let inputInsertar = document.createElement("input");
    inputInsertar.nodeType = Text;
    //document.body.appendChild(inputInsertar)
    formulario.insertBefore(inputInsertar, formulario.childNodes[formulario.length]);
    let br = document.createElement("br");
    formulario.insertBefore(br, formulario.childNodes[formulario.length]);
}

function buscar(organizacion) {
    let nombre = document.getElementById("nombreB");
    let organizacionBuscar = document.getElementById("organizacionB");
}
