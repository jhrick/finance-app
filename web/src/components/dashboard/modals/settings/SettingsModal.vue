<script setup lang="ts">
import { Bell, Brush, CircleDollarSign } from 'lucide-vue-next';
import { useDasboardStore } from '../../../../stores/dashboard';

import Modal from '../../../modal/Modal.vue';
import ModalHeader from '../../../modal/ModalHeader.vue';
import NotificationSection from './fragments/NotificationSection.vue';
import PlanSection from './fragments/PlanSection.vue';
import ThemesSection from './fragments/ThemesSection.vue';

const modalName = 'dashboard-settings-modal'
const dashboardStore = useDasboardStore();

const settings = [
  { name: 'Notifications', icon: Bell, content: NotificationSection },
  { name: 'Themes', icon: Brush, content: ThemesSection },
  { name: 'Plan', icon: CircleDollarSign, content: PlanSection }
]

const handleToggleSection = ({ name }: { name: string }) => {
  dashboardStore.setCurrentSettingsSection(name);
  
}

const getSection = () => {
  return settings.find((section) => dashboardStore.settings.currentSection === section.name);
}
</script>

<template>
  <Modal :name="modalName">
    <ModalHeader title="Settings" />
    <div class="flex gap-x-4 min-h-[28rem]">
      <aside class="pt-4 px-6 min-h-[28rem] min-w-[16rem] border-r-[0.15rem] bg-zinc-200/50 border-zinc-200">
        <ul class="flex flex-col min-w-8">
          <li v-for="setting in settings" :key="setting.name" @click="() => handleToggleSection(setting)"
            :class="`cursor-pointer transition-all duration-200 ease-in-out rounded-2xl p-[0.8rem] pr-16 flex items-center gap-x-2 mb-2
            ${getSection()?.name === setting.name ? ' bg-white': ' hover:bg-zinc-50'}`">
            <component :is="setting.icon" class="size-6 text-zinc-600/70" />
            <h3 class="font-inter font-semibold text-stone-700">{{ setting.name }}</h3>
          </li>
        </ul>
      </aside>
      <main class="flex-[0_0_70%] min-w-[36rem] max-w-[36rem] min-h-[28rem] max-h-[28rem] overflow-scroll p-4">
        <component :is="getSection()?.content" />
      </main>
    </div>
  </Modal>
</template>