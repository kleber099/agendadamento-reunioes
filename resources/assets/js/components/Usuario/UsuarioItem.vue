<template>
    <div class="col-md-3">
        <div>
            <h3>{{ usuario.nome }}</h3>
            <h6>{{ usuario.email }}</h6>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["usuario"]
    }
</script>

