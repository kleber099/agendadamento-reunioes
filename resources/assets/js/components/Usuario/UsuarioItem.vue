<template>
    <div class="col-md-3">
        <div>
            <h3>{{ usuario.nome }}</h3>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["usuario"]
    }
</script>
