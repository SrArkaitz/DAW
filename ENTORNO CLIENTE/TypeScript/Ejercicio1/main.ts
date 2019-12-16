import Preguntas  from "./Preguntas";

var preguntas : Preguntas[] = [];
let numPregExamen : number[] = [];
let numPregunta : number = 0;
let cont : number = 0;
let num : number = 0;
let nota : number = 0;
function cargar():void
 {
     let añadirP=<HTMLDivElement>document.getElementById('añadirPreguntas');
     añadirP.style.display = "none";
     let examen = <HTMLDivElement>document.getElementById("examen");
     examen.style.display = "none";
 }

 function insertarPreguntas(): void
 {
     let preguntas = <HTMLDivElement>document.getElementById("añadirPreguntas");
     preguntas.style.display = "flex";
     preguntas.style.flexDirection = "column";
     preguntas.style.marginTop = "20px";
 }

 function añadirPregunta() {
     let pregunta = <HTMLInputElement>document.getElementById("pregunta");
     let respuesta1 = <HTMLInputElement>document.getElementById("respuesta1");
     let respuesta2 = <HTMLInputElement>document.getElementById("respuesta2");
     let respuesta3 = <HTMLInputElement>document.getElementById("respuesta3");
     let respuesta4 = <HTMLInputElement>document.getElementById("respuesta4");
     let respCorrecta = $('input[name="respuesta"]:checked').val();
     console.log(respCorrecta);
    try{
        if (pregunta.value !="" && respuesta1.value != "" && respuesta2.value != "" && respuesta3.value != "" && respuesta4.value != "" && respCorrecta != undefined) {
            preguntas[numPregunta] = new Preguntas(pregunta.value, respuesta1.value, respuesta2.value, respuesta3.value, respuesta4.value, respCorrecta);
            numPregunta++;
            limpiarCampos();
        }
    }catch (e) {
        error("Por favor rellene todos los apartados")
    }
 }

function error(mensaje) {
    console.log(mensaje);
}

function limpiarCampos(){
    document.getElementById("pregunta").nodeValue = "";
    document.getElementById("respuesta1").nodeValue= "";
    document.getElementById("respuesta2").nodeValue = "";
    document.getElementById("respuesta3").nodeValue = "";
    document.getElementById("respuesta4").nodeValue = "";

    let error = <HTMLDivElement>document.getElementById("error")

    while(error.firstChild){
        error.removeChild(error.firstChild)
    }
}

function generarExamen() {
if (preguntas.length >=5){
    let index = <HTMLDivElement>document.getElementById("examen");
    index.style.display = "none";
    let examen = <HTMLDivElement>document.getElementById("examen");
    examen.style.display = "block";
    siguientePregunta();
}
}

function comprobarYsiguiente() {
    cont++
    alert(cont);
    let examen = <HTMLDivElement>document.getElementById("examen")
    let reusltadoDiv = <HTMLDivElement>document.getElementById("resultado");
    let respuesta = <HTMLInputElement>document.getElementById("selectP");
    alert(respuesta.value);

    if (preguntas[num].correcta == <number><unknown>respuesta){
        nota+=2
    }else {
        nota--;
    }
    if (cont == 5){
        examen.style.display = "none";
        let p = document.createElement("p");
        let notaTexto = document.createTextNode("El resultado del examen es: "+nota)
        p.appendChild(notaTexto);
        reusltadoDiv.appendChild(p);
    }else{
        siguientePregunta();
    }
}

function siguientePregunta() {
    let examen = <HTMLDivElement>document.getElementById("preguntasExamen");
    examen.style.display = "flex";
    examen.style.flexDirection = "column";
    while(examen.firstChild){
        examen.removeChild(examen.firstChild);
    }
    let salir = false;
    while (salir == false){
        num = Math.floor(Math.random()*preguntas.length);
        for (let i = 0; i > numPregExamen.length; i++){
            if (numPregExamen[i] == num){
                salir = true;
            }
        }
    }
    numPregExamen[numPregExamen.length] = num;

    let h3 = document.createElement("h3");
    let preguntaE = document.createTextNode(preguntas[num].pregunta)
    let select = document.createElement("select");
    select.setAttribute("id", "selectP")
    let opt1 = document.createElement("option");
    let resp1 = document.createTextNode(preguntas[num].respuesta1)
    let opt2 = document.createElement("option");
    let resp2 = document.createTextNode(preguntas[num].respuesta2)
    let opt3 = document.createElement("option");
    let resp3 = document.createTextNode(preguntas[num].respuesta3)
    let opt4 = document.createElement("option");
    let resp4 = document.createTextNode(preguntas[num].respuesta4)

    h3.appendChild(preguntaE);
    opt1.setAttribute("value", "resp1");
    opt1.appendChild(resp1);
    opt2.setAttribute("value", "resp2");
    opt2.appendChild(resp2);
    opt3.setAttribute("value", "resp3");
    opt3.appendChild(resp3)
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
        data: {'preguntas': JSON.stringify(preguntas)},
        success: function(data){
            alert("Success")
        },
        error: function(data){
            alert("error")
        }
    });
}