<template>
<div class="container-fluid">
  <div class="row">
    <div class="col-auto">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action">Transaksi</a>
        <a href="#" class="list-group-item list-group-item-action">Mutasi</a>
        <a href="#" class="list-group-item list-group-item-action">Laporan</a>
        <a href="#" class="list-group-item list-group-item-action">Afiliasi</a>
        <a href="#" class="list-group-item list-group-item-action">Keluar</a>
      </div>
    </div>

    <div class="container px-4 text-center">
    <div class="row gx-1">
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

        <div class="col">
        <div class="p-3">
            <div class="dashboard-desc">
                <p class="dashboard-angka">0 BJC</p>
                <p class="dashboard-huruf">Member BJCredits</p>
                <div class="button-bjc">
                    <a href="#">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="button-bjc-topup" type="button">Top Up</button>                 
                        </div>
                    </a>
                    <a href="#">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="button-bjc-redeem" type="button">Redeem</button>                 
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <div class="container px-4 text-center">
    <div class="row gx-1">
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

    <div class="container px-4 text-center">
    <div class="row gx-1">
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


  </template>
  
  <script>
    
  </script>
  
  <style scoped>


.dashboard {
    display: flex;
}

.dashboard-profile {
    display: flex;
    width: 400px;
    height: 175px;
    background-color: #3D4348;
    border-radius: 4px;
    border-radius: 10px;
    margin-left: auto;
    color: white;
}
.samsul {
    margin: 25px;
    width: 60px;
    height: 60px;
    border-radius: 40px;
}

.dashboard-detail {
    margin: 25px;
}

.dashboard-kelas {
    border: 1px solid #529FF0;
    padding: 1px;
    color: #529FF0;
}

.dashboard-desc {
    width: 400px;
    height: 100px;
    background-color: #3D4348;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin-right: auto;
}

.button-bjc a{
    text-decoration: none;

}
.button-bjc-topup{
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

.button-bjc-redeem{
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
    
.button-bjc-redeem:hover, .button-bjc-topup:hover {
    background-color: #FB923C;
}
 .dashboard-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    
  }

  /* ROW 2 */
  .dashboard-transaksi {
    width: 400px;
    height: 100px;
    background-color: #3D4348;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin: 15px 0 15px;
    margin-left: auto;
  }

  .dashboard-penjualan {
    width: 400px;
    height: 100px;
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

  /* ROW 4 */
  .dashboard-tunggu {
    width: 175px;
    height: 100px;
    background-color: #EAB308;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin: 0 0 15px;
  }

  .dashboard-tunggu:hover{
    background-color: #FACC15;
  }

  .dashboard-proses {
    width: 175px;
    height: 100px;
    background-color: #0284C7;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin: 0 0 15px;
  }

  .dashboard-proses:hover {
    background-color: #0EA5E9;
  }

  .dashboard-sukses {
    width: 175px;
    height: 100px;
    background-color: #10B981;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin: 0 0 15px;
  }

  .dashboard-sukses:hover{
    background-color: #34D399;
  }

  .dashboard-gagal {
    width: 175px;
    height: 100px;
    background-color: #F43F5E;
    border-radius: 4px;
    text-align: center;
    border-radius: 10px;
    margin: 0 0 15px;
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
    padding-top: 15px;
    color: white;
  }

  .dashboard-angka{
    font-size: 24px;
    font-weight: bold;
    padding-top: 15px;
    color: white;
  }

  .dashboard-huruf{
    font-size: 16px;
    color: black;
    padding-bottom: 15px;
    color: white;
  }
  </style>