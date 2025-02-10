<script setup lang="ts">
interface props {
  title: string;
  description?: string;
}

const props = defineProps < props > ();
</script>

<template>
  <header class="flex flex-col p-4 border-b-[0.15rem] border-zinc-200">
    <h1 class="font-inter font-semibold text-2xl text-stone-800">{{ props.title }}</h1>
    <p v-if="props.description" class="text-sm text-zinc-500">{{ props.description }}</p>
  </header>
</template>