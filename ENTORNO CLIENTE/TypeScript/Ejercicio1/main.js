"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var Preguntas_1 = require("./Preguntas");
var preguntas = [];
var numPregExamen = [];
var numPregunta = 0;
var cont = 0;
var num = 0;
var nota = 0;
function cargar() {
    var añadirP = document.getElementById('añadirPreguntas');
    añadirP.style.display = "none";
    var examen = document.getElementById("examen");
    examen.style.display = "none";
}
function insertarPreguntas() {
    var preguntas = document.getElementById("añadirPreguntas");
    preguntas.style.display = "flex";
    preguntas.style.flexDirection = "column";
    preguntas.style.marginTop = "20px";
}
function añadirPregunta() {
    var pregunta = document.getElementById("pregunta");
    var respuesta1 = document.getElementById("respuesta1");
    var respuesta2 = document.getElementById("respuesta2");
    var respuesta3 = document.getElementById("respuesta3");
    var respuesta4 = document.getElementById("respuesta4");
    var respCorrecta = $('input[name="respuesta"]:checked').val();
    try {
        if (pregunta.value != "" && respuesta1.value != "" && respuesta2.value != "" && respuesta3.value != "" && respuesta4.value != "" && respCorrecta != undefined) {
            preguntas[numPregunta] = new Preguntas_1.default(pregunta.value, respuesta1.value, respuesta2.value, respuesta3.value, respuesta4.value, respCorrecta.toString());
            numPregunta++;
            limpiarCampos();
        }
    }
    catch (e) {
        error("Por favor rellene todos los apartados");
    }
}
function error(mensaje) {
    console.log(mensaje);
}
function limpiarCampos() {
    document.getElementById("pregunta").nodeValue = "";
    document.getElementById("respuesta1").nodeValue = "";
    document.getElementById("respuesta2").nodeValue = "";
    document.getElementById("respuesta3").nodeValue = "";
    document.getElementById("respuesta4").nodeValue = "";
    var error = document.getElementById("error");
    while (error.firstChild) {
        error.removeChild(error.firstChild);
    }
}
function generarExamen() {
    if (preguntas.length >= 5) {
        var index = document.getElementById("examen");
        index.style.display = "none";
        var examen = document.getElementById("examen");
        examen.style.display = "block";
        siguientePregunta();
    }
}
function comprobarYsiguiente() {
    cont++;
    alert(cont);
    var examen = document.getElementById("examen");
    var reusltadoDiv = document.getElementById("resultado");
    var respuesta = document.getElementById("selectP");
    alert(respuesta.value);
    if (preguntas[num].correcta == respuesta) {
        nota += 2;
    }
    else {
        nota--;
    }
    if (cont == 5) {
        examen.style.display = "none";
        var p = document.createElement("p");
        var notaTexto = document.createTextNode("El resultado del examen es: " + nota);
        p.appendChild(notaTexto);
        reusltadoDiv.appendChild(p);
    }
    else {
        siguientePregunta();
    }
}
function siguientePregunta() {
    var examen = document.getElementById("preguntasExamen");
    examen.style.display = "flex";
    examen.style.flexDirection = "column";
    while (examen.firstChild) {
        examen.removeChild(examen.firstChild);
    }
    var salir = false;
    while (salir == false) {
        num = Math.floor(Math.random() * preguntas.length);
        for (var i = 0; i > numPregExamen.length; i++) {
            if (numPregExamen[i] == num) {
                salir = true;
            }
        }
    }
    numPregExamen[numPregExamen.length] = num;
    var h3 = document.createElement("h3");
    var preguntaE = document.createTextNode(preguntas[num].pregunta);
    var select = document.createElement("select");
    select.setAttribute("id", "selectP");
    var opt1 = document.createElement("option");
    var resp1 = document.createTextNode(preguntas[num].respuesta1);
    var opt2 = document.createElement("option");
    var resp2 = document.createTextNode(preguntas[num].respuesta2);
    var opt3 = document.createElement("option");
    var resp3 = document.createTextNode(preguntas[num].respuesta3);
    var opt4 = document.createElement("option");
    var resp4 = document.createTextNode(preguntas[num].respuesta4);
    h3.appendChild(preguntaE);
    opt1.setAttribute("value", "resp1");
    opt1.appendChild(resp1);
    opt2.setAttribute("value", "resp2");
    opt2.appendChild(resp2);
    opt3.setAttribute("value", "resp3");
    opt3.appendChild(resp3);
    opt4.setAttribute("value", "resp4");
    opt4.appendChild(resp4);
    examen.appendChild(preguntaE);
    select.appendChild(opt1);
    select.appendChild(opt2);
    select.appendChild(opt3);
    select.appendChild(opt4);
    examen.appendChild(select);
}
function mandarExamenServidor() {
    $.ajax({
        type: "POST",
        url: "server.php",
        data: { 'preguntas': JSON.stringify(preguntas) },
        success: function (data) {
            alert("Success");
        },
        error: function (data) {
            alert("error");
        }
    });
}
