
function guardar() {
    let dni = document.getElementById("dni").value;
    let nombre = document.getElementById("nombre").value;
    let codigo = document.getElementById("codigo").value;
    let centro = document.getElementById("centro").value;
    let horaInicio = document.getElementById("horaInicio").value;
    let horaFin = document.getElementById("horaFin").value;
    let primerTrim = document.getElementById("primero").value;
    let segundoTrim = document.getElementById("segundo").value;
    let tercerTrim = document.getElementById("tercero").value;
    let trimestre
    if (dni != "" || nombre != "" || codigo != "" || centro != "" || horaInicio != "" || horaFin != "") {

        if (!primerTrim.checked && !segundoTrim.checked && !tercerTrim.checked) {
            
            
            
            if (primerTrim.checked) {
                trimestre = primerTrim;
            }else if (segundoTrim.checked) {
                trimerstre = segundoTrim;
            }else if (tercerTrim.checked) {
                trimerstre = tercerTrim;
            }
            let envioParametros = {
                "dni":dni,
                "nombre":nombre,
                "codigo":codigo,
                "centro":centro,
                "horaInicio":horaInicio,
                "horaFin":horaFin,
                "trimerstre":trimerstre
            }


            $.ajax({
                type: "POST",
                data: {},
                url: 'consulta.php',
                success: function(data) {
                    var res = jQuery.parseJSON(data);
                    if (res.success == 1) { 
                        alert("Se ha enviado correctamente")
                    }
                    else {
                        alert("Ha habido un fallo al enviar")
                    }
                },
                error: function(e) { // Si no ha podido conectar con el servidor 
                    // Código en caso de fracaso en el envío
                    alert("No se ha podido conectar con el servidor")
                }
            });


        } else {
            alert("Por favor seleccione el trimestre al que desea acudir")
        }

    } else {
        alert("Por favor rellene todos los datos");
    }

}

function continuar() {
    let dni = document.getElementById("dni").value;
    alert(dni);
    let nombre = document.getElementById("nombre").value;
    let codigo = document.getElementById("codigo").value;
    let centro = document.getElementById("centro").value;
    let horaInicio = document.getElementById("horaInicio").value;
    let horaFin = document.getElementById("horaFin").value;
    let primerTrim = document.getElementById("primero");
    let segundoTrim = document.getElementById("segundo");
    let tercerTrim = document.getElementById("tercero");

    if (dni != "" || nombre != "" || codigo != "" || centro != "" || horaInicio != "" || horaFin != "") {

        if (!primerTrim.checked && !segundoTrim.checked && !tercerTrim.checked) {






            document.getElementById("dni").value = "";
            document.getElementById("nombre").value = "";
            document.getElementById("codigo").value = "";
            document.getElementById("centro").value = "";
            document.getElementById("horaInicio").value = "";
            document.getElementById("horaFin").value = "";
            document.getElementById("primero").checked = false;
            document.getElementById("segundo").checked = false;
            document.getElementById("tercero").checked = false;


        } else {
            alert("Por favor seleccione el trimestre al que desea acudir")
        }

    } else {
        alert("Por favor rellene todos los datos");
    }

}
