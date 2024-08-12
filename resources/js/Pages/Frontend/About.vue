<template>
    <Frontend>
        <h1>This is {{ title }}</h1>
    </Frontend>
</template>

<script setup>
import Frontend from "@/Layouts/FrontendLayout.vue";
    defineProps({
        title: String,
    })
</script>

<style scoped>

</style>