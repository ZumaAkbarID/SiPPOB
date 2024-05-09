import { createApp } from 'vue'
import router from './router/router'
import App from './App.vue'
import Navbar from './components/partials/Navbar.vue'
import LayoutFooter from './components/partials/Footer.vue'
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';


createApp(App)
  .component('Navbar', Navbar)
  .component('LayoutFooter', LayoutFooter)
  .use(router)
  .mount('#app')