<template>
  <navbar/>

  <!-- Profile & Deksripsi -->
  <div class="bg-dark pt-5">
    <div class="container text-center text-white">
      <div class="row">
        <div class="col">
          <div class="dashboard-profile">
              <img src="/assets/img/samsul.jpg" alt="" class="samsul">
              <div class="dashboard-detail">
                <p class="dashboard-nama">Samsul</p>
                <p class="dashboard-kelas">Member</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="dashboard-desc">
            <p class="dashboard-huruf">Member TOP-UP IN</p>
            <p class="dashboard-angka"><span style="color: #F97316">0</span> Point</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Transaksi  Penjualan -->
  <div class="bg-dark pt-3">
    <div class="container text-center text-white">
      <div class="row">
        <div class="col">
          <div class="dashboard-transaksi">
            <p class="dashboard-value"> 0 </p>
            <p class="dashboard-label">Total Transaksi</p>
          </div>
        </div>

        <div class="col">
          <div class="dashboard-penjualan">
            <p class="dashboard-value"> 0 </p>
            <p class="dashboard-label">Total Penjualan</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- tunggu, proses, sukses & gagal -->
  <div class="bg-dark pt-3">
    <div class="container text-center text-white">
      <div class="row">

        <div class="col tunggu-proses">

          <div class="dashboard-tunggu">
            <p class="dashboard-value"> 0 </p>
            <p class="dashboard-label">Menunggu</p>
          </div>
          <div class="dashboard-proses">
            <p class="dashboard-value">0</p>
            <p class="dashboard-label">Dalam Proses</p>
          </div>

        </div>

        <div class="col sukses-gagal">

          <div class="dashboard-sukses">
            <p class="dashboard-value">0</p>
            <p class="dashboard-label">Sukses</p>
          </div>
          <div class="dashboard-gagal">
            <p class="dashboard-value">0</p>
            <p class="dashboard-label">Gagal</p>
          </div>

        </div>

      </div>
    </div>
  </div>


  <!-- Tabel -->
  <div class="bg-dark pt-3">
      <div class="container table">
        <h3>Transaksi</h3>
        <div class="table-responsive">
          <table class="table table-dark">

            <thead>
              <tr>
                <th scope="col">Nomor Invoice</th>
                <th scope="col">ID Trx</th>
                <th scope="col">Item</th>
                <th scope="col">User Input</th>
                <th scope="col">Harga</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>asdasd</td>
                <td>asdasd</td>
                <td>asdasd</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>asdasd</td>
                <td>asdasd</td>
                <td>asdasd</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>asdasd</td>
                <td>asdasd</td>
                <td>asdasd</td>
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
  <layout-footer/>

</template>
  
<script>
    
</script>
  
<style scoped>
#atas {
  display: flex;
  justify-content: center;
}
/* dashboard profile */
.dashboard-profile {
    max-width: 100%;
    width: 27rem;
    height: 175px;
    display: flex;
    background-color: #3D4348;
    border-radius: 10px;
    margin-left: auto;
    margin-bottom: 15px;
    color: white;
}

.samsul {
    margin: auto;
    margin-right: 3rem;
    width: 100px;
    height: 100px;
    border-radius: 50px;
}

.dashboard-detail {
    margin: auto;
    margin-left: 3rem;
}

.dashboard-kelas {
    width: 100px;
    border: 1px solid #529FF0;
    padding: 1px;
    color: #529FF0;
    border-radius: 8px;
    background-color: #414D5A;
}

/* dashboard deksripsi */
.dashboard-desc {
    max-width: 100%;
    width: 27rem;
    height: 175px;
    background-color: #3D4348;
    border-radius: 10px;
    margin-right: auto;
    color: white;
}

.dashboard-huruf{
    font-size: 20px;
    color: black;
    padding-top: 2rem;
    color: white;
}

.dashboard-angka{
    font-size: 24px;
    font-weight: bold;
    color: white;
}

/* dashboard transaksi */
.dashboard-transaksi{
    max-width: 100%;
    width: 27rem;
    height: 140px;
    background-color: #3D4348;
    border-radius: 10px;
    margin-left: auto;
    margin-bottom: 15px;
    color: white;
}

