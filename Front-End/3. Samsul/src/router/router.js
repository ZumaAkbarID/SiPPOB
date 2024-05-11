import { createMemoryHistory, createRouter } from 'vue-router'

const routes = [
  {
    path: '/',
    component: () => import('../components/Profile.vue'),
    name: 'Profile'
  },
  {
    path: '/pembayaran',
    component: () => import('../components/Pembayaran.vue'),
    name: 'Pembayaran'
  },
]

const router = createRouter({
  linkActiveClass: 'active',
  linkExactActiveClass: 'active',

  history: createMemoryHistory(),
  routes
})

export default router