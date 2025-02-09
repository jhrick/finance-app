<script setup>
import { LayoutGrid, CalendarDays, ChartNoAxesColumnIncreasing, UsersRound, BadgeHelp, Settings, LogOut, PanelLeft } from "lucide-vue-next";
import AppIcon from "../components/AppIcon.vue";
</script>

<template>
  <div class="min-h-screen flex bg-zinc-300/20">
    <aside class="flex flex-col justify-between mt-2">
      <div class="h-full flex flex-col">
        <div class="flex items-center mx-4">
          <AppIcon class="mx-[-10px] 2xl:ml-[-20px] fill-cyan-950 size-16 2xl:size-24" />
          <div class="hidden 2xl:flex flex-col mr-4">
            <h2 class="font-nunito-sans font-bold text-md text-zinc-800">FinanceApp</h2>
            <p class="font-nunito-sans text-sm text-nowrap text-zinc-600">Manager your finances</p>
          </div>
          <button class="relative cursor-pointer hidden 2xl:block">
            <PanelLeft stroke-width="2"
              class="size-6 text-zinc-600/70 transition-transform duration-300"/>
          </button>
        </div>
        <div class="border-b-[0.16rem] border-zinc-300/80"></div>
        <h3 class="hidden 2xl:block font-inter font-semibold uppercase text-zinc-500 text-sm p-5">Dashboard</h3>
        <ul
          class="flex flex-col justify-items-center 2xl:items-baseline gap-y-4 mx-4 border-b-[0.16rem] border-zinc-300/80 pb-4 pt-4 2xl:pt-0">
          <li
            class="cursor-pointer selected:bg-zinc-200/70 hover:bg-zinc-200/50 transition-all duration-250 flex gap-x-2 rounded-xl w-full p-[0.65rem]">
            <LayoutGrid stroke-width="2" class="size-6 text-zinc-600/70" />
            <h4 class="hidden 2xl:block font-inter font-semibold text-zinc-600/70">Overview</h4>
          </li>
          <li
            class="cursor-pointer selected:bg-zinc-200/70 hover:bg-zinc-200/50 transition-all duration-250 flex gap-x-2 rounded-xl w-full p-[0.65rem]">
            <CalendarDays stroke-width="2" class="size-6 text-zinc-600/70" />
            <h4 class="hidden 2xl:block font-inter font-semibold text-zinc-600/70">Calendar</h4>
          </li>
          <li
            class="cursor-pointer selected:bg-zinc-200/70 hover:bg-zinc-200/50 transition-all duration-250 flex gap-x-2 rounded-xl w-full p-[0.65rem]">
            <ChartNoAxesColumnIncreasing stroke-width="2" class="size-6 text-zinc-600/70" />
            <h4 class="hidden 2xl:block font-inter font-semibold text-zinc-600/70">Finances</h4>
          </li>
          <li
            class="cursor-pointer selected:bg-zinc-200/70 hover:bg-zinc-200/50 transition-all duration-250 flex gap-x-2 rounded-xl w-full p-[0.65rem]">
            <UsersRound stroke-width="2" class="size-6 text-zinc-600/70" />
            <h4 class="hidden 2xl:block font-inter font-semibold text-zinc-600/70">People</h4>
          </li>
        </ul>
        <h3 class="hidden 2xl:block font-inter font-semibold uppercase text-zinc-500 text-sm p-5">Support</h3>
        <ul class="flex flex-col items-center 2xl:items-baseline gap-y-4 mx-4 pb-4 pt-4 2xl:pt-0">
          <li
            class="cursor-pointer selected:bg-zinc-200/70 hover:bg-zinc-200/50 transition-all duration-250 flex gap-x-2 rounded-xl w-full p-[0.65rem]">
            <BadgeHelp stroke-width="2" class="size-6 text-zinc-600/70" />
            <h4 class="hidden 2xl:block font-inter font-semibold text-zinc-600/70">Help</h4>
          </li>
          <li
            class="cursor-pointer selected:bg-zinc-200/70 hover:bg-zinc-200/50 transition-all duration-250 flex gap-x-2 rounded-xl w-full p-[0.65rem]">
            <Settings stroke-width="2" class="size-6 text-zinc-600/70" />
            <h4 class="hidden 2xl:block font-inter font-semibold text-zinc-600/70">Settings</h4>
          </li>
        </ul>
      </div>
      <div class="flex flex-col border-t-[0.16rem] border-zinc-300/80 pt-4 m-4">
        <button
          class="cursor-pointer selected:bg-red-300/70 hover:bg-red-300/50 transition-all duration-250 flex gap-x-2 rounded-xl p-[0.65rem]">
          <LogOut class="size-6 text-red-800/70" />
          <h4 class="hidden 2xl:block font-inter font-semibold text-red-800/70">Logout</h4>
        </button>
      </div>
    </aside>
    <div class="border-r-[0.16rem] border-zinc-300/80"></div>
    <div class="flex-grow m-4 p-8 rounded-4xl">
      <header class="ubuntu flex justify-between my-2">
        <!-- <?php $this->widget('zii.widgets.CBreadcrumbs', [
        'links' => $this->breadcrumbs,
        'htmlOptions' => array('class' => 'flex justify-center space-x-2 text-gray-700 text-md'),
        'tagName' => 'nav',
        'separator' => '<i data-lucide="chevron-right" class="text-gray-400"></i>',
        'homeLink' => '<a class="flex text-gray-400" href="' . Yii::app()->createUrl('dashboard/index') . '"><i data-lucide="arrow-left" class="size-5 text-stone-700 h-full mr-2"></i>|</a>',
      ]); ?> -->
      </header>
      <main class="flex-grow">
        <slot></slot>
      </main>
    </div>
  </div>
</template>