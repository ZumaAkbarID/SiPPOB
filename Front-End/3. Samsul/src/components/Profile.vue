<template>
  <navbar/>

  <main>
    <div class="container-fluid">
      <div class="row">
        <!-- <div class="col-auto">
          <div class="list-group">
            
            <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action">Transaksi</a>
            <a href="#" class="list-group-item list-group-item-action">Mutasi</a>
            <a href="#" class="list-group-item list-group-item-action">Laporan</a>
            <a href="#" class="list-group-item list-group-item-action">Afiliasi</a>
            <a href="#" class="list-group-item list-group-item-action">Keluar</a>
          
          </div>
        </div> -->

        <!-- kotak member -->
        <div class="col">
          <div class="container px-4 text-center satu">
            <div class="row gx-1 satu">
              <div class="col">
                <div class="p-3">
                    <div class="dashboard-profile">
                        <img src="/src/assets/img/samsul.jpg" alt="" class="samsul">
                        <div class="dashboard-detail">
                            <p class="dashboard-nama">Samsul</p>
                            <p class="dashboard-kelas">Member</p>
                        </div>
                    </div>
                </div>
              </div>

              <!-- kotak point -->
              <div class="col">
                <div class="p-3">
                    <div class="dashboard-desc">
                      <p class="dashboard-huruf">Member TOP-UP IN</p>
                        <p class="dashboard-angka"><span style="color: #F97316">0</span> Point</p>
                        <!-- <div class="button-top">
                            <a href="#">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="button-top-topup" type="button">Top Up</button>                 
                                </div>
                            </a>
                            <a href="#">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="button-top-redeem" type="button">Redeem</button>                 
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>
              </div>
            </div>
          </div>

          <!-- kotak transaksi & penjualan -->
          <div class="container px-4 text-center dua">
            <div class="row gx-1 dua">
                <div class="col">
                  <div class="p-3">
                      <div class="dashboard-transaksi">
                        <p class="dashboard-value"> 0 </p>
                        <p class="dashboard-label">Total Transaksi</p>
                      </div>
                  </div>
                </div>
                
                <div class="col">
                  <div class="p-3">
                      <div class="dashboard-penjualan">
                        <p class="dashboard-value"> 0 </p>
                        <p class="dashboard-label">Total Penjualan</p>
                      </div>
                  </div>
                </div>
            </div>
          </div>

          <!-- kotak tunggu, proses, sukses & gagal -->
          <div class="container px-4 text-center empat">
            <div class="row gx-1 tiga">
                <div class="col">
                  <div class="p-3">
                      <div class="dashboard-tunggu">
                        <p class="dashboard-value"> 0 </p>
                        <p class="dashboard-label">Menunggu</p>
                      </div>
                  </div>
                </div>

                <div class="col">
                  <div class="p-3">
                      <div class="dashboard-proses">
                        <p class="dashboard-value">0</p>
                        <p class="dashboard-label">Dalam Proses</p>
                      </div>
                  </div>
                </div>

                <div class="col" >
                  <div class="p-3">
                      <div class="dashboard-sukses">
                        <p class="dashboard-value">0</p>
                        <p class="dashboard-label">Sukses</p>
                      </div>
                  </div>
                </div>

                <div class="col">
                  <div class="p-3">
                      <div class="dashboard-gagal">
                        <p class="dashboard-value">0</p>
                        <p class="dashboard-label">Gagal</p>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TABEL -->
    <h2>Riwayat Transaksi</h2>
    <div class="tabel">
      <table class="table table-dark table-borderless">
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

  </main>

  <layout-footer/>

</template>
  
<script>
    
</script>
  
<style scoped>

/* Kotak profile */
.dashboard-profile {
  max-width: 100%;
    display: flex;
    width: 400px;
    height: 175px;
    background-color: #3D4348;
    border-radius: 4px;
    border-radius: 10px;
    margin-left: auto;
    color: white;
    margin-top: 50px;
    overflow: hidden;
    justify-content: center;
}

.samsul {
    margin: 35px 15px 0 60px;
    width: 100px;
    height: 100px;
    border-radius: 50px;
}

.dashboard-detail {
    margin: 45px;
}

.dashboard-kelas {
    width: 100px;
    border: 1px solid #529FF0;
    padding: 1px;
    color: #529FF0;
    border-radius: 8px;
    background-color: #414D5A;
}

/* kotak member top-up in */
.dashboard-desc {
    width: 400px;
    height: 175px;
    background-color: #3D4348;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin-right: auto;
    margin-top: 50px;
    justify-content: center;
}

