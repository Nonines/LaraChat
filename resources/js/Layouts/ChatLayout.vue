<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';

defineProps({
    title: String,
    // default: appName,
})
</script>

<template>

    <Head :title="title" />

    <Banner />

    <div class="min-h-screen bg-gray-200 dark:bg-primary-800">
        <!-- Page Content -->
        <main>
            <slot />
        </main>
    </div>
</template>
