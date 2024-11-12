<script setup>
defineProps({
    sidebarActive: Boolean,
});

defineEmits(['closeSidebar']);

</script>

<template>
    <div :class="{hidden: !sidebarActive}" class="fixed z-[100] flex flex-col w-4/5 min-h-screen py-6 px-8 bg-primary-100 dark:bg-primary-900">
        <div class="flex justify-between pb-12">
            <img class="w-12" src="/assets/svg/brand.svg" alt="">

            <!-- button -->
            <div @click="$emit('closeSidebar')" class="flex items-center justify-center">
                <svg class="w-6 h-6 text-primary-500 dark:text-primary-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18 17.94 6M18 18 6.06 6" />
                </svg>
            </div>
        </div>

        <div>
            <ul class="flex flex-col gap-6 text-primary-500 dark:text-primary-200">
                <li class="flex items-center gap-3 pb-3">
                    <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17h6l3 3v-3h2V9h-2M4 4h11v8H9l-3 3v-3H4V4Z" />
                    </svg>

                    <p class="font-bold text-3xl">Chat</p>
                </li>

                <li class="flex items-center gap-3 pb-3">
                    <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>

                    <p class="font-bold text-3xl">People</p>
                </li>

                <li class="flex items-center gap-3 pb-3">
                    <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z" />
                    </svg>

                    <p class="font-bold text-3xl">Shop</p>
                </li>

                <li class="flex items-center gap-3 pb-3">
                    <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                            d="M10 12v1h4v-1m4 7H6a1 1 0 0 1-1-1V9h14v9a1 1 0 0 1-1 1ZM4 5h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />
                    </svg>

                    <p class="font-bold text-3xl">Archive</p>
                </li>
            </ul>
        </div>
    </div>
</template>
