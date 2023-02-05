<script setup>
import LandingLayout from '@/Layouts/LandingLayout.vue';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <LandingLayout>
        <section class="dark:bg-classy-dark dark:text-gray-100 min-h-screen">
            <Head title="About" />
            <div class="container px-4 sm:px-6 lg:px-8 mx-auto py-10 min-h-screen flex items-center">
                <h1 class="text-5xl md:text-6xl lg:text-8xl">About</h1>
            </div>
        </section>
    </LandingLayout>
</template>

<script>
export default {
    data() {
        return {
            show: false
        }
    },
}
</script>
