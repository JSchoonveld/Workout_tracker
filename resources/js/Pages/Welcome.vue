<script setup>
    import NavBar from '../Components/Structure/NavBar.vue'

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />
    <NavBar/>
    <div class="container mx-auto py-10">
        <h1 class="text-4xl">Home</h1>
    </div>
</template>
