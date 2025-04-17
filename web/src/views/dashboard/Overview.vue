<script setup lang="ts">
import Statistics from '../../components/dashboard/overview/Statistics.vue';
import Table from '../../components/dashboard/overview/Table.vue';

const username = 'John Doe'
</script>

<template>
  <div class="min-h-full min-w-full flex gap-8 flex-wrap">
    <main class="flex-1 flex flex-col gap-8 flex-wrap">
      <div class="flex justify-between">
        <div class="flex flex-col gap-2">
          <h1 class="font-inter font-semibold text-4xl">Hello, {{ username.split(' ')[0] }}</h1>
          <p class="font-inter text-zinc-600">Your expenses for this period</p>
        </div>
      </div>
      <div class="flex gap-8 flex-wrap">
        <Statistics />
        <Table />
      </div>
    </main>
    <aside class="flex flex-col">
    </aside>
  </div>
</template>