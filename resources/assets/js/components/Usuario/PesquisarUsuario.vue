<template>
    <div class="form-group">
        <label for="inicio" class="col-md-4 control-label">Participante</label>
        <div class="col-md-6">
            <el-autocomplete
                    class="inline-input"
                    v-model="texto"
                    :fetch-suggestions="querySearch"
                    :trigger-on-focus="false"
                    placeholder="Nome de Usuário"
                    @select="handleSelect"
            ></el-autocomplete>
        </div>
    </div>
</template>

<script>
import Usuario from '../../dominio/Usuario';

    export default {
        data() {
            return {
                links: [],
                results: [],
                texto: ''
            };
        },
        methods: {
            querySearch(queryString, cb) {

                if ( queryString.length == 1 || queryString.length % 3 == 0 ) {
                    axios.get(`/users/${queryString}/buscar`)
                        .then(res => {

                            //converte os resultados em um formato válido para o componente
                            this.links = res.data;

                            //monta a lista de resultados
                            let links = this.links.map(item => {
                                const user = item;
                                user.id = item.id;
                                user.value = item.name;
                                user.name = item.name;
                                user.email = item.email;
                                return user;
                            });

                            this.results = queryString ? links.filter(this.createFilter(queryString)) : links;

                            console.log(this.results);

                            //função que retorna os resultados
                            cb(this.results);
                        });
                }

                //só mostra lista se existirem resultados
                if ( this.results ) {
                    //mostra a lista retornada pela ultima requisição
                    cb(this.results);
                }
            },
            createFilter(queryString) {
                return (link) => {
                    return (link.value.toLowerCase().indexOf(queryString.toLowerCase()) === 0);
                };
            },
            handleSelect(item) {
                let user = new Usuario(item);
                this.$store.commit('adicionarUsuarioReuniao', user);
                this.texto = '';

            }
        }
    }
</script>