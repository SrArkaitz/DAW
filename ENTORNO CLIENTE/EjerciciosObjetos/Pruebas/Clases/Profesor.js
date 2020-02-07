class Profesor extends Persona{
    constructor(nombre,apellido,sexo,asignatura,numalumnos){
        super(nombre , apellido, sexo);
        this.asignatura = asignatura ;
        this.numalumnos = numalumnos ;
    }
    mostrarProfe(){
        return 'Datos' + this.asignatura + ' ' + this.numalumnos;
    }
}