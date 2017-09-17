export default class Usuario {
    constructor(user = {}) {
        this.id = user.id;
        this.name = user.name;
        this.email = user.email;
    }
}
