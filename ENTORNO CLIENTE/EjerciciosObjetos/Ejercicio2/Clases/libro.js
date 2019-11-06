function Libro(titulo, isbn, tipo, ejemplares, disponible, fecha){
    this.titulo = titulo,
    this.isbn = isbn,
    this.tipo = tipo,  
    this.ejemplares = ejemplares,
    this.disponible = disponible,
    this.fecha = fecha,
    this.autores = []
}


Libro.prototype.setAutores = function(autores) {
    this.autores = autores;
}


