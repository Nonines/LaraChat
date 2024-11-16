<script setup>
import { computed } from 'vue';
import { Head } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import Sidebar from '@/Components/Custom/Sidebar.vue';
import { useSidebarStore } from '@/stores/sidebar';

defineProps({
    title: String,
});

const sidebarStore = useSidebarStore();
const isOpen = computed(() => sidebarStore.isOpen);
</script>

<template>

    <Head :title="title" />

    <Banner />

    <div class="min-h-screen bg-gray-200 dark:bg-primary-800">
        <!-- sidebar overlay -->
        <div v-if="isOpen" class="fixed top-0 left-0 w-full h-full z-[80] bg-[rgba(0,0,0,0)]"
            @click="sidebarStore.closeSidebar">
        </div>

        <Sidebar />

        <main>
            <slot />
        </main>
    </div>
</template>
