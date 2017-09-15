
import Reuniao from '../dominio/Reuniao';

export const state = {
  reuniao: new Reuniao(),

};



export const mutations = {
    atualizarReuniao(state, reuniao) {
        state.reuniao = reuniao;
    },
    alterarUsuarios(state) {
        state.reuniao.usuarios = [0, 1, 2];
    }
};
