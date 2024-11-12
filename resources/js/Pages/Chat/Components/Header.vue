<script setup>
defineProps({
    currentPage: String
})

defineEmits(['openSidebar']);

</script>

<template>
    <header class="flex items-center justify-between py-6 px-brand-small text-primary-900 dark:text-primary-100">
        <div class="flex items-center gap-3">
            <button @click="$emit('openSidebar')" class="p-2">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                </svg>
            </button>

            <h1 class="text-2xl font-extrabold">{{ currentPage }}</h1>
        </div>

        <div>
            <button>
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </button>
        </div>
    </header>
</template>
