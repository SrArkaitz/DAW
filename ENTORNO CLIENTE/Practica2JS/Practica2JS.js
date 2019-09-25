/*Codifica un ejemplo con cada una de las propiedades y/o metodos
de las clases String, Number y Date. Prueba tambien algunos de los
metodos de las clase Math.*/

//Propiedades: 

let str = prompt("Please enter a sentence:");
let num = str.length;
alert("The length of the sentence is: "+num);
alert("The constructor is: " + str.constructor)
 //methods: 

 alert("The first letter is: "+ str.charAt(0));

 alert("The unicode of the first letter is: "+ str.charCodeAt(0))

 let str2 =prompt("Please enter a second sentence that you would like to mix with the first one: ")
 let res = str.concat(str2);
 alert("The mix of the two sentences is: "+ res)

 let aux = prompt("Choose the word/letter that you think the sentence is ending with");
 alert("The word/letter you've chosen is "+res.endsWith(aux));

 let auxnum = prompt("Chose a number and you'll see his letter")
 alert("The letter of the number you've chosen ("+auxnum+") is: "+ String.fromCharCode(auxnum))

 aux = prompt("Select a word that you think will appear in the sentence you've written before")
 alert("The word "+aux+" is appearing in the sentence "+ res+": "+ res.includes(aux))

 aux = prompt("Select a word to check his position in the sentence")
 alert("The position of "+ aux + " is in: " + res.indexOf(aux))

 alert("We are going to compare the first two sentences: " + str.localeCompare(str2))

 aux = prompt("Chose a word to check his last position on the last sentence")
 alert("His last position is: " + res.lastIndexOf(aux))

 aux = prompt("Enter some letters to find in the sentence")
 aux = "/"+aux+"/g"
 alert("Here there are: "+ aux)

 alert("We are going to repeat the first sentence twice: "+str.repeat(2))

 aux = prompt("Please write down something in the first sentence to replace")
 let aux2 = prompt("Please write down something to replace with")
 str = str.replace(aux,aux2)
 alert("This is the new sentence "+str)

 alert("And now we'll search the word" + str.search(aux2))

 alert("And now we'll cut the string: "+ str.slice(0,5))

 alert("And now we'll split the first sentence" + res.split(" "))

 aux = prompt("Think of a word that you'll think the sentence will start with")
 alert("The sentence is starting with it: "+ str.startsWith(aux))

 alert("Now we'll do a substring of the first sentence"+ str.substr(1,4))
 alert("Now we'll do a substring of the first sentence"+ str.substring(1,4))

 alert(str.toLocaleLowerCase + " " + str.toLocaleUpperCase)

 alert(str.toLowerCase + " " + str.toUpperCase)
 
 alert(auxnum.toString())

 aux = "     Hello world!   "
alert(aux.trim())

alert(aux.valueOf())

//Number: 

num = prompt("Give me a mumber")
alert("Is the number finite? " + Number.isFinite(num))

alert("Is the number integer? " + Number.isInteger(num))

alert("Is the number NaN? " + Number.isNaN(num))

alert("Is the number safe integer? "+ Number.isSafeInteger(num))

alert("The exponential number is: "+ num.toExponential())

alert("The number in fixed is: "+ num.toFixed())

alert("The length of it is: " + num.toPrecision())

alert("And the string of it: "+ num.toLocaleString())

//Date:

var hoy = new Date()
alert("El día del mes de hoy es: " + hoy.getDate())

alert("El día de la semana de hoy es: " + hoy.getDay())

alert("Este año es: " + hoy.getFullYear())

alert("La hora es: " + hoy.getHours())

alert("Los milisegundos son: " + hoy.getMilliseconds())

alert("Los minutos son: " + hoy.getMinutes())

alert("Este mes es es: " + hoy.getMonth())

alert("Los segundo son: " + hoy.getSeconds())

alert("La hora es: "+ hoy.getTime())

alert("La hora en string: "+ hoy.toDateString())

alert("La zona horaria: " + hoy.getTimezoneOffset())

alert("El día del mes según la hora universal" + hoy.getUTCDate())

alert("El dia de la semana según la hora universal: " + hoy.getUTCDay())

alert("El año según la hora universal: " + hoy.getUTCFullYear())

alert("La hora según la hora universal: " + hoy.getUTCHours())

alert("Los milisegundos según la hora universal: " + hoy.getUTCMilliseconds())

alert("Los minutos según la hora universal: " + hoy.getUTCMinutes())

alert("El mes según la hora universal: " + hoy.getUTCMonth())

alert("Los segundos según la hora universal: " + hoy.getUTCSeconds())

