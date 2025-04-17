<script setup>
import { Moon, Settings, UserCircle2 } from 'lucide-vue-next';
import { ref } from 'vue';

const isOpen = ref(false);

const options = [
  { name: 'My profile', icon: UserCircle2 },
  { name: 'Account settings', icon: Settings },
  { name: 'Theme', icon: Moon },
]
</script>

<template>
  <div @mouseleave="isOpen = false" class="relative">
    <img @mouseover="isOpen = true" src="https://randomuser.me/api/portraits/women/8.jpg" alt="user profile picture"
      class="size-12 rounded-full border-[0.16rem] border-zinc-300/80">
    <div 
      :class="`min-w-[18rem] absolute top-[3.35rem] right-0 
      ${isOpen ? 'opacity-100 z-10 min-auto' : 'opacity-0 -z-10 h-0'} transition-all duration-300 ease-in-out`">
      <ul class="bg-white border-[0.14rem] border-zinc-300/80 rounded-xl flex flex-col gap-y-2 py-4">
        <li v-for="item in options" :key="item.name" class="flex items-center gap-x-2 hover:bg-zinc-100/80 rounded-xl p-3 mx-4">
          <component :is="item.icon" class="size-5 text-zinc-900/70"/>
          <h4 class="font-inter font-semibold text-zinc-900/70 text-md">{{ item.name }}</h4>
        </li>
      </ul>
    </div>
  </div>
</template>