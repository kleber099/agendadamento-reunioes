<template>
    <form class="form-horizontal">
        <div :class="erros.titulo ? 'form-group has-error' : 'form-group'">
            <label for="titulo" class="col-md-4 control-label">Titulo</label>
            <div class="col-md-6">
                <input id="titulo" type="text" class="form-control" v-model="reuniao.titulo" autofocus>
                <span class="help-block" v-if="erros.titulo">
                    <strong>{{ erros.titulo[0] }}</strong>
                </span>
            </div>
        </div>
        <div class="form-group">
            <label for="local" class="col-md-4 control-label">Local</label>
            <div class="col-md-6">
                <input id="local" type="text" class="form-control" v-model="reuniao.local">
            </div>
        </div >
        <div class="form-group">
            <label for="inicio" class="col-md-4 control-label">Inicio</label>
            <div class="col-md-6">
                <input id="inicio" type="date" class="form-control" v-model="reuniao.inicio">
            </div>
        </div>
        <div class="form-group">
            <label for="fim" class="col-md-4 control-label">Fim</label>
            <div class="col-md-6">
                <input id="fim" type="date" class="form-control" v-model="reuniao.fim">
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
</template>
<script>

import axios from 'axios'

import Reuniao from '../../dominio/Reuniao';

export default {
    data() {
        return {
            reuniao: new Reuniao(),
            erros: {
                titulo: [],
                local: [],
                inicio: [],
                fim: []
            }
        }
    },
    methods: {
        cadastrar(){
            this.erros = {};

            axios.post('/reunioes',this.reuniao)
                .then(resp => {
                    console.log("Cadastro Realizado com sucesso");
            }).catch( err => {
                    this.erros = err.response.data.errors;
            });
        }
    }

}
</script>