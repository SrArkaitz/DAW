const app = new Vue({
    el: '#app',
    data: {
        titulo: 'Hola mundo con vue',
        /* animales: [
             {nombre: 'manzana', cantidad: 10},
             {nombre: 'pera', cantidad: 0},
             {nombre: 'platano', cantidad: 6}
         ]*/
    },
    template: `
    <form id="formprofe" style="display: none">
         <h2>Profe</h2>  
         
    <label>Nombre:</label><br>
    <input type="text" id="nombrepro" name="nombrepro" value="">
    <br>
    <label>Apellido:</label><br>
    <input type="text" id="apellidopro" name="apellidopro" value="">
    <br>
    <label>Sexo:</label><br>
    <input type="text" id="sexopro" name="sexopro" value="">
    <br>
    <label>Asignatura:</label><br>
    <input type="text" id="asignatura" name="asignatura" value="">
    <br>
    <label>NumAlumnos:</label><br>
    <input type="text" id="numalumnos" name="numalumnos" value="">
    <br>
    <p>
        <button type="button" onclick="datosProfe()">Enviar</button>
    </p>
    </form>
   
  `,
})