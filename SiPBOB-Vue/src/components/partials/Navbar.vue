<template>
  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark px-0 py-3">
    <div class="container-xl">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <img src="/assets/topupin-logo.png" class="logo" alt="..." />
      </a>
      <!-- Navbar toggle -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- Nav -->
        <div class="navbar-nav mx-lg-auto">
          <RouterLink
            :to="{ name: 'home' }"
            class="nav-item anim-border-bottom nav-link"
            aria-current="page"
            >Beranda</RouterLink
          >

          <RouterLink
            :to="{ name: 'cekTransaksi' }"
            class="nav-item anim-border-bottom nav-link"
            aria-current="page"
            >Cek Transaksi</RouterLink
          >

          <RouterLink
            :to="{ name: 'tim' }"
            class="nav-item anim-border-bottom nav-link"
            aria-current="page"
            >Tim</RouterLink
          >

          <RouterLink
            :to="{ name: 'tentangKami' }"
            class="nav-item anim-border-bottom nav-link"
            aria-current="page"
            >Tentang Kami</RouterLink
          >

          <RouterLink
            :to="{ name: 'kontak' }"
            class="nav-item anim-border-bottom nav-link"
            aria-current="page"
            >Kontak</RouterLink
          >
        </div>
        <!-- Right navigation -->
        <div class="navbar-nav ms-lg-4">
          <RouterLink
            :to="{ name: 'masuk' }"
            v-if="!loggedIn"
            class="nav-item anim-border-bottom nav-link nav-login"
            aria-current="page"
            ><i class="fa-solid fa-arrow-right-to-bracket"></i>
            Masuk</RouterLink
          >
        </div>
        <!-- Action -->
        <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
          <RouterLink
            :to="{ name: 'daftar' }"
            v-if="!loggedIn"
            class="btn btn-sm btn-warning nav-register w-full w-lg-auto px-3"
            aria-current="page"
            ><i class="fa-solid fa-user"></i> Daftar</RouterLink
          >
        </div>
        <!-- Logedin -->
        <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
          <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
            <RouterLink
              :to="{ name: 'dashboard' }"
              v-if="loggedIn"
              class="btn btn-sm border-0 nav-register w-full w-lg-auto px-3"
              aria-current="page"
              ><i class="fa-solid fa-user"></i> {{ username }}</RouterLink
            >
          </div>
          <button
            type="button"
            class="btn btn-sm btn-warning nav-register w-full w-lg-auto px-3"
            @click="logout"
            v-if="loggedIn"
          >
            <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
          </button>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
import axios from "axios";
import Swal from "sweetalert2";
import NProgress from "NProgress";

export default {
  name: "Navbar",

  data() {
    return {
      loggedIn: false,
      username: "",
      token: "",
      base_api: import.meta.env.VITE_BASE_API,
      secret_token: import.meta.env.VITE_SECRET_TOKEN,
    };
  },

  methods: {
    getLoggedIn() {
      this.loggedIn = localStorage.getItem("loggedIn");
    },
    getUsername() {
      this.username = localStorage.getItem("username");
    },
    getToken() {
      this.token = localStorage.getItem("token");
    },
    async checkLogin() {
      if (this.loggedIn) {
        axios.defaults.withCredentials = true;
        await axios
          .post(
            this.base_api + "/user",
            {},
            {
              headers: {
                Authorization: `Bearer ${this.token}`,
                Accept: "application/json",
                SECRET: this.secret_token,
              },
            }
          )
          .then((res) => {
            localStorage.setItem("username", res.data.username);
            this.getLoggedIn();
            this.getUsername();
          })
          .catch((e) => {
            console.log(e);
            if (e.response.status === 401) {
              Swal.fire({
                title: "Error!",
                text: "Sesi login kamu telah habis!",
                icon: "error",
              });
              //change state
              localStorage.removeItem("loggedIn");
              localStorage.removeItem("username");
              localStorage.removeItem("token");
              //redirect dashboard
              return this.$router.push({ name: "masuk" });
            } else if (e.response.status === 302) {
              Swal.fire({
                title: "Error!",
                text: "KESALAHAN SISI CLIENT!",
                icon: "error",
              });
            }
          });
      }
    },
    async logout() {
      if (this.loggedIn) {
        NProgress.start();

        await axios
          .post(
            this.base_api + "/auth/logout",
            {},
            {
              headers: {
                Accept: "application/json",
                Authorization: `Bearer ${this.token}`,
                SECRET: this.secret_token,
              },
            }
          )
          .then((res) => {
            if (res.data.status) {
              //change state
              localStorage.removeItem("loggedIn");
              localStorage.removeItem("username");
              localStorage.removeItem("token");

              //redirect dashboard
              return this.$router.push({ name: "masuk" });
            } else {
              //set state login failed
              Swal.fire({
                title: "Error!",
                text: res.data.message,
                icon: "error",
              });
            }
          })
          .catch((error) => {
            Swal.fire({
              title: "Error!",
              text: error.response.data.message,
              icon: "error",
            });
          });
        NProgress.done();
      }
    },
  },

  watch: {
    $route: {
      immediate: true,
      handler() {
        this.getLoggedIn();
        this.getUsername();
        this.getToken();
        this.checkLogin();
      },
    },
  },
};
</script>

<style scoped>
.logo {
  width: 100px;
  margin: 0;
  padding: 0;
}

@media only screen and (max-width: 500px) {
  .logo {
    width: 90px;
  }
}

.nav-link {
  font-weight: 600;
  margin-right: 20px;
}

/* .nav-link:hover {
  border-bottom: 2px #ffc107 solid;
  transition-duration: 500ms;
} */

.anim-border-bottom {
  position: relative;
  overflow: hidden;
}

.anim-border-bottom::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #ffc107; /* Sesuaikan warna border */
  transform: scaleX(0);
  transform-origin: bottom left;
  transition: transform 0.2s ease-out;
}

.anim-border-bottom:hover::after {
  transform: scaleX(1);
}

.active.nav-item {
  border-bottom: 2px #ffc107 solid;
}

.nav-register {
  font-weight: 600;
  color: #fff;
  padding: 6px;
}
.nav-login {
  color: #fff;
  margin-right: 10px;
}
</style>
