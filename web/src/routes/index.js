import { createRouter, createWebHistory } from 'vue-router'

import Homepage from '../views/Homepage.vue';
import Dashboard from '../views/dashboard/index.vue';

const routes = [
  {
    path: '/',
    component: Homepage,
  },
  {
    path: '/dashboard',
    component: Dashboard,
    meta: { layout: 'dashboard' }
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router;