<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import Header from '@/Components/Custom/Header.vue';
import Sidebar from '@/Components/Custom/Sidebar.vue';

defineProps({
    title: String,
})

const sidebarOpen = ref(false);

const toggleSidebar = () => {
    sidebarOpen.value = !sidebarOpen.value;
}

</script>

<template>

    <Head :title="title" />

    <Banner />

    <div class="min-h-screen bg-gray-200 dark:bg-primary-800">
        <!-- sidebar overlay -->
        <div v-if="sidebarOpen" class="fixed top-0 left-0 w-full h-full z-[80] bg-[rgba(0,0,0,0)]"
            @click="toggleSidebar">
        </div>

        <Sidebar :sidebarActive="sidebarOpen" @close-sidebar="toggleSidebar" />

        <Header :currentPage="'Chats'" @open-sidebar="toggleSidebar" />

        <main>
            <slot />
        </main>
    </div>
</template>
