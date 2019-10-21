function añadirNodo() {
    let parrafo = document.getElementById("parrafo");
    let elementoLista = document.createTextNode("Hola mundo");
    parrafo.appendChild(elementoLista)
}
function añadirNodoPrincipio() {
    let parrafo = document.getElementById("parrafo");
    let elementoLista = document.createTextNode("Yo Angelo");
    parrafo.insertBefore(elementoLista, parrafo.firstChild)
}

function añadirNodoMedio() {
    let parrafo = document.getElementById("parrafo");
    let elementoLista = document.createTextNode("Yo Angelo");
    parrafo.insertBefore(elementoLista, parrafo.childNodes[3])
}

function borrarNodoPrimero() {
    let parrafo = document.getElementById("parrafo");

    parrafo.removeChild(parrafo.firstChild);
}

function borrarNodoUltimo() {
    let parrafo = document.getElementById("parrafo");

    parrafo.removeChild(parrafo.lastChild);
}

function borrarNodoMedio(posicion) {
    let parrafo = document.getElementById("parrafo");

    parrafo.removeChild(parrafo.childNodes[posicion]);
}