<template>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="titulo" class="col-md-4 control-label">Titulo</label>
            <div class="col-md-6">
                <input id="titulo" type="text" class="form-control" v-model="reuniao.titulo" autofocus>
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
            reuniao: new Reuniao()
        }
    },
    methods: {
        cadastrar(){
            axios.post('/reunioes',this.reuniao)
                .then(resp =>{
                    console.log("Cadastro Realizado com sucesso");
            }, err => {console.log("Erro ao cadastrar")});
        }
    }

}
</script>