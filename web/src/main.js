import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import router from './routes'
import DefaultLayout from './layouts/DefaultLayout.vue'
import DashboardLayout from './layouts/DashboardLayout.vue'

const app = createApp(App);

app.component("default-layout", DefaultLayout)
app.component("dashboard-layout", DashboardLayout);

app.use(router);
app.mount('#app');
