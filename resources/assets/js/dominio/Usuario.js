export default class Usuario {
    constructor(usuario = {}) {
        this.id = usuario.id;
        this.nome = usuario.nome;
        this.email = usuario.email;
    }
}
