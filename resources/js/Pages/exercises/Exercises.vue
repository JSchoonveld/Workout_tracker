<script setup>
import LandingLayout from '@/Layouts/LandingLayout.vue';
import Overview from '@/Components/Exercises/Overview.vue';

import { Head } from '@inertiajs/vue3';

defineProps({ exercises: Array })
</script>

<template>
    <LandingLayout>
        <section class="dark:bg-classy-dark dark:text-gray-100 min-h-screen">
            <Head title="Exercises" />
            <div class="container px-4 sm:px-6 lg:px-8 mx-auto py-20 min-h-screen flex flex-col items-center">
                <div class="text-center">
                    <h1 class="text-5xl md:text-6xl lg:text-5xl my-5">Exercises by muscle group</h1>
                </div>
                <Overview :exercises="exercises" />
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
