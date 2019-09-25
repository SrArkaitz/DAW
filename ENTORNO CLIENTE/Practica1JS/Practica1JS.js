//Ejercicio 1:

/*
Tema 1:
Una aplicación web se le denomina alas aplicaciones que utilizan los usuarios mediante un servidor web en internet o una intranet
de un navegador mediante un protocolo que suele ser http o https. Se podría decir que una aplicación web es una página web
dinámica. Estas se generan con un formato estandar (HTML o XHTML) y se utilizan lenguajes tales como 
JavaScript, Java, Flash,... para poder así añadir elementos dinámicos a la interfaz de usuario.
Generalmente se envia como documento estático pero con la secuencia de páginas se hace interactiva.

Las aplicaciones web utilizan una arquitectura cliente servidor, siendo los servidores los que se
ocupan de gestionar unidades de disco, impresoras, datos o aplicaciones, mientras que los clientes
unicamente utilizan los recursos que ofrecen los servidores. Esto implica una relación entre procesos que solicitan
servicios y procesos que responden a estos servicios separando así la dunciones según su servicio.
Existen tres niveles, la lógica de presentación encargada de la entrada y salida de la aplicación.
La lógica de negocio, encargada de gestionar los datos a nivel de procesamiento. Y la lógica de datos,
encargada de gestionar los datos a nivel de almacenamiento. 

*/


//Ejercicio 2:

/*En 1995 nace JavaScript tras 10 días de trabajo por Brendan Eich trabajador de Netscape. El nombre fue basado en
el lenguaje de programación de java ya que era el más popular de la época y trato de aprovechar
un poco esa fama. Pero el nombre y algunos aspectos de sintaxis son las unicas similitudes ya que
tenian una finalidad y filosofia distinta.
En 2996 Netscape paso JavaScript a una empresa internacional, Ecma International. Hoy en día Ecma
se define como un organismo que asocia a productores de tecnologías de información y comunicación.
Su primera versión de JavaScript fue lanzada en 1997.
Al principio JavaScript al ser un lenguaje hecho en un periodo tan breve, daba muchos fallos
que impedian el trabajo, pero con el tiempo JavaScript ha ido mejorando y hoy en día es uno de
los lenguajes más usados y el principal de muchas empresas.*/


/*Ejercicio 3:*/


var textoInic=" Presentamos el producto"; //Un nombre no puede llevar puntos
var aux3=4,numero ,aux1="ana"; //No se pueden poner números en el primer carácter del nombre
var emp =true ;var est =5; //La variable no puede tener espacios en el nombre y para poner otra en la misma línea debe haber un ;
var aux3_1 =5; var Nom_Primero ;//Poniendo var establecemos como variable y mas adelante se podra le asignar nom_Primero=otravariable 
var _texto="Entrada"; // El texto de la variable al ser tipo String el texto debe ir entre comillas
//O una variable no puede ser otra variable no inicializada
aux3_1=5;//"Pedro"; //Una Variable de tipo numerico no puede llevar un tipo String
Nom_Primero =aux3_1;
aux1=aux3_1; //Una variable de tipo String no puede ser una variable númerica


//Ejercicio 4:

var aux1="Oveja que bala",aux2="bocado que pierde";
var num1 =8, num2 =5, resultado , operando="20";
alert(aux1+aux2+"<br >"); //Oveja que balabocado que pierde<br >
alert (num1+num2+"<br >");//13<br >
num1=num1+num2;
resultado =num1+num2;
alert (num1+"-"+num2+"-"+ resultado );//13-5-18
resultado =operando+num1;
alert ( resultado );//2013
resultado =parseInt(operando)+num1;
alert ( resultado ); //33

//Ejercicio 5:

var puntos="340";
var descuento =20;
// Hacer lo necesario para restar "puntos" de " descuento "

var resultado = parseInt(puntos)- descuento;

