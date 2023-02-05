<script setup>
import LandingLayout from '@/Layouts/LandingLayout.vue';
import Single from '@/Components/Exercises/Single.vue';

import { Head } from '@inertiajs/vue3';

defineProps({ exercise: Array })
</script>
<template>
    <LandingLayout>
        <section class="dark:bg-classy-dark dark:text-gray-100 min-h-screen py-10">
            <Head title="Exercise" />
            <Single :exercise="exercise" />
        </section>
    </LandingLayout>
</template>
