class Centro {

    constructor(direccion,especializacion,horario){
        this.direccion = direccion;
        this.especializacion = especializacion;
        this.horario = horario;
        this.lisprofe =[];
        this.lisalu =[];

    }

    mostrarCentro(){
        return "Datos" +this.direccion+' '+this.expecializacion+' '+ this.horario;
    }

    añadirProfe(profesor ){
        this.lisprofe.push(profesor);
    }

    añadirAlumno(alumno ){
        this.lisalu.push(alumno);
    }

}