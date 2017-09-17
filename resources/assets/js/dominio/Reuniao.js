export default class Reuniao {
    constructor(reuniao = {}) {
        this.id = reuniao.id;
        this.titulo = reuniao.titulo;
        this.inicio = reuniao.inicio;
        this.fim = reuniao.fim;
        this.users = [];
    }
}
