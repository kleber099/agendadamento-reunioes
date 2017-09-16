<template>
    <div>
        <pesquisar-usuario></pesquisar-usuario>
        <div class="row">
            <usuario-item v-for="user in users" :key="user.id" :user="user"></usuario-item>
        </div>
    </div>
</template>

<script>
import PesquisarUsuario from './PesquisarUsuario.vue';
import UsuarioItem from './UsuarioItem';

export default {
    components: {PesquisarUsuario, UsuarioItem},
    computed: {
        users() {
            return this.$store.state.reuniao.users;
        }
    }
}
</script>

