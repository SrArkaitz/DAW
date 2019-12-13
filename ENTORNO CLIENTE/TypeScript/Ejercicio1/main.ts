



function cargar():void
 {
     document.getElementById('añadirPreguntas').style.display = "none";
     document.getElementById("examen").style.display = "none";
 }

 function insertarPreguntas(): void
 {
     let preguntas = document.getElementById("añadirPreguntas");
     preguntas.style.display = "flex";
     preguntas.style.flexDirection = "column";
     preguntas.style.marginTop = "20px";
 }