var n = Date.now()
alert("Devuelve los milisegundos desde 1970: " + n)

var d = Date.parse("March 21, 2012")
alert("Milisegundos desde 1970 en string: " + d)

var z = new Date();
z.setDate(15);
alert("La fecha asignada: " + z)

z.setFullYear(2019)
alert("El año asignado: " + z)

z.setHours(15)
alert("La hora asignada: " + z)

z.setMilliseconds(192)
alert("Los milisegundos asignados: " + z)

z.setMinutes(17)
alert("Los minutos asignados: " + z)

z.setMonth(4)
alert("El año asignado: " + z)

z.setSeconds(35)
alert("Los segundos asignados: " + z)

z.setTime(1332403882588)
alert("La fecha asignada: " + z)

//Fechas utc

z.setUTCDate(15)
alert(z)
z.setUTCFullYear(1992)
alert(z)
z.setUTCHours(23)
alert(z)
z.setUTCMilliseconds(192)
alert(z)
z.setUTCMinutes(23)
alert(z)
z.setUTCMonth(11)
alert(z)
z.setUTCSeconds(35)
alert(z)

var x = new Date()
alert("LA fecha en string con valores ISO: ", x.toISOString())

alert("La fecha en formato JSON: " + x.toJSON())

var y = Date.UTC(2012, 02, 30);
alert("Fecha desde la media noche de el 1 de enero de 1970: "+y)

/**
 * Crea una funcion que muestre información sobre una cadena de
texto que se le pasa como argumento. A partir de la cadena que
se le pasa, la funcion determina si esa cadena esta formada solo
por mayusculas, por minusculas o por una mezcla de ambas. 
 */

let frase = prompt("Introduzca una frase")

info(frase)

 function info(str) {
     if (str === str.toUpperCase) {
        alert("Esta solo formada por mayusculas") 
     } else if (str === str.toLowerCase) {
         alert("Esta solo formada por minusculas")
     } else {
         alert("Esta formada por ambas, minusculas y mayusculas")
     }
 }

/**
 * Vamos a hacer una funcion que divida una cadena de caracteres
en dos mitades mas o menos iguales y las muestre en pantalla.
 */
let frase
do {
    frase = prompt("Introduzca una frase").toString()
} while (frase.length < 5);
alert(frase.length)
let num1
let num2 = frase.length
if (frase.length%2 == 0) {
    num1 = frase.length/2
}else{
    num1 = (frase.length/2) + 0.5
}
let particion1 = frase.slice(0,num1)
let particion2 = frase.slice(num1,num2)
alert(particion1+"|"+particion2)

 /**
  * Define una funcion que determine si la cadena de texto que se le
  * pasa como parametro es un palíndromo, es decir, si se lee de la
  * misma forma desde la izquierda y desde la derecha.
  * Ejemplo de palíndromo complejo: ”La ruta nos aporto otro paso
  * natural”
  */


  /**
   * Desarrolla un ejercicio que pregunte al usuario su sueldo actual
y los anos que lleva en la empresa. A partir de esos datos el ˜
programa debe mostrar un mensaje indicando:
• Si el sueldo es inferior a 500 y su antiguedad es igual o ¨
superior a 10 anos, aumentaremos su sueldo en un 20 % y ˜
mostraremos el mensaje indicando el nuevo sueldo a pagar.
• Si el sueldo es inferior a 500 pero su antiguedad es menor a ¨
10 anos, se le otorgar ˜ a un aumento del 10 % y mostraremos ´
un mensaje indicando su nuevo sueldo.
• Si el sueldo es mayor o igual a 500 mostraremos el sueldo
sin cambios.
   */


/**
* . Escribe un programa para adivinar un numero del 1 al 1000
*/
let num
let random = Math.floor((Math.random() * 1000) + 1);
let cont = 0
do {
    do {
        num = prompt("Adivina el número entre el 1 y el 1000")
    } while (num < 1 && num > 1000);
    cont++
} while (num == random||cont <6);
if (num == random) {
    alert("Enhorabuena, has acertado el número")
}else{
    alert("Lo sentimos, se le han acabado los intentos")
}



/**
 * Escribe un programa que permita jugar a muertos y heridos
 */

/**
 * Escribe un programa que permita realizar la suma de tantos
numeros como desee el usuario. Los números hay que guardarlos en un array.
 */
