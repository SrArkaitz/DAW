class Preguntas {
    private _pregunta: string;
    private _respuesta1: string;
    private _respuesta2: string;
    private _respuesta3: string;
    private _respuesta4: string;
    private _correcta: number;

    constructor (pregunta: string, respuesta1: string, respuesta2: string, respuesta3: string, respuesta4: string, correcta: number) {
        this._pregunta = pregunta;
        this._respuesta1 = respuesta1;
        this._respuesta2 = respuesta2;
        this._respuesta3 = respuesta3;
        this._respuesta4 = respuesta4;
        this._correcta = correcta;
    }


    get pregunta(): string {
        return this._pregunta;
    }

    get respuesta1(): string {
        return this._respuesta1;
    }

    get respuesta2(): string {
        return this._respuesta2;
    }

    get respuesta3(): string {
        return this._respuesta3;
    }

    get respuesta4(): string {
        return this._respuesta4;
    }

    get correcta(): number {
        return this._correcta;
    }
}
