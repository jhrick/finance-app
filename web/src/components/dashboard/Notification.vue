<script setup lang="ts">
import { Bell, Moon, Settings, UserCircle2 } from 'lucide-vue-next';
import { ref } from 'vue';

const isOpen = ref(false);

interface Notification {
  img: string;
  title: string,
  message: string,
  receivedAt: string,
}

const notifications: Notification[] = [
  {
    img: 'https://images.unsplash.com/photo-1735534151807-17f107a64cf6?q=80&w=1937&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    title: 'Notfication test',
    message: 'development',
    receivedAt: '3 hours'
  }
]
</script>

<template>
  <div class="relative">
    <div class="cursor-pointer rounded-2xl text-zinc-500 bg-zinc-200/50 p-3">
      <Bell @mouseover="isOpen = true" class="size-6" />
    </div>
    <div @mouseleave="isOpen = false" :class="`min-w-[18rem] absolute top-[-1rem] right-0
      ${isOpen ? 'opacity-100 z-10 min-auto' : 'opacity-0 -z-10 h-0'} transition-all duration-300 ease-in-out`">
      <div class="m-[4.5rem]"></div>
      <div v-if="notifications.length <= 0"
        class="bg-white border-[0.14rem] border-zinc-300/80 rounded-xl flex flex-col items-center gap-y-2 py-4">
        <img src="../../assets/empty-notification.png" alt="empty notification illustration"
          class="object-cover w-full pr-8">
        <h1 class="font-inter font-medium text-lg text-gray-700">No yet notifications</h1>
      </div>
      <ul v-else class="bg-white border-[0.14rem] border-zinc-300/80 rounded-xl flex flex-col gap-y-2 py-4 mt-4">
        <li v-for="notification in notifications" :key="notification.title"
          class="flex items-center gap-x-2 hover:bg-zinc-100/80 rounded-xl mx-4 p-3">
          <img :src="notification.img" alt="notification image" class="size-16 rounded-xl object-cover">
          <div class="flex flex-col items-between h-full">
            <h4 class="font-inter font-semibold text-zinc-600/70 text-sm">{{ notification.title }}</h4>
            <p class="font-inter font-semibold text-zinc-900/70 text-md">{{ notification.message }}</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>