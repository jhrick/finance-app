import { createRouter, createWebHistory } from 'vue-router'

import Homepage from '../views/Homepage.vue';
import Overview from '../views/dashboard/Overview.vue';
import Calendar from '../views/dashboard/Calendar.vue';
import Finances from '../views/dashboard/Finances.vue';
import People from '../views/dashboard/People.vue';

const routes = [
  {
    path: '/',
    component: Homepage,
  },
  {
    path: '/dashboard',
    component: Overview,
    meta: { layout: 'dashboard' }
  },
  {
    path: '/dashboard/calendar',
    component: Calendar,
    meta: { layout: 'dashboard' }
  },
  {
    path: '/dashboard/finances',
    component: Finances,
    meta: { layout: 'dashboard' }
  },
  {
    path: '/dashboard/people',
    component: People,
    meta: { layout: 'dashboard' }
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router;