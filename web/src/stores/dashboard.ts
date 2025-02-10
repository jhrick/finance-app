import { defineStore } from 'pinia';

export const useDasboardStore = defineStore('dashboard', {
  state: () => ({
    currentPage: 'Overview',
    settings: { currentSection: 'Notifications' },
  }),
  actions: {
    setCurrentPage(page: string) {
      this.currentPage = page;
    },
    setCurrentSettingsSection(section: string) {
      this.settings.currentSection = section;
    }
  }
})