<script setup>
import { ref } from 'vue';

import ChatLayout from '@/Layouts/ChatLayout.vue';
import Header from './Components/Header.vue';
import Search from './Components/SearchInput.vue';
import Sidebar from './Components/Sidebar.vue';

const sidebarOpen = ref(false);

const toggleSidebar = () => {
    sidebarOpen.value = !sidebarOpen.value;
}
</script>

<template>
    <ChatLayout>
        <!-- sidebar -->
        <Sidebar :sidebarActive="sidebarOpen" @close-sidebar="toggleSidebar" />

        <!-- sidebar overlay -->
        <div v-if="sidebarOpen" class="fixed top-0 left-0 w-full h-full z-[80] bg-[rgba(0,0,0,0)]"
            @click="toggleSidebar">
        </div>

        <!-- main content -->
        <div>
            <!-- mobile header -->
            <Header :currentPage="'Chats'" @open-sidebar="toggleSidebar" />

            <!-- search chats -->
            <Search />
        </div>
    </ChatLayout>
</template>
