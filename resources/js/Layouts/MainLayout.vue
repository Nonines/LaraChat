<script setup>
import { computed, onMounted } from 'vue';
import { Head, router } from '@inertiajs/vue3';
import { useSidebarStore } from '@/stores/sidebar';

import Banner from '@/Components/Banner.vue';
import Sidebar from '@/Components/Custom/Sidebar.vue';

defineProps({
    title: String,
});

const sidebarStore = useSidebarStore();
const isOpen = computed(() => sidebarStore.isOpen);

onMounted(() => {
    router.on('navigate', () => {
        sidebarStore.closeSidebar();
    });
});
</script>

<template>

    <Head :title="title" />

    <Banner />

    <div class="min-h-screen bg-gray-200 dark:bg-primary-800">
        <!-- sidebar overlay -->
        <div v-if="isOpen" class="fixed top-0 left-0 w-full h-full z-[80] bg-[rgba(0,0,0,0)]"
            @click="sidebarStore.closeSidebar">
        </div>

        <div class="lg:flex">
            <Sidebar />

            <main class="lg:w-full">
                <slot />
            </main>
        </div>
    </div>
</template>
