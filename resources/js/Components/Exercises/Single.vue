<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({ exercise: Array })

</script>
<template>
    <div class="container px-4 sm:px-6 lg:px-8 py-24 mx-auto">
        <div class="flex">
            <div class="sidebar w-3/12">
                <div class="dark:bg-slate-600 h-full mr-5 p-5">
                    <span class="text-2xl font-bold">Stats</span>
                    <ul class="my-5">
                        <li class="my-2">Lorem ipsum dolor.</li>
                        <li class="my-2">Lorem ipsum dolor.</li>
                        <li class="my-2">Lorem ipsum dolor.</li>
                        <li class="my-2">Lorem ipsum dolor.</li>
                    </ul>
                </div>
            </div>
            <div class="image-container w-9/12">
                <h1 class="lg:text-3xl dark:text-gray-100 mb-5">{{ exercise.name }}</h1>
                <img class="object-cover h-full w-full mt-2" src="../../../images/workout1.jpg" alt="{{ exercise.name }}">
            </div>
        </div>
        <div class="flex my-4">
            <div class="sidebar w-3/12">
                <div class="dark:bg-slate-600 h-full mr-5 p-5">
                    <span class="text-2xl font-bold">Lorem ipsum</span>
                    <p class="my-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam commodi excepturi minus neque nulla recusandae sed sunt. Cupiditate ea et incidunt quam repellendus rerum tenetur.</p>
                </div>
            </div>
            <div class="exercise-details p-5 w-9/12">
                <h2 class="lg:text-3xl dark:text-gray-100">Exercise details</h2>
                <div class="flex">
                    <b>Main muscle groups: </b><span class="mx-2">{{ exercise.bodyparts }}</span>
                </div>
                <div class="flex">
                    <b>Type: </b><span class="mx-2">Power</span>
                </div>
                <div class="flex">
                    <b>Mechanics:</b><span class="mx-2">Compound</span>
                </div>
                <div class="flex">
                    <b>Equipment:</b><span class="mx-2">Machine</span>
                </div>
                <div class="flex">
                    <b>Difficulty:</b><span class="mx-2">Beginner</span>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.image-container {
    height: 500px;
    overflow: hidden;
}

</style>
