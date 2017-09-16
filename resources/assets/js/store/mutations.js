
import Reuniao from '../dominio/Reuniao';

export const state = {
  reuniao: new Reuniao(),

};



export const mutations = {
    atualizarReuniao(state, reuniao) {
        state.reuniao = reuniao;
    },
    adicionarUsuarioReuniao(state, user) {
        state.reuniao.users.push(user);
    }
};
