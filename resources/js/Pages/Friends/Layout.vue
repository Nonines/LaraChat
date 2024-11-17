<script setup>
import { Link } from '@inertiajs/vue3';

import MainLayout from '@/Layouts/MainLayout.vue';
import Header from '@/Components/Custom/Header.vue';

const activeTabClasses = 'border-primary-600 text-primary-600 dark:text-primary-100 dark:border-primary-400';

const inactiveTabClasses = 'hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:hover:border-gray-300 dark:border-none';

</script>

<template>
    <MainLayout title="Friends">
        <Header :currentPage="'Friends'" />

        <!-- tabs -->
        <section class="px-brand-small">
            <div
                class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <Link :href="route('friends.index')" class="inline-block p-4 border-b-2 rounded-t-lg "
                            :class="route().current('friends.index') ? activeTabClasses : inactiveTabClasses">All</Link>
                    </li>

                    <li class="me-2">
                        <Link :href="route('friends.friendRequests')" class="inline-block p-4 border-b-2 rounded-t-lg "
                        :class="route().current('friends.friendRequests') ? activeTabClasses : inactiveTabClasses">Requests</Link>
                    </li>

                    <!-- <li class="me-2">
                        <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg">Sent
                            Requests</a>
                    </li>

                    <li class="me-2">
                        <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg">Blocked</a>
                    </li> -->
                </ul>
            </div>
        </section>

        <section class="pt-brand-small px-brand-small">
            <slot />
        </section>
    </MainLayout>
</template>
