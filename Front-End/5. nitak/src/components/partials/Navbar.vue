<template>
  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark px-0 py-3">
    <div class="container-xl">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <img
          src="https://preview.webpixels.io/web/img/logos/clever-light.svg"
          class="logo"
          alt="..."
        />
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
          <!-- <RouterLink
            :to="{ name: 'home' }"
            class="nav-item nav-link"
            aria-current="page"
            >Beranda</RouterLink
          >

          <RouterLink
            :to="{ name: 'cekTransaksi' }"
            class="nav-item nav-link"
            aria-current="page"
            >Cek Transaksi</RouterLink
          > -->

          <a class="nav-item nav-link" href="#">Tim</a>
          <a class="nav-item nav-link" href="#">Tentang Kami</a>
          <!-- <a class="nav-item nav-link" href="#">Kontak</a> -->
          <RouterLink
            :to="{ name: 'Kontak' }"
            class="nav-item nav-link"
            aria-current="page"
            >Kontak</RouterLink
          >
        </div>
        <!-- Right navigation -->
        <div class="navbar-nav ms-lg-4">
          <!-- <a class="nav-item nav-link nav-login" href="#">Masuk</a> -->
          <RouterLink
            :to="{ name: 'Login' }"
            class="nav-item nav-link nav-login"
            aria-current="page"
            >Masuk</RouterLink
          >
        </div>
        <!-- Action -->
        <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
          <!-- <a
            href="#"
            class="btn btn-sm btn-warning nav-register w-full w-lg-auto px-3"
          >
            Daftar
          </a> -->
          <RouterLink
            :to="{ name: 'Daftar' }"
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
}
.nav-link {
  font-weight: 600;
  margin-right: 20px;
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
