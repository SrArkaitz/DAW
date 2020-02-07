var centro = null;
let profesores = [];
let alumnos = [];
$(document).ready(function(){
    $('#tipo').change(function () {
        var opcion = this.value;
        alert( opcion);
        switch (opcion) {
            case '1':
                $('#formalumno').css("display","block");
                $('#formprofe').css("display","none");
                break;
            case '2':
                $('#formprofe').css("display","block");
                $('#formalumno').css("display","none");
                break;
        }
    })

datosAlumno = function(){
    $(document).ready(function () {

        var direccion = $("#direccion").val();
        var especializacion = $("#especializacion").val();
        var horario =$("#horario").val();

        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var sexo =$("#sexo").val();
        var curso = $("#curso").val();
        var edad = $("#edad").val();

        alumnos[alumnos.length] = new Alumno(nombre,apellido,sexo,curso,edad);

        if (centro == null){
            centro = new Centro(direccion,especializacion,horario);
        }
        centro.añadirAlumno(alumnos[alumnos.length]);
        limpiar();
    })


}

datosProfe = function(){
        $(document).ready(function () {

            var direccion = $("#direccion").val();
            var especializacion = $("#especializacion").val();
            var horario =$("#horario").val();

            var nombrepro = $("#nombrepro").val();
            var apellidopro = $("#apellidopro").val();
            var sexopro =$("#sexopro").val();
            var asignatura = $("#asignatura").val();
            var numalumnos = $("#numalumnos").val();
            profesores[profesores.length] = new Profesor(nombrepro,apellidopro,sexopro,asignatura,numalumnos);

            if (centro == null){
                centro = new Centro(direccion,especializacion,horario);
            }
            centro.añadirProfe(profesores[profesores.length]);



            console.log(centro.mostrarCentro());
            console.log(centro);

            limpiar();
        })

}



limpiar = function () {
    $(document).ready(function () {
        $("#nombre").val("");
        $("#apellido").val("");
        $("#sexo").val("");
        $("#curso").val("");
        $("#edad").val("");

        $("#nombrepro").val("");
        $("#apellidopro").val("");
        $("#sexopro").val("");
        $("#asignatura").val("");
        $("#numalumnos").val("");
    })
}
});


function mostrarProfAlumn(){
    if (profesores.length > 0 && alumnos.length > 0) {
        $('#mostrar').append('<h1>Profesores</h1>')
        for (let i = 0; i < profesores.length; i++) {
            
            $('#mostrar').append('<p>'+ profesores[i].nombre +'</p>')
        }

        $('#mostrar').append('<h1>Alumnos</h1>')
        for (let i = 0; i < alumnos.length; i++) {
            
            $('#mostrar').append('<p>'+ alumnos[i].nombre +'</p>')
        }

    }else{
        alert(profesores[profesores.length -1].nombre)
    }
}
