<script lang="ts" setup>
type props = {
  data: {
    name: string;
    image: string;
    rating: number;
    message: string;
    date: string;
  }
};

const props = defineProps<props>();
</script>

<template>
  <div class="bg-white rounded-lg p-6 shadow-lg min-w-[380px] max-w-[380px] flex-grow">
    <div class="flex items-center mb-4">
      <img :src="props.data.image" class="w-12 h-12 rounded-full mr-3 object-cover">
      <div>
        <h3 class="font-semibold">{{ props.data.name }}</h3>
        <div class="flex">
          <i v-for="star in 5" :key="star" class="w-5 h-5" :class="{ 'text-gray-300': star > props.data.rating }"
            data-lucide="star" fill="#ffd250" stroke-width="0"></i>
        </div>
      </div>
    </div>
    <p class="font-nunito-sans font-semibold text-gray-900 text-lg mb-4">{{ props.data.message }}</p>
    <span class="text-gray-500 text-sm">{{ props.data.date }}</span>
  </div>
</template>