<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <div class="dark container mx-auto">
        <header class="text-gray-600 body-font dark:bg-classy-dark">
            <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    Logo
                    <span class="ml-3 text-xl dark:text-gray-100">Tailblocks</span>
                </a>
                <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                    <Link
                        :href="route('home')"
                        class="mr-5 hover:text-gray-900 dark:text-gray-100"
                    >Home
                    </Link>
                    <Link
                        :href="route('about')"
                        class="mr-5 hover:text-gray-900 dark:text-gray-100"
                    >About
                    </Link>
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        class="text-sm text-gray-700 dark:text-gray-100 underline"
                    >Dashboard</Link
                    >
                </nav>
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('logout')"
                    class="text-sm text-gray-700 dark:text-gray-100 underline"
                >Log out</Link
                >
                <Link
                    v-if="!$page.props.auth.user"
                    :href="route('login')"
                    class="text-sm text-gray-700 dark:text-gray-100 underline"
                >Log in</Link
                >
            </div>
        </header>
    </div>
</template>

<style scoped>

nav {
}
ul {
   display: flex;
}
</style>
