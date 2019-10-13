function hello() {
    if (localStorage.getItem('hello') ==false) {
        alert("Hello, my name is Giorno Giovanna");
        localStorage.setItem('hello', true);
    }
}

let kids = new Array();
let totalDias = new Array();
let Totalhoras = new Array();
let dia = new Date
function enviar() {
    dia = document.getElementById("fecha").value;
    dia = dia.getDate();
    kids[kids.length] = document.getElementById("nombre").value;
    if (localStorage.getItem(kids[kids.length]+dia) != dia) {
        if (localStorage.getItem(kids[kids.length]+"dias") == null) {
            localStorage.setItem(kids[kids.length]+"dias", 1)
        }else{
            localStorage.setItem(kids[kids.length]+"dias", parseInt(localStorage.getItem(kids[kids.length]+"dias"))+1)
        }
    }
    Totalhoras
}





function mostrar() {
    let faltas = document.getElementById('mostrar');

    for (let i = 0; i < kids.length; i++) {
        faltas.innerHTML = faltas.innerHTML + "/nEl niño" + kids[i] + ",ha faltado  "+ localStorage.getItem(kids[i]+"dia") + " dias y tiene " + localStorage.getItem(kids.getItem(kids[i]+"falta"))+ " faltas"       
    }
}