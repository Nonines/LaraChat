<script setup>
import { computed } from 'vue';
import { useSidebarStore } from '@/stores/sidebar';

import SidebarLinks from '@/Components/Custom/SidebarLinks.vue';

const sidebarStore = useSidebarStore();
const isOpen = computed(() => sidebarStore.isOpen);
</script>

<template>
    <!-- mobile-screens -->
    <div v-if="isOpen"
        class="fixed z-[100] flex flex-col w-4/5 min-h-screen py-6 px-8 bg-primary-100 dark:bg-primary-900">
        <div class="flex justify-between pb-12">
            <img class="w-12" src="/assets/svg/brand.svg" alt="">

            <!-- button -->
            <div @click="sidebarStore.closeSidebar" class="flex items-center justify-center">
                <svg class="w-6 h-6 text-primary-500 dark:text-primary-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18 17.94 6M18 18 6.06 6" />
                </svg>
            </div>
        </div>

        <SidebarLinks />
    </div>

    <!-- large-screens -->
    <div class="hidden relative lg:flex flex-col w-max min-h-screen py-6 pl-8 pr-14 bg-primary-100 dark:bg-primary-900">
        <div class="flex justify-between pb-12">
            <img class="w-12" src="/assets/svg/brand.svg" alt="">
        </div>

        <SidebarLinks />
    </div>
</template>
