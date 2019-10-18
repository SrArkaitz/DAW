function añadirNodo() {
    let parrafo = document.getElementById("parrafo");
    let elementoLista = document.createTextNode("Hola mundo");
    parrafo.appendChild(elementoLista)
}

function borrarNodo() {
    let parrafo = document.getElementById("parrafo");
    while (element.firstChild) {
        parrafo.removeChild(element.firstChild);
      }
}