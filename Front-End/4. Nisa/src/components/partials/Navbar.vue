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
          <a class="nav-item nav-link" href="#">Beranda</a>
          <a class="nav-item nav-link" href="#">Cek Transaksi</a>

          <a class="nav-item nav-link" href="#">Tim</a>
          
          <RouterLink
            :to="{ name: 'AboutUS' }"
            class="nav-item nav-link"
            aria-current="page"
            >Tentang Kami</RouterLink
          >

          <RouterLink
            :to="{ name: 'DetailProduct' }"
            class="nav-item nav-link"
            aria-current="page"
            >Detail Produk</RouterLink
          >
          <a class="nav-item nav-link" href="#">Kontak</a>
        </div>
        <!-- Right navigation -->
        <div class="navbar-nav ms-lg-4">
          <a class="nav-item nav-link nav-login" href="#">Masuk</a>
        </div>
        <!-- Action -->
        <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
          <a
            href="#"
            class="btn btn-sm btn-warning nav-register w-full w-lg-auto px-3"
          >
            Daftar
          </a>
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