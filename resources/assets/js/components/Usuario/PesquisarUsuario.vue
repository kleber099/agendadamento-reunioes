<template>
    <div>
        <label>
            <span>Participantes</span>
            <el-autocomplete
                    class="inline-input"
                    v-model="texto"
                    :fetch-suggestions="querySearch"
                    :trigger-on-focus="false"
                    placeholder="Please Input"
                    @select="handleSelect"
            ></el-autocomplete>
        </label>
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
                                user.nome = item.name;
                                user.email = item.email;
                                return user;
                            });

                            this.results = queryString ? links.filter(this.createFilter(queryString)) : links;

                            //função que retorna os resultados
                            cb(this.results);
                        }, err => console.log(err));
                }

                //só mostra lista se existirem resultados
                if ( this.results ) {
                    //mostra a lista retornada pela ultima requisição
                    cb(this.results);
                }
            },
            createFilter(queryString) {
                return (link) => {
                    return (link.value.indexOf(queryString.toLowerCase()) === 0);
                };
            },
            handleSelect(item) {
                let user = new Usuario(item);
                this.texto = '';

            }
        }
    }
</script>