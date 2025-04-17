<script setup lang="ts">
import { ChevronRight } from 'lucide-vue-next';
import TimeSelect from '../TimeSelect.vue';
import OverviewCard from '../OverviewCard.vue';
</script>

<template>
  <OverviewCard name="Statistics">
    <header class="flex justify-between items-center p-4">
      <span class="font-inter flex items-end gap-1.5">
        <span class="font-semibold text-5xl text-zinc-800/90">4,102</span>
        <span class="text-lg text-zinc-600/80">saved</span>
      </span>
      <TimeSelect />
    </header>
  </OverviewCard>
</template>