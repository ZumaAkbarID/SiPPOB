<template>
  <navbar />

  <div id="form-search" class="text-white py-5">
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
        <h1 class="fw-bold">Cari pesanan kamu!</h1>
        <p>
          Lacak transaksi kamu dengan cara memasukkan Nomor Invoice dibawah ini:
        </p>

        <form action="">
          <div class="form-group">
            <label for="invoice">Nomor Invoice Kamu</label>
            <input
              type="text"
              name="invoice"
              id="invoice"
              class="form-control"
              placeholder="Inv-0xxxxx"
            />
          </div>
          <button type="button" class="btn btn-warning mt-2 text-white fw-bold">
            <i class="fa-solid fa-magnifying-glass"></i> Cek Transaksi
          </button>
        </form>
      </div>
    </div>
  </div>

  <div id="realtime-history" class="bg-dark pt-5">
    <div class="container text-white">
      <h4>Transaksi Real-time</h4>
      <p>Berikut ini real-time data pesanan masuk terbaru</p>

      <div class="table-responsive">
        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <svg
      width="100%"
      height="100%"
      id="svg"
      viewBox="0 0 1440 390"
      xmlns="http://www.w3.org/2000/svg"
      class="-mt-8 transition delay-150 duration-300 ease-in-out print:hidden md:-mt-24"
    >
      <path
        d="M 0,400 C 0,400 0,200 0,200 C 40.34909359970402,243.0042668639783 80.69818719940804,286.0085337279566 135,268 C 189.30181280059196,249.9914662720434 257.5563448020718,170.97013195215192 311,159 C 364.4436551979282,147.02986804784808 403.07643359230485,202.11093846343573 452,207 C 500.92356640769515,211.88906153656427 560.137920828709,166.58611419410528 626,169 C 691.862079171291,171.41388580589472 764.3718830928599,221.54460476014305 826,248 C 887.6281169071401,274.45539523985695 938.3745467998519,277.2354667653225 985,246 C 1031.625453200148,214.7645332346775 1074.1299297077323,149.51352817856701 1122,137 C 1169.8700702922677,124.48647182143299 1223.1057343692194,164.71042052040943 1277,184 C 1330.8942656307806,203.28957947959057 1385.4471328153904,201.64478973979527 1440,200 C 1440,200 1440,400 1440,400 Z"
        stroke="none"
        stroke-width="0"
        fill="#34373b"
        fill-opacity="1"
        class="path-0 transition-all delay-150 duration-300 ease-in-out"
      ></path>
    </svg>
  </div>

  <layout-footer />
</template>


<script>
export default {};
</script>

<style scoped>
#form-search {
  position: relative;
  z-index: 1;
  background: #4e54c8;
  background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
}

#realtime-history {
  height: 100%;
}

.table-responsive {
  padding: 6px;
  border: 1px solid #ffffff2f;
  border-radius: 10px;
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
  background: rgba(255, 255, 255, 0.2);
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