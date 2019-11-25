let usuario = [];
let cuenta = [];

usuario[0] = new usuario("73438637M", "1234567")
cuenta[0] = new Cuentas("ES225476512912567436547", "25/11/2019", "Equipo de voleibol", 150, 3000);
cuenta[1] = new Cuentas("ES225476512912567436547", "27/11/2019", "Piso vitoria", 350, 3000);



function cargar(){
let botonDiv = document.getElementById("botones")
let numeros = [];
let salir = false;
for (let i = 0; i < 10; i++) {
     salir = false;
     while (salir == false) {
         let num = Math.floor(Math.random()*10)
         if (!numeros.includes[num]) {
             salir = true;
             numeros[numeros.length] = num
         }
     }
     
}


}