/* dashboard penjualan */
.dashboard-penjualan{
    max-width: 100%;
    width: 27rem;
    height: 140px;
    background-color: #3D4348;
    border-radius: 10px;
    margin-right: auto;
    color: white;
}

.dashboard-penjualan:hover, .dashboard-transaksi:hover {
    background-color: #5E666E;
}

/* dashboard tunggu, proses, sukses & gagal */
.dashboard-tunggu {
    width: 12.5rem;
    height: 125px;
    background-color: #EAB308;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin-left: auto;
    margin-bottom: 15px;
}

.dashboard-tunggu:hover{
    background-color: #FACC15;
}

.dashboard-proses {
    width: 12.5rem;
    height: 125px;
    background-color: #0284C7;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin-left: 2rem;
    margin-bottom: 15px;
}

.dashboard-proses:hover {
    background-color: #0EA5E9;
}
.dashboard-sukses {
    width: 12.5rem;
    height: 125px;
    background-color: #10B981;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin-right: 2rem;
}

.dashboard-sukses:hover{
    background-color: #34D399;
}

.dashboard-gagal {
    width: 12.5rem;
    height: 125px;
    background-color: #F43F5E;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
}

.dashboard-gagal:hover{
    background-color: #FB7185;
}

.col.tunggu-proses {
  display: flex;
}

.col.sukses-gagal{
  display: flex;
}

/* isi value & Label */
.dashboard-value {
    font-size: 26px;
    font-weight: bold;
    padding-top: 1.5rem;
    color: white;
}

.dashboard-label {
    font-size: 19px;
    color: black;
    color: white;
}
  

/* Tabel */

.container.table{
  color: white;
  max-width: 100%;
  width: 57rem;
}

.table-responsive {
  border: 1px solid #4A5157;
  border-radius: 15px;
  padding: 5px;
}

/* MEDIA SCREEN profile, deskripsi*/
@media screen and (max-width: 992px) and (min-width: 768px){
  .dashboard-profile{
    margin: auto;
    margin-bottom: 15px;
  }
}

@media screen and (max-width: 992px) and (min-width: 768px){
  .dashboard-desc{
    margin: auto;
  }
}

@media screen and (max-width: 767px) and (min-width: 456px){
  .dashboard-profile{
    margin: auto;
    margin-bottom: 15px;
  }
}

@media screen and (max-width: 767px) and (min-width: 456px){
  .dashboard-desc{
    margin: auto;
  }
}

/*transaksi, & penjualan */
@media screen and (max-width: 992px) and (min-width: 768px){
  .dashboard-transaksi{
    margin: auto;
    margin-bottom: 15px;
  }
}

@media screen and (max-width: 992px) and (min-width: 768px){
  .dashboard-penjualan{
    margin: auto;
  }
}

@media screen and (max-width: 767px) and (min-width: 456px){
  .dashboard-transaksi{
    margin: auto;
    margin-bottom: 15px;
  }
}

@media screen and (max-width: 767px) and (min-width: 456px){
  .dashboard-penjualan{
    margin: auto;
  }
}


/* MEDIA tunggu, proses, sukses, & gagal */
@media screen and (max-width: 992px) and (min-width: 768px){
  .dashboard-tunggu{
    margin-left: auto;
    margin-bottom: 15px;
  }
}

@media screen and (max-width: 992px) and (min-width: 768px){
  .dashboard-proses{
    margin-right: auto;
  }
}

@media screen and (max-width: 992px) and (min-width: 768px){
  .dashboard-sukses{
    margin-left: auto;
    margin-bottom: 15px;
  }
}

@media screen and (max-width: 992px) and (min-width: 768px){
  .dashboard-gagal{
    margin-right: auto;
  }
}

@media screen and (max-width: 767px) and (min-width: 456px){
  .dashboard-tunggu{
    margin-left: auto;
  }
}

@media screen and (max-width: 767px) and (min-width: 456px){
  .dashboard-proses{
    margin-right: auto;
  }
}

@media screen and (max-width: 767px) and (min-width: 456px){
  .dashboard-sukses{
    margin-left: auto;
    margin-bottom: 15px;
  }
}

@media screen and (max-width: 767px) and (min-width: 456px){
  .dashboard-gagal{
    margin-right: auto;
  }
}

</style>