class Alumno extends Persona{
    constructor(nombre,apellido,sexo,curso,edad){
        super(nombre , apellido, sexo);
        this.curso = curso ;
        this.edad = edad ;

    }
    mostrarAlumno(){
        return 'Datos' + this.curso + ' ' +  this.edad;
    }

}