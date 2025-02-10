<script setup lang="ts">
import { LayoutGrid, CalendarDays, ChartNoAxesColumnIncreasing, UsersRound, BadgeHelp, Settings, LogOut, PanelLeft, PanelLeftOpen } from "lucide-vue-next";
import { ref } from "vue";
import { useDasboardStore } from "../stores/dashboard";
import { useRouter } from "vue-router";
import { useModalStore } from "../stores/modal";

import AppIcon from "../components/AppIcon.vue";
import SettingsModal from "../components/dashboard/modals/settings/SettingsModal.vue";

const router = useRouter();

const dashboardStore = useDasboardStore();
const modalStore = useModalStore();

const menuIsOpen = ref(false);

const menuItems = [
  { name: "Overview", icon: LayoutGrid, path: "/dashboard" },
  { name: "Calendar", icon: CalendarDays, path: "/dashboard/calendar" },
  { name: "Finances", icon: ChartNoAxesColumnIncreasing, path: "/dashboard/finances" },
  { name: "People", icon: UsersRound, path: "/dashboard/people" }
];

const handleChangeSection = ({ name, path }: { name: string, path: string }) => {
  dashboardStore.setCurrentPage(name);
  router.push(path);
}

const handleSettingsModal = () => {
  modalStore.open('dashboard-settings-modal');
}
</script>

<template>
  <div class="min-h-screen flex bg-zinc-300/20">
    <aside @mouseover="menuIsOpen = true" @mouseleave="menuIsOpen = false"
      :class="`flex flex-col justify-between mt-2 transition-all duration-300 ease-in-out overflow-hidden ${menuIsOpen ? 'min-w-[20rem]' : 'min-w-[5rem]'}`">
      <div class="h-full flex flex-col">
        <div :class="`flex items-center gap-4 mx-4 transition-all duration-300 ${menuIsOpen ? 'mb-4' : 'mb-0'}`">
          <AppIcon
            :class="`transition-all duration-300 ease-in-out ${menuIsOpen ? 'ml-0' : 'ml-[0.05rem]'} mx-[-10px] fill-cyan-950 size-16`" />
          <h2
            :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap ${menuIsOpen ? 'opacity-100 w-[10rem]' : 'opacity-0 w-[0rem]'} font-nunito-sans font-bold text-md text-zinc-800`">
            FinanceApp</h2>
        </div>
        <h3 :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap ${menuIsOpen ? 'opacity-100 w-[10rem]' : 'opacity-0 w-[0rem]'}
           font-inter font-semibold uppercase text-zinc-500 text-sm px-5`">
          Dashboard</h3>
        <ul
          :class="`flex flex-col justify-items-center 2xl:justify-items-baseline gap-y-4 mx-4 border-b-[0.16rem] border-zinc-300/80 py-4 pl-1 transition-all duration-300 ${menuIsOpen ? 'mb-4' : 'mb-0'}`">
          <li v-for="item in menuItems" :key="item.name" @click="() => handleChangeSection(item)"
            :class="`cursor-pointer transition-all duration-300 ease-in-out flex gap-x-2 rounded-xl p-[0.65rem]
              ${dashboardStore.currentPage === item.name ? 'bg-zinc-200/70 text-zinc-600/70' : 'text-zinc-600/70 hover:bg-zinc-200/50'}`">
            <component :is="item.icon" :class="`size-6 ml-2`" />
            <h4
              :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap 
              ${menuIsOpen ? 'opacity-100 w-[10rem]' : 'opacity-0 w-[0rem]'} font-inter font-semibold text-zinc-600/70`">
              {{ item.name }}</h4>
          </li>
        </ul>
        <h3 :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap ${menuIsOpen ? 'opacity-100 w-[10rem]' : 'opacity-0 w-[0rem]'}
           font-inter font-semibold uppercase text-zinc-500 text-sm px-5`">
          Support</h3>
        <ul class="flex flex-col items-center 2xl:items-baseline gap-y-4 mx-4 py-4 pl-1">
          <li
            class="cursor-pointer selected:bg-zinc-200/70 hover:bg-zinc-200/50 transition-all duration-250 flex gap-x-2 rounded-xl w-full p-[0.65rem]">
            <BadgeHelp
              :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap ${menuIsOpen ? 'ml-0' : 'ml-1'} size-6 text-zinc-600/70`"
              stroke-width="2" />
            <h4
              :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap ${menuIsOpen ? 'opacity-100 w-[10rem]' : 'opacity-0 w-[0rem]'} font-inter font-semibold text-zinc-600/70`">
              Help</h4>
          </li>
          <li @click="handleSettingsModal"
            class="cursor-pointer selected:bg-zinc-200/70 hover:bg-zinc-200/50 transition-all duration-250 flex gap-x-2 rounded-xl w-full p-[0.65rem]">
            <Settings
              :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap ${menuIsOpen ? 'ml-0' : 'ml-1'} size-6 text-zinc-600/70`"
              stroke-width="2" />
            <h4
              :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap ${menuIsOpen ? 'opacity-100 w-[10rem]' : 'opacity-0 w-[0rem]'} font-inter font-semibold text-zinc-600/70`">
              Settings</h4>
          </li>
        </ul>
        <SettingsModal />
      </div>
      <div class="flex flex-col border-t-[0.16rem] border-zinc-300/80 pt-4 m-4 pl-1">
        <button
          class="cursor-pointer selected:bg-red-300/70 hover:bg-red-300/50 transition-all duration-250 flex gap-x-2 rounded-xl p-[0.65rem]">
          <LogOut
            :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap ${menuIsOpen ? 'ml-0' : 'ml-1'} size-6 text-red-800/70`" />
          <h4
            :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap ${menuIsOpen ? 'opacity-100 w-[4rem]' : 'opacity-0 w-[0rem]'} font-inter font-semibold text-red-800/70`">
            Logout</h4>
        </button>
      </div>
    </aside>
    <div class="border-r-[0.16rem] border-zinc-300/80"></div>
    <main class="pl-12 pt-8">
      <slot></slot>
    </main>
  </div>
</template>