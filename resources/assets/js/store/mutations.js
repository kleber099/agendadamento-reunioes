
import Reuniao from '../dominio/Reuniao';

export const state = {
  reuniao: new Reuniao(),

};



export const mutations = {
    atualizarReuniao(state, reuniao) {
        state.reuniao = reuniao;
        state.reuniao.inicio = `${state.reuniao.inicio}T03:00:00.000Z`;
        state.reuniao.fim = `${state.reuniao.fim}T03:00:00.000Z`;
    },
    adicionarUsuarioReuniao(state, user) {
        let userEncontrado = state.reuniao.users.filter( u => u.id == user.id )[0];

        if(!userEncontrado) {
            state.reuniao.users.push(user);
        }
    }
};
