function añadirNodo() {
    let lista = document.getElementById("lista");
    let elementoLista = document.createTextNode("Hola mundo");
    let li = document.createElement("li");
    //lista.appendChild(elementoLista)

    li.appendChild(elementoLista)
    document.body.appendChild(li)
    lista.appendChild(li)
}