let numeros = new Array()
  let numero
  let suma = 0
  let esNum
  let salir = false
  do {
    do {
        numero = parseInt(prompt("Por favor introduzca un número"))
        alert(Number.isInteger(numero))
        if (Number.isInteger(numero) == true) {
            esNum = true
            alert("dentro del si")
        }else{
            esNum = false 
            alert("Dentro del else")
        }
    } while (esNum == false);
    numeros[numeros.length] = numero
    suma +=numero
    salir = confirm("Desea continuar?")
  } while (salir == true);
alert(numeros)
 /**
  * Realizar un programa que pidiendo la introduccion de números,
  * muestre en pantalla el numero de números positivos, negativos
  * y nulos. Los numeros hay que guardarlos en un array
  */

  let numeros = new Array()
  let numero
  let esNum
  let salir = false
  do {
    do {
        numero = parseInt(prompt("Por favor introduzca un número"))
        alert(Number.isInteger(numero))
        if (Number.isInteger(numero) == true) {
            esNum = true
            alert("dentro del si")
        }else{
            esNum = false 
            alert("Dentro del else")
        }
    } while (esNum == false);
    numeros[numeros.length] = numero

    salir = confirm("Desea continuar?")
  } while (salir == true);
alert(numeros)


  /**
   * Pide al usuario numeros y cuando ya no quiera continuar, mues-
   * tra el mayor y el menor. Los números hay que guardarlos en un array.
   */

  let numeros = new Array()
  let numero
  let esNum
  let salir = false
  do {
    do {
        numero = parseInt(prompt("Por favor introduzca un número"))
        alert(Number.isInteger(numero))
        if (Number.isInteger(numero) == true) {
            esNum = true
            alert("dentro del si")
        }else{
            esNum = false 
            alert("Dentro del else")
        }
    } while (esNum == false);
    numeros[numeros.length] = numero

    salir = confirm("Desea continuar?")
  } while (salir == true);
let maxNum
let = minNum
for (let i = 0; i < numeros.length; i++) {

    if (numeros[0]) {
        maxNum = numeros[0]
        minNum = numeros[0]
    }else{
        if (numeros[i]<minNum) {
            minNum = numeros[i]
        }
        if (numeros[i]>maxNum) {
            maxNum = numeros[i]
        }
    }   
}



/**
 *Busca todos los 1 de enero que sean domingo del año 2030 al 2050
 */

let cont = 0
for (let año = 2030; año <= 2050; año++){

    var año2 = new Date(año, 0, 1);
    if ( año2.getDay() === 0 ){
        alert("El uno de enero de " + año + " es domingo");
        cont++ 
    }
}
alert("En total hay " + cont + " 1 de enero que sean domingos desde 2030 hasta 2050")

/**
 *¿Cuantos días faltan para Navidad?
 */
today=new Date();
var navidad=new Date(today.getFullYear(), 11, 25);
if (today.getMonth()==11 && today.getDate()>25) 
{
    alert("La navidad empezo hace " + today.getDate() - 25 + " días")
}else if (today.getMonth()==11 && today.getDate()==25) {
    alert("Hoy es Navidad")
}else{
    var dia=1000*60*60*24;
    alert("Quedan "+Math.ceil((navidad.getTime()-today.getTime())/(dia))+ " días para navidad!");
}
/**
 * Construye las expresiones regulares necesarias para realizar las
siguientes operaciones:
- Validar un dni
- Validar un nombre
- Validar una url
- Validar una IP
- Poner en mayusculas todas las vocales de un string
- Saber si hay o no una determinada palabra en una frase
 */

//Validar DNI:

dni = prompt("Introduzca su dni")

var numero
var letra
var letras
var expresion_regular_dni = /^\d{8}[a-zA-Z]$/;
   
if(expresion_regular_dni.test(dni) == true){
    numero = dni.substr(0,dni.length-1);
    letra = dni.substr(dni.length-1,1);
    numero = numero % 23;
    letras='TRWAGMYFPDXBNJZSQVHLCKET';
    letras=letras.substring(numero,numero+1);
    if (letra!=letra.toUpperCase()) {
        alert('Dni erroneo, la letra del NIF no se corresponde');
    }else{
        alert('Dni correcto');
       }
}else{
    alert('Dni erroneo, formato no válido');
}

//Validar nombre

var nombre = prompt("introduzca su nombre")

var expresion_regular_nombre = /^[a-zA-Z]{2,}$/

if (expresion_regular_nombre.test(nombre)==true) {
    alert("El nombre es correcto")
}else{
    alert("El nombre es incorrecto")
}

//validar url

var url = prompt("Introduzca una URL")

var expresion_regular_url = /^[w-wW-W]{1,3}$/

if (expresion_regular_url.test(url) == true) {
    
}


//Validar ip