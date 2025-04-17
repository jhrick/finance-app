<script setup lang="ts">
import OverviewCard from '../OverviewCard.vue';

const content = [
  { name: 'Light', date: new Date().toDateString(), price: 19.28 },
  { name: 'Fire', date: new Date().toDateString(), price: 39.82 },
  { name: 'Water', date: new Date().toDateString(), price: 58.12 },
  { name: 'Earth', date: new Date().toDateString(), price: 20.57 },
]
</script>

<template>
  <OverviewCard name="Last expenses">
    <table class="w-full flex flex-col justify-between gap-3 py-4 px-8">
      <thead>
        <tr class="flex justify-between font-inter text-base text-zinc-500">
          <th class="flex-[20%] font-medium text-left">Item</th>
          <th class="flex-1 font-medium text-left">Price</th>
          <th class="flex-1 font-medium text-right">Date</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, idx) in content" :key="idx"
          class="flex justify-between font-inter text-lg text-zinc-800 border-b-2 border-zinc-300 py-4">
          <td class="flex-[20%] font-semibold text-left">{{ item.name }}</td>
          <td class="flex-1 font-semibold text-left">${{ item.price }}</td>
          <td class="flex-1 font-semibold text-right">{{ item.date }}</td>
        </tr>
      </tbody>
    </table>
  </OverviewCard>
</template>