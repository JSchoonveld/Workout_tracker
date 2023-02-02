<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <nav class="py-5">
        <ul>
            <li>
                <Link
                    :href="route('home')"
                    class="bg-blue-500 hover:bg-blue-700 text-white hover:text-white rounded px-3 py-2 mx-2"
                >Home
                </Link>
            </li>
            <li>
                <Link
                    :href="route('about')"
                    class="bg-blue-500 hover:bg-blue-700 text-white hover:text-white rounded px-3 py-2 mx-2"
                >About
                </Link>
            </li>
        </ul>
    </nav>
</template>

<style scoped>

nav {
}
ul {
   display: flex;
}
</style>
