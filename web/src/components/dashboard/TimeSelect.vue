<script setup lang="ts">
import { ref } from 'vue';

const selectedFilter = ref('Today');

const filters = ['Today', 'Weekly', 'Monthly', 'Yearly', 'All time'];
</script>

<template>
  <div class="flex items-center gap-2 bg-zinc-100 border-2 border-zinc-300 p-2 rounded-xl">
    <span @click="() => selectedFilter = filter" v-for="(filter, idx) in filters" :key="idx"
      :class="`cursor-pointer font-inter font-medium py-2 px-4 rounded-lg 
      transition-all duration-200 ease-in-out ${selectedFilter === filter ? 'bg-sky-600 text-zinc-50' : 'bg-transparent text-zinc-500'}`">
      {{ filter }}</span>
  </div>
</template>