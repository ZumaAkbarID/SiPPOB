import { createMemoryHistory, createRouter } from 'vue-router'

const routes = [
  {
    path: '/',
    component: () => import('../components/AboutUS.vue'),
    name: 'AboutUS'
  },
  {
    path: '/detail-product',
    component: () => import('../components/DetailProduct.vue'),
    name: 'DetailProduct'
  },
]

const router = createRouter({
  linkActiveClass: 'active',
  linkExactActiveClass: 'active',

  history: createMemoryHistory(),
  routes
})

export default router