// Mostrar por pantalla un mensaje del tipo:
// Los puntos obtenidos son 340, el descuento es 20 y el resultado final es 320
alert("Los puntos obtenidos son "+puntos+", el descuento es de "+descuento+ " y el resultado final es "+resultado);


//Ejercicio 6:

var nombre="Elena";
var años="20";
var aux =2;

var suma = parseInt(años) + aux;
/* Hacer lo necesario para que se vea el siguiente mensaje
utilizando las variables correspondientes :
Elena tiene 20 años y dentro de 2 años tendrá 22 */

alert(nombre + " tiene "+ años + " años y dentro de " + aux + " años tendrá "+ suma)

//Ejercicio 7:

var nombre = "Jotaro";

var edad = 17;

var incremento = 4;

var nuevaEdad = edad + incremento;

alert(nombre +" con " + edad + " años, dentro de "+ incremento + " años, tendrá "+ nuevaEdad + " años");


//Ejercicio 8: 


var v1 = 1;
alert("v1 = " + v1) // v1 = 1 
v2= 2;
alert("v2 = " + v2) // v2 = 2
{
/*var*/ v1 = 3;// Ya estaba declarada anteriormente
alert("v1 = " + v1) // v1 = 3 ya que lo sobreescribe
v2 = 4
alert("v2 = " + v2)// v2 = 4 ya que lo sobreescribe
var v3 = 5
alert("v3 = " + v3)// v3=5 
v4 = 6;
alert("v4 = " + v4)  //v4= 6 ya que se puede declarar una variable sin hacer falta de poner var
}
alert("v1 = " + v1) //v1=3
alert("v2 = " + v2)//v2=4
alert("v3 = " + v3)//v3=5
alert("v4 = " + v4)//v4=6
//-----------------------------
const v11 = 1;
alert(' Constante : ' +v11)//Constante: 1
v11= 6
alert(' Constante : ' +v11)// al ser una constante constante: 1
//--------------------------------
let v1 = 1;
alert("v1 = " + v1)//v1=1
v2= 2;
alert("v2 = " + v2)//v2=2
{
/*let*/ v1 = 3;//daria error al declararlo varias veces
alert("v1 = " + v1)//v1=3
v2 = 4
alert("v2 = " + v2) //v2=4
let v3 = 5
alert("v3 = " + v3) //v3=3
v4 = 6;
alert("v4 = " + v4)//v4=6
}
alert("v1 = " + v1) //v1= 3
alert("v2 = " + v2)//v2= 4
alert("v3 = " + v3)//v3=4
alert("v4 = " + v4)//v4=6


//Ejercicio 9:

var nomP;
var apellido;
nomP = prompt("Introduzca su nombre");
apellido = prompt("Introduzca su apellido");
alert("Su nombre es "+ nomP+ " y su apellido "+ apellido);
confirm("¿Desea acabar la ejecucion?");
//Ejercicio 10:

var num1
var num2
var suma;
num1 = prompt("introduzca un número")
num2 = prompt("Introduzca otro número")
suma = parseInt(num1) + parseInt(num2);
alert("LA suma de ambos números es " + suma)

//Ejercicio 11:

var num1
var num2
num1 = prompt("introduzca un número")
num2 = prompt("Introduzca otro número")
num1 = parseInt(num1);
num2 = parseInt(num2);
alert("La suma de ambos números es "+ (num1+num2)+ " la resta "+ (num1 - num2) +" la multiplicación "+ (num1*num2)+" la division "+ (num1/num2)) 

//Ejercicio 12:

var num1
var num2
num1 = prompt("introduzca la base del rectangulo")
num2 = prompt("Introduzca altura del rectangulo")
num1 = parseInt(num1);
num2 = parseInt(num2);
alert("El área del rectangulo es "+ (num1*num2))

//Ejercicio 13:


var Pepe;
var PEPE="Hola que tal ";
var pepE =75.47;
var pEpe=" ¿Como est´as?";
Pepe=PEPE+pEpe;

