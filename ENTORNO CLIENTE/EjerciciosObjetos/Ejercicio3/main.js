let preguntas = [];
let numPregExamen = [];
numpregunta = 0;
cont = 0;
let num = 0;
let nota = 0;

function cargar(){
    let preguntas = document.getElementById("añadirPreguntas");
    preguntas.style.display = "none";
    document.getElementById("examen").style.display = "none";
}
function insertarPreguntas(){
    let preguntas = document.getElementById("añadirPreguntas");
    preguntas.style.display = "flex";
    preguntas.style.flexDirection = "column";
    preguntas.style.marginTop = "20px";
}
function añadirPregunta(){
    let pregunta = document.getElementById("pregunta").value;
    let respuesta1 = document.getElementById("respuesta1").value;
    let respuesta2 = document.getElementById("respuesta2").value;
    let respuesta3 = document.getElementById("respuesta3").value;
    let respuesta4 = document.getElementById("respuesta4").value;
    let respCorrecta = $('input[name="respuesta"]:checked').val();
    console.log(respCorrecta);

    if(pregunta !="" && respuesta1 != "" && respuesta2 != "" && respuesta3 != "" && respuesta4 != "" && respCorrecta !=undefined){
        try {
            preguntas[numpregunta] = new Preguntas(pregunta, respuesta1, respuesta2, respuesta3, respuesta4, respCorrecta);
            numpregunta++;
            limpiarCampos();
        } catch (fallo) {
         console.log(fallo);
        }
    }else{
        error("Por favor, rellene todos los apartados")
    }
}
function error(mensaje){
    console.log(mensaje)
    let errorDiv = document.getElementById("error")

    let p = document.createElement("p");
    let errorM = document.createTextNode(mensaje);
    p.appendChild(errorM);
    errorDiv.appendChild(errorM);
}
function limpiarCampos(){
    document.getElementById("pregunta").value = "";
    document.getElementById("respuesta1").value = "";
    document.getElementById("respuesta2").value = "";
    document.getElementById("respuesta3").value = "";
    document.getElementById("respuesta4").value = "";

    let error = document.getElementById("error");
    while(error.firstChild){
        error.removeChild(error.firstChild);
    }

}
function generarExamen(){
    if (preguntas.length >= 5) {
        document.getElementById("index").style.display = "none";
        document.getElementById("examen").style.display = "block";
        siguientePregunta();
    }else{
        error("Debe haber 5 preguntas como mínimo. Lleva " + preguntas.length);
    }
}
function comprobarYSiguiente(){
    cont++
    alert(cont)
    let examen = document.getElementById("examen");
    let reusltadoDiv = document.getElementById("resultado");
    let respuesta = document.getElementById("selectP").value;
    alert(respuesta);
    if(preguntas[num].correcta == respuesta){
        nota +=2;
    }else{
        nota--;
    }
    if (cont == 5) {
        examen.style.display = "none";
        let p = document.createElement("p");
        let notaTexto = document.createTextNode("El resultado del examen es: " + nota)
        p.appendChild(notaTexto);
        reusltadoDiv.appendChild(p)
    }else{
        siguientePregunta();
    }
}
function siguientePregunta(){
    let examen = document.getElementById("preguntasExamen");
    examen.style.display = "flex";
    examen.style.flexDirection = "column";
    while(examen.firstChild){
        examen.removeChild(examen.firstChild);
    }
    let salir = false
    while(salir == false){
        num = Math.floor(Math.random() * preguntas.length);
            if (!numPregExamen.includes(num)) {
                salir = true
            }
    }
    numPregExamen[numPregExamen.length]= num;
    
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


function mandarExamenServidor(){
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