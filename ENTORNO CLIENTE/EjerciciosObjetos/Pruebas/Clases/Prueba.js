function  Person(edad, sexo) {
    this.edad = edad=0;
    this.sexo = sexo="";

}

var p1 = new Person(12,"Hombre");

p1.edad;
p1.sexo;


function Hombre(edad) {
    Person.call(this,edad,"Hombre");
}

Hombre.prototype = Object.create(Person.prototype);
Hombre.prototype.constructor =  Hombre;

var hombre = new Hombre(40);
hombre instanceof Hombre;
hombre instanceof Person;