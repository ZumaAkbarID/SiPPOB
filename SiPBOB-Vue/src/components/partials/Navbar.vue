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
            class="nav-item anim-border-bottom nav-link nav-login"
            aria-current="page"
            >Masuk</RouterLink
          >
        </div>
        <!-- Action -->
        <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
          <RouterLink
            :to="{ name: 'daftar' }"
            class="btn btn-sm btn-warning nav-register w-full w-lg-auto px-3"
            aria-current="page"
            >Daftar</RouterLink
          >
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
export default {};
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