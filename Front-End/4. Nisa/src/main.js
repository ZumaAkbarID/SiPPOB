import { createApp } from 'vue'
import router from './router/router'
import App from './App.vue'
import Navbar from './components/partials/Navbar.vue'
import LayoutFooter from './components/partials/Footer.vue';

createApp(App)
  .component('Navbar',Navbar)
  .component('LayoutFooter',LayoutFooter)
  .use(router)
  .mount('#app')

