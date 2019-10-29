function añadirNodo() {
    let lista = document.getElementById("lista");
    let elementoLista = document.createTextNode("Hola mundo");
    let li = document.createElement("li");
    li.appendChild(elementoLista)
    lista.appendChild(li)
}