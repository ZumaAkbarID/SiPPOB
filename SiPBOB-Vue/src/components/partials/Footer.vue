<template>
  <footer class="pb-4 pt-5">
    <div class="container">
      <div class="row text-white">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <img src="/assets/topupin-logo.png" width="150" alt="" />
          <p>
            No #1 supplier top up game & voucher terlaris, murah, aman legal
            100% buka 24 Jam dengan payment terlengkap Indonesia
          </p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <h5 class="text-warning mb-4">Peta Situs</h5>
          <ul class="list-unstyled">
            <li class="mb-2">Beranda</li>
            <li class="mb-2">Masuk</li>
            <li class="mb-2">Daftar</li>
            <li class="mb-2">Cek Transaksi</li>
            <li class="mb-2">Kontak Kami</li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
          <h5 class="text-warning mb-4">Dukungan</h5>
          <ul class="list-unstyled">
            <li class="mb-2">WhatsApp</li>
            <li class="mb-2">Telegram</li>
            <li class="mb-2">Discord</li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
          <h5 class="text-warning mb-4">Legalitas</h5>
          <ul class="list-unstyled">
            <li class="mb-2">Kebijakan Pribadi</li>
            <li class="mb-2">Syarat & Ketentuan</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <p class="text-secondary">
        © 2024 CV {{ app_name }}. All rights reserved.
      </p>
    </div>
  </footer>
</template>

<script>
export default {
  data() {
    return {
      app_name: import.meta.env.VITE_APP_NAME,
    };
  },
};
</script>

<style scoped>
footer {
  background-color: rgb(52, 55, 59);
}
</style>