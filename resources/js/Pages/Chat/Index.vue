<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import Header from '@/Components/Custom/Header.vue';
import Search from './Components/SearchInput.vue';

</script>

<template>
    <MainLayout>
        <Header :currentPage="'Chats'" />

        <Search />
    </MainLayout>
</template>
