import './style.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import DefaultLayout from './layouts/DefaultLayout.vue'
import DashboardLayout from './layouts/DashboardLayout.vue'
import router from './routes'

const pinia = createPinia();
const app = createApp(App);

app.component("default-layout", DefaultLayout);
app.component("dashboard-layout", DashboardLayout);

app.use(pinia);
app.use(router);
app.mount('#app');