alert("PEPE="+PEPE);
alert("PEPE es "+typeof(PEPE));

alert("pepE="+pepE);
alert("pepE es "+typeof(pepE));
alert("pEpe="+pEpe);
alert("pEpe es "+typeof(pEpe));
alert("Pepe="+Pepe);
alert("Pepe es "+typeof(Pepe));

alert("PEPE="+PEPE);
alert("PEPE es "+ PEPE instanceof String);

alert("pepE="+pepE);
alert("pepE es "+pepE instanceof integer);
alert("pEpe="+pEpe);
alert("pEpe es "+pEpe instanceof integer);
alert("Pepe="+Pepe);
alert("Pepe es "+Pepe instanceof String);


//Con typeOf lo que conseguimos es que nos saque el tipo de la variable, string, integer, decimal, booleano,...
//Con instanceOf, cuando lo comparamos con el tipo suyo o algún otro, ya sea string, int,... y te devuelte un booleano
//Si el tipo es el mismo, string y string por ejemplo te devuelve true y si no false.


//Ejercicio 14:

var n1 =57; // n´umero en base 10
var n2 =012345; // base 8, porque empieza por 0
var n3=0xFF32; // base 16, porque empieza por 0x

alert("n´umero decimal= " + n1);
alert("el 12345 en base 8 es en decimal= "+n2);
alert("el FF32 en base 16 es en decimal= "+n3);

/* Observa que al escribir una variable num´erica en un "alert"
siempre nos da el n´umero en decimal , aunque sea en octal o
hexadecimal */

//Ejercicio 15

var num1
var num2
num1 = prompt("introduzca un número")
num2 = prompt("Introduzca otro número")

alert("La resta es: "+ (num1-num2))

//La respuesta que da es NaN, ya que al no ser números se genera un error

//Ejercicio 16: 

var num1
var num2
num1 = prompt("introduzca un número")
num2 = prompt("Introduzca otro número")

alert("La división es: "+ (num1/num2))

//La respuesta que da al dividir con letras es NaN ya que nos da un error. La respuesta que da
//al dividir un número con 0 es Infinity y al dividir dos letras es NaN también

//Ejercicio 17:

var num1
var num2
num1 = prompt("introduzca un número")
alert("El doble del número es: "+ Math.imul(num1,2) +", el triple: "+ Math.imul(num1,3) +", el cuádruple: "+ Math.imul(num1,4))

//Ejercicio 18: 

var a
var b
a = prompt("Escribe la base: ")
b = prompt("Escribe la altura: ")
alert("Área= " + (a*b/2))

//Ejercicio 19:

let radio
radio = prompt("Introduce el diametro")

alert("La longitud de la circunferencia es: "+ (2*Math.PI*parseInt(radio))+ " y el área es: "+ Math.PI*Math.pow(parseInt(radio),2))

//Ejercicio 20:

var numero;
let numHexadecimal
numero = prompt("Introduzca un número")
numero = parseInt(numero);
alert("El número introducido, "+ numero + " en hexadecimal es: "+ numero.toString(16))

//Ejercicio 21:

var num;
num = prompt("Introduzca un número")
if (num % 2 ==0) {
    alert("El número introducido es par")
} else {
    alert("El número introducido es impar")
}

//Ejercicio 22:

var letraDNI = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];
let letra;
var DNI = prompt("Introduce tu DNI sin letra")

let resto = parseInt(DNI)%23

letra = letraDNI[resto];
alert("Tu dni es: " +DNI+letra)

//Ejercio 23: 

let numeros = new Array(4);

for (let i = 0; i < 5; i++) {
    
    numeros[i] = prompt("Añade un número")
}
alert("los números son:")
for (let index = 0; index < numeros.length+1; index++) {
    alert(numeros[index])
    
}