/* .button-top {
  display: flex;
  justify-content: center;
}
.button-top a{
    text-decoration: none;
}

.button-top-topup{
    border: none;
    border-radius: 7.5px;
    color: #ffffff;
    cursor: pointer;
    background-color: #F97316;
    margin-right: 20px;
    padding: 6px 12px;
    opacity: 0.95;
    width: 85px;
    height: 38px;
    font-size: 18px;
}

.button-top-redeem{
    border: none;
    border-radius: 7.5px;
    color: #ffffff;
    cursor: pointer;
    background-color: #F97316;
    padding: 6px 12px;
    font-size: 18px;
    width: 85px;
    height: 38px
}
    
.button-top-redeem:hover, .button-top-topup:hover {
    background-color: #FB923C;
} */

.dashboard-huruf{
    font-size: 20px;
    color: black;
    padding-top: 45px;
    color: white;
    /* margin-top: 50px; */
    justify-content: center;
    text-align: center;
  }

.dashboard-angka{
    font-size: 24px;
    font-weight: bold;
    color: white;
    /* margin-top: 50px; */
    justify-content: center;
    text-align: center;
  }

  

  /* ROW 2 transaksi && penjualan*/
  .dashboard-transaksi {
    width: 400px;
    height: 125px;
    background-color: #3D4348;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin: 15px 0 15px;
    margin-left: auto;
  }

  .dashboard-penjualan {
    width: 400px;
    height: 125px;
    background-color: #3D4348;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin: 15px 0 15px;
    margin-right: auto;
  }

  .dashboard-penjualan:hover, .dashboard-transaksi:hover {
    background-color: #5E666E;
  }

  /* ROW 4 tunggu, proses, sukses & gagal*/
  .container.px-4.text-center.empat {
    display: flex;
    justify-content: center; 
  }

  .dashboard-tunggu {
    width: 180px;
    height: 125px;
    background-color: #EAB308;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin: 0 0;
  }

  .dashboard-tunggu:hover{
    background-color: #FACC15;
  }

  .dashboard-proses {
    width: 180px;
    height: 125px;
    background-color: #0284C7;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin: 0 0 30px;
  }

  .dashboard-proses:hover {
    background-color: #0EA5E9;
  }

  .dashboard-sukses {
    width: 180px;
    height: 125px;
    background-color: #10B981;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin: 0 0 30px;
  }

  .dashboard-sukses:hover{
    background-color: #34D399;
  }

  .dashboard-gagal {
    width: 180px;
    height: 125px;
    background-color: #F43F5E;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin: 0 0 30px;
  }
  
  .dashboard-gagal:hover{
    background-color: #FB7185;
  }
  .dashboard-label {
    font-size: 16px;
    color: black;
    padding-bottom: 15px;
    color: white;
  }
  
  .dashboard-value {
    font-size: 24px;
    font-weight: bold;
    padding-top: 22px;
    color: white;
  }

  /* Tabel */
h2 {
    margin-left: 607px;
    color: white;
}

.tabel {
  justify-content: center;
  display: flex;
  margin-bottom: 50px;
}

.table {
  width: 900px;
}

/* Media Screen */

/* Screen dashboard profile, desc, penjualan & transaksi */
/* @media screen and (max-width: 992px){
  .container.px-4.text-center.satu, .container.px-4.text-center.dua {
   
  }
} */

@media screen and (max-width: 992px){
  .dashboard-profile, .dashboard-desc, .dashboard-penjualan, .dashboard-transaksi {
    margin: 0;
    width: 300px;
  }
}

@media screen and (max-width: 768px){
  .dashboard-profile, .dashboard-desc, .dashboard-penjualan, .dashboard-transaksi {
    margin: auto auto;
  }
}

/* Screen dashboard tunggu, proses, sukses & gagal */
/* @media screen and (max-width: 992px){
  .container.px-4.text-center.empat {
    
  }
} */

@media screen and (max-width: 992px){
  .dashboard-tunggu, .dashboard-proses, .dashboard-sukses, .dashboard-gagal{
    margin: 0;
    width: 130px;
  }
}

@media screen and (max-width: 768px){
  .dashboard-tunggu, .dashboard-proses, .dashboard-sukses, .dashboard-gagal{
    margin: auto;
  }
}

/* Screen Tabel */
@media screen and (max-width: 992px){
  .table {
    width: 620px;
    justify-content: center;
  }
}

@media screen and (max-width: 768px){
  .table {
    width: 450px;
    justify-content: center;
  }
}

</style>