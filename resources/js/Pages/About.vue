<script setup>
import LandingLayout from '@/Layouts/LandingLayout.vue';</script>
import { Head } from '@inertiajs/vue3';

<template>
    <LandingLayout>
        <section class="dark:bg-classy-dark dark:text-gray-100 min-h-screen">
            <Head title="About" />
            <div class="container px-4 sm:px-6 lg:px-8 mx-auto py-10 min-h-screen flex items-center">
                <h1 class="text-4xl">About</h1>
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