//Ejercicio 24
var num
let factorial = 1
num = prompt("Introduzca un número")
    for (i=1; i<=num; i++) {
        factorial = factorial * i; 
    }
    alert(factorial) 
//Ejercicio 25


var colores=["azul","rojo","amarillo","verde","morado","gris","marron","negro","blanco"]

var numeros=["1","2","3","4","5","6","7"]

var posicion=parseInt(prompt("Introduce la posicion que quieres buscar"))

alert(colores[posicion])

alert("El array de colores tiene "+ colores.length)

alert("¿Es un array? "+Array.isArray(colores))

alert(colores.toString())
alert(colores.join("  "))

alert(colores.pop()+" es el ultimo color de la lista "+colores.shift()+" es el primero")

var colordesp=prompt("introduce el color que quieres añadir al final del array")
var colorant=prompt("introduce el color que quieres añadir al inicio del array")
colores.push(colordesp)
colores.unshift(colorant)

alert(colores.toString())

var pos=prompt("Introduce la posicion que quieres eliminar")
alert(pos)
colores.splice(5,1)

alert(colores.toString())

colores.concat(numeros)
alert("El array completo es: " + colores.toString())

var numero=prompt("Introduce el numero del que quieres saber la posicion")
alert(numeros[numero].toString())
alert("La primera posicion de numeros es:"  +numeros.indexOf(numero))
alert("La ultima posicion de numeros es:"  +numeros.lastIndexOf(numero))

alert("el array de los numeros al reves es: "+numeros.reverse().toString())
alert("el array de los numeros ordenado es: "+numeros.sort().toString())


//Ejercicio 26
var sueldos = new Array(5)
let gastos = 0
for (let index = 0; index < sueldos.length; index++) {
  sueldos[index] = prompt("Introduzca su sueldo")
  gastos+=parseInt(sueldos[index])
    
}
/*sueldos.forEach(index => {
    sueldos[index] = prompt("Introduzca su sueldo")
  gastos+=parseInt(sueldos[index])
});*/
alert(gastos)
//Ejercicio 27
let meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre","Diciembre"]
let num
num  = prompt("Introduce un número entre el 1 y el 12")
if (num > 0 && num < 13) {
    alert("El mes de ese número es: " + meses[num-1])
} else {
    alert("Ese no es número válido")
}
//Ejercicio 28

let palabra
let num = 0
palabra = prompt("Introduce una palabra")
for (let index = 0; index < palabra.length+1; index++) {
    if (palabra.charAt(index)==="a"||"e"||"i"||"o"||"u") {
        num = num + 1
    }
}
alert("Estas son las vocales: "+num)

//Ejercicio 29

var numeros = [0,1,2,3,4]
for (let i = 0; i < numeros.length; i++) {
   let mensj = mensj +" "+ numeros.toString()
    
}
alert(mensj)
var numeros2 = new Array
numeros2[0] = prompt("Introduce un número: ")
numeros2[1] = prompt("Introduce un número: ")
numeros2[2] = prompt("Introduce un número: ")
numeros2[3] = prompt("Introduce un número: ")
numeros2[4] = prompt("Introduce un número: ")

//a:
mensj =""
for (let i = 0; i < numeros.length; i++) {

    if (numeros[i]%2 == 0) {
        mensj = mensj + " " + numeros[i]
    }

}
//b:

//c:
mensj=""
for (let i = 0; i < numeros.length; i++) {
    let mensj = mensj +" "+ numeros.toString()
     
 }
 //d:
 delete numeros2[0]
 delete numeros2[2]
 delete numeros2[4]
     
 //e:
 var numJ = new Array()
 numJ[0] = numeros[0]+numeros2[0]
 numJ[1] = numeros[1]+numeros2[1]
 numJ[2] = numeros[2]+numeros2[2]
 numJ[3] = numeros[3]+numeros2[3]
 numJ[4] = numeros[4]+numeros2[4]
 //Suma un dos a cada uno de los elementos de este tercer array

 numJ[0] = numj[0]+2
 numJ[1] = numj[1]+2
 numJ[2] = numj[2]+2
 numJ[3] = numj[3]+2
 numJ[4] = numj[4]+2

 //g
 //h

