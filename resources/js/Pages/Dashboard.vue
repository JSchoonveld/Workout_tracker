<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <section class="dark:bg-classy-dark dark:text-gray-100 min-h-screen">
            <div class="container px-4 sm:px-6 lg:px-8 mx-auto py-10 min-h-screen flex items-center">
                <div class="py-12">
                    <h1 class="text-5xl md:text-6xl lg:text-8xl">Dashboard</h1>
                    <div class="bg-white dark:bg-slate-500 my-5 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 dark:text-white text-gray-900 text-2xl">You're logged in!</div>
                    </div>
                </div>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
