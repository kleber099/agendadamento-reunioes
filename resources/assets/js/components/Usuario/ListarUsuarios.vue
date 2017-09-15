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