//Ejercicio 30:

let numeros = new Array[3][3][3]

//Ejercicio 31

var func = function() {
    var  mes = 0;
    var dia = 0;
    var year = 0;
    var bisiesto=false;
    var today = new Date();
    var diaTotal;
    var month = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    var week = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
    do{
        year = prompt("Introduce el año de tu cumpleaños 1950:");
        if (year < 1950) {
            alert("Error en la fecha");
        }else{
            if (year%4==0){
                bisiesto=true
        }
        }
    }while (year < 1950);
    do{
        mes = prompt("Introduce el més");
        if (mes < 1){
            alert("Error en la fecha");
        }else if(mes > 12){
            alert("Error en la fecha");
        }
    }while(mes < 1 || mes > 12);

    if (mes==1||mes==3||mes==5||mes==7||mes==8||mes==10||mes==12){
        diaTotal = 31;
    }else if(mes == 2){
        if (bisiesto == true){
            diaTotal = 29;
        }else{
            diaTotal = 28;
        }
    }else{
        diaTotal = 30;
    }
    do{
        dia = prompt("Introduce el día");
        if (dia < 1){
            alert("Error en la fecha");
        }else if(dia > diaTotal){
            alert("Error en la fecha");
        }

    }while(dia <1 || dia > diaTotal);

    var fecha = new Date(year, mes-1, dia);

    var año;
    if (mes == today.getMonth && dia == today.getDay) {
        año = today.getFullYear-year
    } else if (mes > today.getMonth) {
        año = today.getFullYear-year-1
    } else if(mes == today.getMonth && dia > today.getDay){
        año = today.getFullYear-year-1
    } else if(mes == today.getMonth && dia < today.getDay){
        año = today.getFullYear-year
    }else if(mes < today.getMonth){
        año = today.getFullYear-year
    }
    alert("Tienes: "+ año + " años")

    
}

//Ejercicio 32

var func = function() {
    var  mes = 0;
    var dia = 0;
    var year = 0;
    var bisiesto=false;
    var today = new Date();
    var diaTotal;
    var month = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    var week = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
    do{
        year = prompt("Introduce el año de tu cumpleaños 1950:");
        if (year < 1950) {
            alert("Error en la fecha");
        }else{
            if (year%4==0){
                bisiesto=true
        }
        }
    }while (year < 1950);
    do{
        mes = prompt("Introduce el més");
        if (mes < 1){
            alert("Error en la fecha");
        }else if(mes > 12){
            alert("Error en la fecha");
        }
    }while(mes < 1 || mes > 12);

    if (mes==1||mes==3||mes==5||mes==7||mes==8||mes==10||mes==12){
        diaTotal = 31;
    }else if(mes == 2){
        if (bisiesto == true){
            diaTotal = 29;
        }else{
            diaTotal = 28;
        }
    }else{
        diaTotal = 30;
    }
    do{
        dia = prompt("Introduce el día");
        if (dia < 1){
            alert("Error en la fecha");
        }else if(dia > diaTotal){
            alert("Error en la fecha");
        }

    }while(dia <1 || dia > diaTotal);

    
    var fecha = new Date(year, mes-1, dia);
    var año;
    if (mes == today.getMonth && dia == today.getDay) {
        año = today.getFullYear-year
    } else if (mes > today.getMonth) {
        año = today.getFullYear-year-1
    } else if(mes == today.getMonth && dia > today.getDay){
        año = today.getFullYear-year-1
    } else if(mes == today.getMonth && dia < today.getDay){
        año = today.getFullYear-year
    }else if(mes < today.getMonth){
        año = today.getFullYear-year
    }
    alert("En 5 años tendrás: " + año+5+ " años")
}

