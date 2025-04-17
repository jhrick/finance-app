<script setup lang="ts">
import { LayoutGrid, CalendarDays, ChartNoAxesColumnIncreasing, UsersRound, BadgeHelp, Settings, LogOut, PanelLeft, ArrowLeft, LucideProps } from "lucide-vue-next";
import { FunctionalComponent, onMounted, ref } from "vue";
import { useDasboardStore } from "../stores/dashboard";
import { useRouter } from "vue-router";
import { useModalStore } from "../stores/modal";

import AppIcon from "../components/AppIcon.vue";
import SettingsModal from "../components/dashboard/modals/settings/SettingsModal.vue";
import UserProfile from "../components/dashboard/UserProfile.vue";
import Notification from "../components/dashboard/Notification.vue";

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

const getCurrentPage = () => {
  const currentPage = menuItems.find((page) => page.name === dashboardStore.currentPage) ?? menuItems[0];

  return currentPage;
}

const getBreadcrums = () => {
  const currentPath = getCurrentPage()?.path.split('/dashboard').filter((path) => path);

  const breadcrums: Array<string> = [];

  if ((currentPath?.length as number) !== 0) {
    currentPath?.forEach((path) => {

      const pathWithoutSlash = path.split('/').pop();
      const normalizedPageName = String(pathWithoutSlash).charAt(0).toUpperCase() + String(pathWithoutSlash).slice(1);
      breadcrums.push(normalizedPageName);
    });

    return breadcrums;
  }

  return [getCurrentPage()?.name];
}

const handleChangeSection = ({ name, path }: { name: string, path: string }) => {
  dashboardStore.setCurrentPage(name);
  router.push(path);
}

const handleSettingsModal = () => {
  modalStore.open('dashboard-settings-modal');
}

onMounted(() => {
  const path = router.currentRoute.value.path;
  const page = menuItems.find((page) => page.path === path) as { name: string; icon: FunctionalComponent<LucideProps, {}, any, {}>; path: string; };

  if (page) {
    handleChangeSection({ name: page.name, path })
  }
})
</script>

<template>
  <div class="min-h-screen flex bg-zinc-300/20">
    <aside
      :class="`flex flex-col justify-between mt-2 transition-all duration-300 ease-in-out overflow-hidden ${menuIsOpen ? 'min-w-[20rem]' : 'min-w-[5rem]'}`">
      <div class="h-full flex flex-col">
        <div class="flex justify-between items-center mx-4 mb-4">
          <div
            :class="`flex items-center gap-4 transition-all duration-300 ${menuIsOpen ? 'opacity-100 w-[10rem]' : 'mb-0 opacity-0 w-[0rem]'}`">
            <AppIcon
              :class="`transition-all duration-300 ease-in-out ${menuIsOpen ? 'ml-0' : 'ml-[0.05rem]'} mx-[-10px] fill-cyan-950 size-16`" />
            <h2
              :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap ${menuIsOpen ? 'opacity-100 w-[10rem]' : 'opacity-0 w-[0rem]'} font-nunito-sans font-bold text-md text-zinc-800`">
              FinanceApp</h2>
          </div>
          <button @click="menuIsOpen = !menuIsOpen"
            class="cursor-pointer w-full h-full flex items-center justify-center">
            <PanelLeft class="text-zinc-600/60" />
          </button>
        </div>
        <h3 :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap ${menuIsOpen ? 'opacity-100 w-[10rem]' : 'opacity-0 w-[0rem]'}
           font-inter font-semibold uppercase text-zinc-500 text-sm px-5`">
          Menu</h3>
        <ul
          :class="`flex flex-col justify-items-center 2xl:justify-items-baseline gap-y-4 mx-4 border-b-[0.16rem] border-zinc-300/80 py-4 pl-1 transition-all duration-300 ${menuIsOpen ? 'mb-4' : 'mb-0'}`">
          <li v-for="item in menuItems" :key="item.name" @click="() => handleChangeSection(item)"
            :class="`cursor-pointer transition-all duration-300 ease-in-out flex justify-center rounded-xl p-[0.65rem]
              ${dashboardStore.currentPage === item.name ? 'bg-zinc-200/70 text-zinc-600' : 'text-zinc-400 hover:bg-zinc-200/50'}`">
            <div class="flex gap-2 w-full">
              <component :is="item.icon" :class="`transition-all duration-300 ease-in-out ${menuIsOpen ? 'flex-[0_0_12%]' : 'flex-[0_0_100%]'} size-6`" />
              <h4
                :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap 
              ${menuIsOpen ? 'opacity-100 w-[10rem]' : 'flex-[0_0_100%] opacity-0 w-[0rem]'} font-inter font-semibold`">
                {{ item.name }}</h4>
            </div>
          </li>
        </ul>
        <h3 :class="`transition-all duration-300 ease-in-out overflow-hidden whitespace-nowrap ${menuIsOpen ? 'opacity-100 w-[10rem]' : 'opacity-0 w-[0rem]'}
           font-inter font-semibold uppercase text-zinc-500 text-sm px-5`">
          General</h3>
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
    <div class="flex flex-col w-full">
      <header class="flex justify-between p-4">
        <div class="flex gap-x-2 items-center">
          <ArrowLeft v-if="(getBreadcrums()?.length as number) > 1" class="size-4" />
          <h1 v-for="page in getBreadcrums()" :key="page"
            class="font-inter font-medium text-md text-zinc-800 uppercase">{{ page }}</h1>
        </div>
        <div class="flex gap-x-2">
          <Notification />
          <UserProfile />
        </div>
      </header>
      <div class="w-full border-b-[0.16rem] border-zinc-300/80"></div>
      <main class="px-12 pt-8">
        <slot></slot>
      </main>
    </div>
  </div>
</template>