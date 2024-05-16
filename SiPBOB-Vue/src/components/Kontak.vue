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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#34373b"
        fill-opacity="1"
        d="M0,160L26.7,176C53.3,192,107,224,160,240C213.3,256,267,256,320,240C373.3,224,427,192,480,186.7C533.3,181,587,203,640,202.7C693.3,203,747,181,800,154.7C853.3,128,907,96,960,101.3C1013.3,107,1067,149,1120,165.3C1173.3,181,1227,171,1280,170.7C1333.3,171,1387,181,1413,186.7L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
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
