
import Reuniao from '../dominio/Reuniao';

export const state = {
  reuniao: new Reuniao(),

};



export const mutations = {
    atualizarReuniao(state, reuniao) {
        state.reuniao = reuniao;
    },
    adicionarUsuarioReuniao(state, user) {
        let userEncontrado = state.reuniao.users.filter( u => u.id == user.id )[0];

        if(!userEncontrado) {
            state.reuniao.users.push(user);
        }
    }
};
