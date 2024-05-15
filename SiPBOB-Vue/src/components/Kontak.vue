<template>
  <div>
    <navbar />

    <div id="form-search" class="text-black py-5">
      <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
      <div class="container">
        <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
          <h1 class="fw-bold">Hubungi Kami!</h1>
          <p>Mengalami masalah dengan waktu transaksi? Ingin memiliki bisnis permainan kredit? Silakan hubungi kami di bawah ini sesuai dengan kebutuhan Anda!</p>
        </div>
      </div>
    </div>

    <div class="container mx-auto bg-dark mt-5 text-white rounded">
      <div class="row">
        <div class="col p-5">
          <h2>TOP-UP IN</h2>
          <p>Jl. Ring Road Utara, Ngringin, Condongcatur, Kecamatan Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta</p>
          <p>
            <i class="fa-regular fa-envelope"></i> info@topupin.com<br />
            <i class="fa-solid fa-phone"></i> +62008953646
          </p>
        </div>
        <div class="col p-5">
          <h2>Kirim Laporan / Permintaan</h2>
          <p>Jika Anda memiliki masalah atau pertanyaan, jangan ragu untuk menghubungi kami dengan mengisi formulir di bawah ini.</p>
          <form action="#" method="post">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required />
            </div>

            <div class="mb-3">
              <label for="tipe" class="form-label">Tipe</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Tipe</option>
                <option value="1">Chat Customer Service</option>
                <option value="2">Masalah bug/error</option>
                <option value="3">Masalah akun</option>
                <option value="4">Masalah transaksi</option>
                <option value="5">Daftar reseller</option>
                <option value="6">Penawaran kerjasama</option>
                <option value="7">Daftar affiliator</option>
                <option value="8">Request fitur</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="-mt-8 transition delay-150 duration-300 ease-in-out print:hidden md:-mt-24 col-sm-12">
      <path
        d="M 0,400 C 0,400 0,200 0,200 C 40.34909359970402,243.0042668639783 80.69818719940804,286.0085337279566 135,268 C 189.30181280059196,249.9914662720434 257.5563448020718,170.97013195215192 311,159 C 364.4436551979282,147.02986804784808 403.07643359230485,202.11093846343573 452,207 C 500.92356640769515,211.88906153656427 560.137920828709,166.58611419410528 626,169 C 691.862079171291,171.41388580589472 764.3718830928599,221.54460476014305 826,248 C 887.6281169071401,274.45539523985695 938.3745467998519,277.2354667653225 985,246 C 1031.625453200148,214.7645332346775 1074.1299297077323,149.51352817856701 1122,137 C 1169.8700702922677,124.48647182143299 1223.1057343692194,164.71042052040943 1277,184 C 1330.8942656307806,203.28957947959057 1385.4471328153904,201.64478973979527 1440,200 C 1440,200 1440,400 1440,400 Z"
        stroke="none"
        stroke-width="0"
        fill="#34373b"
        fill-opacity="1"
        class="path-0 transition-all delay-150 duration-300 ease-in-out"
      ></path>
    </svg>
    <layout-footer />
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
#form-search {
  position: relative;
  z-index: 1;
  background: #f1c94f;
  background: -webkit-linear-gradient(to left, #ff9900, #b5590d, #dfea15));
}

.rounded {
    border-radius: 25px !important;
}

svg {
  position: relative;
  bottom: 0px;
}

.circles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  z-index: -1;
}

.circles li {
  position: absolute;
  display: block;
  list-style: none;
  width: 20px;
  height: 20px;
  background: rgba(221, 106, 53, 0.493);
  animation: animate 25s linear infinite;
  bottom: -150px;
}

.circles li:nth-child(1) {
  left: 25%;
  width: 80px;
  height: 80px;
  animation-delay: 0s;
}

.circles li:nth-child(2) {
  left: 10%;
  width: 20px;
  height: 20px;
  animation-delay: 2s;
  animation-duration: 12s;
}

.circles li:nth-child(3) {
  left: 70%;
  width: 20px;
  height: 20px;
  animation-delay: 4s;
}

.circles li:nth-child(4) {
  left: 40%;
  width: 60px;
  height: 60px;
  animation-delay: 0s;
  animation-duration: 18s;
}

.circles li:nth-child(5) {
  left: 65%;
  width: 20px;
  height: 20px;
  animation-delay: 0s;
}

.circles li:nth-child(6) {
  left: 75%;
  width: 110px;
  height: 110px;
  animation-delay: 3s;
}

.circles li:nth-child(7) {
  left: 35%;
  width: 150px;
  height: 150px;
  animation-delay: 7s;
}

.circles li:nth-child(8) {
  left: 50%;
  width: 25px;
  height: 25px;
  animation-delay: 15s;
  animation-duration: 45s;
}

.circles li:nth-child(9) {
  left: 20%;
  width: 15px;
  height: 15px;
  animation-delay: 2s;
  animation-duration: 35s;
}

.circles li:nth-child(10) {
  left: 85%;
  width: 150px;
  height: 150px;
  animation-delay: 0s;
  animation-duration: 11s;
}

@keyframes animate {
  0% {
    transform: translateY(0) rotate(0deg);
    opacity: 1;
    border-radius: 0;
  }

  100% {
    transform: translateY(-1000px) rotate(720deg);
    opacity: 0;
    border-radius: 50%;
  }
}
</style>
