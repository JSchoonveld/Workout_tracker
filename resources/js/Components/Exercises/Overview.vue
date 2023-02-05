<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({ exercises: Array })

</script>
<template>
    <div class="container px-5 py-12 mx-auto">
        <div class="flex flex-wrap">
            <div v-for="exercise in exercises" class="lg:w-1/4 md:w-1/2 w-full exercise-card my-2">
                <div class="m-2 bg-slate-600 h-full rounded">
                    <Link :href="route('exercises.show', exercise.id)" class="block relative h-48 rounded overflow-hidden h-1/2">
                        <img class="object-cover h-full w-full" src="../../../images/workout1.jpg" alt="workout">
                    </Link>
                    <div class="p-5 flex flex-col justify-between items-between h-1/2">
                        <h2 class="bg:text-gray-100 text-lg tracking-widest title-font mb-1">  {{ exercise.name }}</h2>

                        <h3 class="text-xl pb-2" v-if="exercise.type === '1'">
                            Free weights
                        </h3>
                        <h3 class="text-xl pb-2" v-if="exercise.type === '2'">
                            Machine
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.exercise-card {
height: 350px;
}
</style>
