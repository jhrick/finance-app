<script setup lang="ts">
import { ChevronRight } from 'lucide-vue-next';

type Props = {
  name: string;
}

const props = defineProps<Props>();
</script>

<template>
  <div class="w-full flex flex-col gap-2">
    <header class="flex justify-between items-center">
      <h2 class="font-ubuntu font-medium text-2xl text-zinc-800">{{ props.name }}</h2>
      <button class="cursor-pointer flex items-center gap-2 p-1 bg-zinc-300/20 rounded-lg">
        <span class="font-inter font-medium text-zinc-700 p-2">
          See all
        </span>
        <ChevronRight class="size-8 bg-sky-600 text-white rounded-lg p-1" />
      </button>
    </header>
    <div class="w-full h-96 bg-zinc-200 border-2 border-zinc-300 rounded-2xl">
      <slot />
    </div>
  </div>
</template>