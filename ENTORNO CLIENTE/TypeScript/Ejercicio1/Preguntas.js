var Preguntas = /** @class */ (function () {
    function Preguntas(pregunta, respuesta1, respuesta2, respuesta3, respuesta4, correcta) {
        this._pregunta = pregunta;
        this._respuesta1 = respuesta1;
        this._respuesta2 = respuesta2;
        this._respuesta3 = respuesta3;
        this._respuesta4 = respuesta4;
        this._correcta = correcta;
    }
    Object.defineProperty(Preguntas.prototype, "pregunta", {
        get: function () {
            return this._pregunta;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Preguntas.prototype, "respuesta1", {
        get: function () {
            return this._respuesta1;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Preguntas.prototype, "respuesta2", {
        get: function () {
            return this._respuesta2;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Preguntas.prototype, "respuesta3", {
        get: function () {
            return this._respuesta3;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Preguntas.prototype, "respuesta4", {
        get: function () {
            return this._respuesta4;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Preguntas.prototype, "correcta", {
        get: function () {
            return this._correcta;
        },
        enumerable: true,
        configurable: true
    });
    return Preguntas;
}());
