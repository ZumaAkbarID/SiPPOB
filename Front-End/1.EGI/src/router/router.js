import { createMemoryHistory, createRouter } from 'vue-router'

const routes = [
  {
    path: '/',
    component: () => import('../components/landingpage.vue'),
    name: 'landingPage'
  },
//   {
//     path: '/cek-transaksi',
//     component: () => import('#components/CekTransaksi.vue'),
//     name: 'cekTransaksi'
//   },
]

const router = createRouter({
  linkActiveClass: 'active',
  linkExactActiveClass: 'active',

  history: createMemoryHistory(),
  routes
})

export default router