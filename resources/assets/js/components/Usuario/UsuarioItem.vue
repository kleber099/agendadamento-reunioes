<template>
    <div class="col-md-3">
        <div>
            <h3>{{ user.name }}</h3>
            <h6>{{ user.email }}</h6>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["user"]
    }
</script>

