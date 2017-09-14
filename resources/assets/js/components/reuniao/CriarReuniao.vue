<template>
    <div>
        <div class="alert alert-success" v-if="sucesso" v-text="sucesso"></div>

        <form class="form-horizontal">
            <div :class="erros.titulo.length ? 'form-group has-error' : 'form-group'">
                <label for="titulo" class="col-md-4 control-label">Titulo</label>

                <div class="col-md-6">
                    <input id="titulo" type="text" class="form-control" v-model="reuniao.titulo" autofocus>

                    <span class="help-block" v-if="erros.titulo.length">
                        <strong>{{ erros.titulo[0] }}</strong>
                    </span>
                </div>
            </div>

            <div :class="erros.local.length ? 'form-group has-error' : 'form-group'">
                <label for="local" class="col-md-4 control-label">Local</label>

                <div class="col-md-6">
                    <input id="local" type="text" class="form-control" v-model="reuniao.local">

                    <span class="help-block" v-if="erros.local.length">
                        <strong>{{ erros.local[0] }}</strong>
                    </span>
                </div>
            </div>

            <div :class="erros.inicio.length ? 'form-group has-error' : 'form-group'">
                <label for="inicio" class="col-md-4 control-label">Inicio</label>

                <div class="col-md-6">
                    <input id="inicio" type="date" class="form-control" v-model="reuniao.inicio">

                    <span class="help-block" v-if="erros.inicio.length">
                        <strong>{{ erros.inicio[0] }}</strong>
                    </span>
                </div>
            </div>

            <div :class="erros.fim.length ? 'form-group has-error' : 'form-group'">
                <label for="fim" class="col-md-4 control-label">Fim</label>

                <div class="col-md-6">
                    <input id="fim" type="date" class="form-control" v-model="reuniao.fim">

                    <span class="help-block" v-if="erros.fim.length">
                        <strong>{{ erros.fim[0] }}</strong>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary" @click.prevent="cadastrar">
                        Cadastrar
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>
<script>

    import axios from 'axios'

    import Reuniao from '../../dominio/Reuniao';

    export default {
        props: ['id'],
        data() {
            return {
                reuniao: new Reuniao(),
                erros: {
                    titulo: [],
                    local: [],
                    inicio: [],
                    fim: []
                },
                sucesso: ''
            }
        },
        mounted() {
            if(this.id) {
                this.encontrar();
            }

        },
        methods: {
            cadastrar() {
                this.sucesso = '';
                this.limparErros();

                if(this.id) {
                    this.atualizar()
                } else {
                    this.inserir();
                }
            },

            inserir(){
                axios.post('/reunioes', this.reuniao)
                    .then(resp => this.sucesso = "Reuniao Adicionada",
                        err => this.tratarErros(err.response.data.errors)
                    );
            },
            atualizar() {
                axios.put(`/reunioes/${this.id}`, this.reuniao)
                    .then(resp => this.sucesso = "Reuniao Atualizada",
                        err => this.tratarErros(err.response.data.errors)
                    );
            },
            encontrar() {
                axios.get(`/reunioes/${this.id}`)
                    .then(resp => { this.reuniao = resp.data},
                        err => this.tratarErros(err.response.data.errors)
                    );
            },
            limparErros() {
                this.erros = {
                    titulo: [],
                    local: [],
                    inicio: [],
                    fim: []
                }
            },
            tratarErros(erros) {
                if (erros.titulo) {
                    this.erros.titulo = erros.titulo;
                }

                if (erros.local) {
                    this.erros.local = erros.local;
                }

                if (erros.inicio) {
                    this.erros.inicio = erros.inicio;
                }

                if (erros.fim) {
                    this.erros.fim = erros.fim;
                }
            }
        }

    }
</script>