import { createMemoryHistory, createRouter, createWebHistory } from 'vue-router'
import NProgress from 'NProgress'

const AppName = import.meta.env.VITE_APP_NAME;
const DefaultTitle = 'Topup Murah Lengkap Legal | ' + AppName;

const routes = [
  {
    path: '/',
    component: () => import('#components/LandingPage.vue'),
    name: 'home',
    meta: {
      title: DefaultTitle
    }
  },
  {
    path: '/cek-transaksi',
    component: () => import('#components/CekTransaksi.vue'),
    name: 'cekTransaksi',
    meta: {
      title: 'Cek Transaksi | ' + AppName
    }
  },
  {
    path: '/tim',
    component: () => import('#components/Team.vue'),
    name: 'tim',
    meta: {
      title: 'Tim Kami | ' + AppName
    }
  },
  {
    path: '/produk/:id',
    component: () => import('#components/DetailProduct.vue'),
    name: 'detailProduk',
    meta: {
      title: 'Valorant | ' + AppName
    }
  },
  {
    path: '/dashboard',
    component: () => import('#components/Dashboard.vue'),
    name: 'dashboard',
    meta: {
      title: 'Dashboard | ' + AppName
    }
  },
  {
    path: '/tentang-kami',
    component: () => import('#components/AboutUS.vue'),
    name: 'tentangKami',
    meta: {
      title: 'Tentang Kami | ' + AppName
    }
  },
  {
    path: '/kontak',
    component: () => import('#components/Kontak.vue'),
    name: 'kontak',
    meta: {
      title: 'Hubungi Kami | ' + AppName
    }
  },
  {
    path: '/masuk',
    component: () => import('#components/auth/Login.vue'),
    name: 'masuk',
    meta: {
      title: 'Masuk | ' + AppName
    }
  },
  {
    path: '/daftar',
    component: () => import('#components/auth/Daftar.vue'),
    name: 'daftar',
    meta: {
      title: 'Daftar | ' + AppName
    }
  },
  {
    path: '/pembayaran',
    component: () => import('#components/Pembayaran.vue'),
    name: 'pembayaran',
    meta: {
      title: 'Pembayaran | ' + AppName
    }
  },
  { // Default route, nek gaono seng ketemu routene
    path: "/:pathMatch(.*)*",
    component: import('#components/errors/404.vue'),
    name: '404',
    meta: {
      title: '404 | ' + AppName
    }
  }
];

const router = createRouter({
  linkActiveClass: 'active',
  linkExactActiveClass: 'active',

  history: createWebHistory(),
  routes
});

// router.beforeEach((to, from, next) => {
//   next();
// });

router.beforeResolve((to, from, next) => {
  document.title = to.meta.title || DefaultTitle;

  if (to.name) {
    NProgress.start()
  }
  next()
})

router.afterEach((to, from) => {
  NProgress.done()
})

export default router