function carga() {


    var enlaces = document.getElementsByTagName("a");
    //Número de enlaces
    alert("Número de enlaces de la página: "+enlaces.length)
    //Penúltimo enlace
    var penultimo = enlaces[enlaces.length - 2].href
    alert("Direccion de enlace del penultimo enlace: "+penultimo)

    //Número de enlaces a prueba
    var cont = 0;
    for (var i = 0; i < enlaces.length; i++) {
        if (enlaces[i].href == "http://prueba" || enlaces[i].href == "http://prueba/") {
            cont++;
        }
    }
    alert("Cantidad de enlaces a http://prueba: "+cont)


    var parrafos = document.getElementsByTagName("p");
    enlaces = parrafos[3].getElementsByTagName("a");
    alert("Número de enlaces en el párrafo 3: "+enlaces.length)
}