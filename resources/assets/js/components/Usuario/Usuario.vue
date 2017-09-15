<template>
    <div>
        <pesquisar-usuario></pesquisar-usuario>
        <div class="row">
            <usuario-item v-for="usuario in usuarios" :key="usuario.id" :usuario="usuario"></usuario-item>
        </div>
    </div>
</template>

<script>
import PesquisarUsuario from './PesquisarUsuario.vue';
import UsuarioItem from './UsuarioItem';

export default {
    components: {PesquisarUsuario, UsuarioItem},
    computed: {
        usuarios() {
            return this.$store.state.reuniao.usuarios;
        }
    }
}
</script>

