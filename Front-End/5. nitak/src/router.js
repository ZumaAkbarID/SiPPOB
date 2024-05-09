import { createMemoryHistory, createRouter } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./components/Login.vue"),
        name: "Login",
    },
    {
        path: "/kontak",
        component: () => import("./components/Kontak.vue"),
        name: "Kontak",
    },
    {
        path: "/daftar",
        component: () => import("./components/Daftar.vue"),
        name: "Daftar",
    },
];

const router = createRouter({
    linkActiveClass: "active",
    linkExactActiveClass: "active",

    history: createMemoryHistory(),
    routes,
});

export default router;
