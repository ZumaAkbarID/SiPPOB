<template>
    <navbar/>
    <main>
        <div class="container atas">
            <div class="row">

                <div class="col-7 satu">
                    <h4>Terima Kasih!</h4>
                </div>

                <div class="col-7 dua">
                    <h1 class="h1 harap">Harap lengkapi pembayaran.</h1>
                </div>

                <div class="col-7 tiga">
                    <h5 class="h5 pesanan">Pesanan kamu <span>(Codexxxxxxxx)</span> menunggu pembayaran sebelum dikirim.</h5>
                </div>

                <div class="col-7 empat">
                    <h6>Pesanan ini akan kadaluwarsa pada</h6>
                </div>

                <div class="col-12 lima">
                    <p></p>
                </div>

                <div class="col-2 tujuh">
                    <p>{{ timerCount }}</p>
                </div>

                <div class="col-10 enam">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn invoice" type="button">
                            <img src="/src/assets/img/icon_printer.png" class="btn-printer">
                            Unduh Invoice
                        </button>
                    </div>
                </div>

            </div>
            <hr class="hr-atas">
        </div>

    <div class="container bawah">
        <div class="row">
            <div class="col-sm-5 col-md-6 satu">
                <img src="/src/assets/img/mobile-legend.jpeg" alt="Mobile Legends" class="rounded-4 mobile-legends">
                   <div class="kolom satu">
                        <a href="#" class="link mobile-legends"><p>Mobile Legends</p></a>
                        <p class="diamond">jumlah diamond</p>
                        <p class="nickname-user">Nickname : </p>
                        <p class="id-user">ID : </p>
                        <p class="server-user">Server :</p>
                   </div>
            </div>

            <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 dua">
                <p class="metode-pembayaran">Metode Pembayaran</p>
                <p class="jenis-pembayaran">OVO</p>
                <hr>
                <div class="container">
                    <div class="row kanan-satu">
                        <div class="col invoice">Nomor Invoice</div>                      
                        <div class="col code">
                            <button class="btn copy-1">
                                Codexxxxxxx
                                <img src="/src/assets/img/icon_clipboard_white.png" class="icon clipboard-white">
                            </button>
                        </div>                       
                    </div>
                    
                    <div class="row kanan-dua">
                        <div class="col transaksi">
                            Status Transaksi
                        </div>                                           
                        <div class="col pending">
                            <span class="span pending">
                                Pending
                            </span>
                        </div>
                    </div>

                    <div class="row kanan-tiga">
                        <div class="col pembayaran">
                            Status Pembayaran
                        </div>
                        <div class="col unpaid">
                            <span class="span unpaid">
                                Unpaid
                            </span>
                        </div>
                    </div>

                    <div class="row kanan-empat">
                        <div class="col pesan">
                            Pesan
                        </div>
                        <div class="col tunggu-pembayaran">
                            Menunggu pembayaran
                        </div>
                    </div>
                </div>               
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6 tiga">
                <div class="container">

                    <div class="row">                        
                            <button class="btn rincian-pembayaran" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Rincian Pembayaran
                            </button>
                        
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col harga">
                                            Harga
                                        </div>
                                        <div class="col harga-angka">
                                            Rp 1.xxx
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col jumlah">
                                            Jumlah
                                        </div>
                                        <div class="col jumlah-angka">
                                            1x
                                        </div>
                                    </div>
                                    
                                    <hr>

                                    <div class="row">
                                        <div class="col subtotal">
                                            Subtotal
                                        </div>
                                        <div class="col subtotal-angka">
                                            Rp 1.xxx
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col biaya">
                                            Biaya
                                        </div>
                                        <div class="col biaya-angka">
                                            Rp 5x
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row total">
                        <div class="col">
                            <h2 class="h2 total">
                                Total Pembayaran
                            </h2>
                        </div>
                        <div class="col copy-1">
                            <button class="btn copy-2">
                                Rp 1.xxx
                                <img src="/src/assets/img/icon_clipboard.png" class="icon clipboard">
                            </button>
                        </div>
                   </div>
                    
                   <div class="row">
                        <div class="col">
                            <p class="pesan reminder">
                                Masukkan <b>nomor OVO</b> anda pada tombol orange di bawah, lalu buka aplikasi OVO dan cari pembayaran <b>TOP-UP IN</b> di notifikasi
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col proges">
                            <h5 class="h5 proges">
                                Progess Transaksi
                            </h5>
                        </div>
                        
                        <div class="timeline">                            
                                <ul class="timeline-with-icons">
                                    <li class="timeline-item mb-5">
                                        <span class="timeline-icon satu">                                   
                                            <img src="/src/assets/img/icon_check.png" class="icon check">
                                        </span>
                                        <h5 class="h5 transaksi">
                                            Transaksi Dibuat
                                        </h5>
                                        <p class="p transaksi">
                                            Transaksi berhasil dibuat.
                                        </p>
                                    </li>

                                    <li class="timeline-item mb-5">
                                        <span class="timeline-icon dua">
                                            <i class="fa-solid fa-circle satu"></i>
                                        </span>
                                        <h5 class="h5 pembayaran">
                                            Pembayaran
                                        </h5>
                                        <p class="p pembayaran">
                                            Silahkan melakukan pembayaran.
                                        </p>
                                    </li>

                                    <li class="timeline-item mb-5">
                                        <span class="timeline-icon tiga">
                                            <i class="fa-solid fa-circle dua"></i>
                                        </span>
                                        <h5 class="h5 selesai">
                                            Selesai
                                        </h5>
                                        <p class="p selesai">
                                            Tranksasi selesai.
                                        </p>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0 empat">
                <button type="button" class="btn bayar" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Masukkan nomor OVO terdaftar kamu 
                    <img src="/src/assets/img/icon_shared_boxed.png" class="icon shared-boxed">
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Satu Langkah Lagi!!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="input-group mb-3">                       
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Negara
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">1</a></li>
                                        <li><a class="dropdown-item" href="#">2</a></li>
                                        <li><a class="dropdown-item" href="#">3</a></li>
                                        <li><a class="dropdown-item" href="#">4</a></li>
                                    </ul>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Silahkan masukkan nomor OVO kamu">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn batal" data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn kirim">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    </main>
    <layout-footer/>
</template>

<script>
export default {
    data() {
            return {
                timerCount: 3600
            }
        },

        watch: {

            timerCount: {
                handler(value) {

                    if (value > 0) {
                        setTimeout(() => {
                            this.timerCount--;
                        }, 1000);
                    }

                },
                immediate: true // This ensures the watcher is triggered upon creation
            }

        }
}
</script>


<style scoped>

/* CONTAINER ATAS */
.container.atas{
    color: white;
}

.col-7.satu{
    color: #F96E1C;
    margin-top: 50px;
}

.h1.harap {
    font-weight: bold;
}

.h5.pesanan{
    font-weight:normal;
    color: #C3C9CC;
}
.col-7.tiga{
    margin-bottom: 30px;
}

.col-7.tiga span{
    color: #F96E1C;
}

.col-2.tujuh {
    display: flex;
    justify-content: center;
    color: white;
}

.col-2.tujuh p {
    padding: 6px 30px;
    border: 1px solid #F43F5E;
    border-radius: 5px;
    background-color: #F43F5E;
}
.btn.invoice{
    
    color: white;
    background-color: #F96E1C;
}

.btn.invoice:hover {
    background-color: #FB923C;
}

.btn-printer{
    width: 18px;
    align-items: center;
    margin: 0 5px 4px 0;
}

.hr-atas{
    background-color: #4A5157;
    margin-bottom: 30px;
}


/* CONTAINER BAWAH */

.container.bawah{
    color: white;
}

.col-sm-5.col-md-6.satu{
    display: flex;
}

/* KOLOM KIRI ATAS */

.rounded-4.mobile-legends {
    width: 175px;
}

.kolom.satu{
    padding: 0 0 0 40px;
}

.link.mobile-legends{
    text-decoration: none;
    color: white;
    font-size: 23px;
    font-weight: bold;
}
.nickname-user {
    font-size: 18px;
    padding-top: 20px;
}

.diamond,.id-user, .server-user{
    font-size: 18px;
}

/* KOLOM KANAN ATAS */

.metode-pembayaran{
    font-size: 23px;
    font-weight: bold;
}
.jenis-pembayaran {
    margin-top: -15px;
    padding-bottom: 10px;
}
.row.kanan-satu {
    padding-top: 10px;
    font-size: 18px;
}

.row.kanan-dua, .row.kanan-tiga, .row.kanan-empat{
    font-size: 18px;
    padding-top: 20px;
}

.col.code, .col.pending, .col.unpaid, .col.tunggu-pembayaran {
    padding-left: 100px;
}

.btn.copy-1{
    color: white;
    background-color: #4A5157;
    border: 1px solid transparent;
}

.btn.copy-1:hover {
    background-color: #3D4348;
}

.icon.clipboard-white {
    width: 18px;
    align-items: center;
    margin: 0 0 4px 5px;
}

.span.pending {
    background-color: #FDE047;
    color: #854D0E;
    padding: 3px 10px;
}

.span.unpaid{
    background-color: #FDA4AF;
    color: #854D0E;
    padding: 2px 10px;
}

/* KOLOM KIRI BAWAH */

.btn.rincian-pembayaran {
    display: flex;
    font-weight: bold;
    font-size: 20px;
    margin-top: 30px;
    color: white;
    background-color: #4A5157;
    border: 1px solid transparent;
}

.btn.rincian-pembayaran:hover {
    color: white;
    background-color: #3D4348;
}

.card.card-body {
    margin-top: 15px;
    color: #EEFFFF;
    background-color: #4A5157;
}

.col.harga, .col.jumlah, .col.subtotal, .col.biaya {
    font-weight: bold;
}

.col.harga-angka, .col.jumlah-angka, .col.subtotal-angka, .col.biaya-angka {
    display: flex;
    justify-content: right;
}

.btn.copy-2{
    font-size: 20px;
    font-weight: bold;
    margin-left: 150px;
    margin-bottom: 40px;
    color: #F97316;
    background-color: #4A5157;
    border: 1px solid;
}

.btn.copy-2:hover {
    background-color: #3D4348;
}

.icon.clipboard {
    width: 18px;
    align-items: center;
    margin: 0 0 4px 5px;
}
.row.total {
    margin-top: 25px;
}

.h2.total {
    font-weight: bold;
}

.pesan.reminder {
    background-color: #FEF9C3;
    color: #854D0E;
    font-size: 20px;
    padding: 20px;
    margin-bottom: 20px;
}

.icon.shared-boxed {
    margin: 0 0 4px 5px;
    width: 18px;
    align-items: center;
}

.col.proges {
    margin-bottom: 20px;
    margin-top: 20px;
}

.h5.proges {
    font-weight: bold;
    font-size: 23px;
}

.timeline-with-icons {
  border-left: 1px solid hsl(0, 0%, 90%);
  position: relative;
  list-style: none;
}

.timeline-with-icons .timeline-item {
  position: relative;
}

.timeline-with-icons .timeline-item:after {
  position: absolute;
  display: block;
  top: 0;
}

.timeline-with-icons .timeline-icon {
  position: absolute;
  left: -48px;
  background-color: hsl(217, 88.2%, 90%);
  color: hsl(217, 88.8%, 35.1%);
  border-radius: 50%;
  height: 31px;
  width: 31px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.timeline-icon.satu {
    background-color: #22C55E;
    color: white;
}

.timeline-icon.satu:hover {
    background-color: #16A34A;
}

.timeline-icon.dua {
    background-color: #1E2022;
    color: white;
    border: 2px solid #F97316;
}

.timeline-icon.tiga {
    background-color: #1E2022;
    color: #E6E6E6;
    border: 2px solid;
}

.fa-solid.fa-circle.satu{
    color: #FB923C;
}

.fa-solid.fa-circle.satu:hover{
    color: #F96E1C;
}

.fa-solid.fa-circle.dua{
    color: transparent;
}

.fa-solid.fa-circle.dua:hover{
    color: #5E666E;
}

.h5.transaksi {
    color: #22B83B;
}

.p.transaksi {
    color: #C3C9CC;
}

.icon.check{
    width: 18px;
    align-items: center;
    margin: 0;
}
.h5.pembayaran {
    color: #F97316;
}

.p.pembayaran{
    color: #C3C9CC;
}

.h5.selesai {
    color: #C3C9CC;
}

.p.selesai {
    color: #C3C9CC;
}


/* KOLOM KANAN BAWAH */

.btn.bayar{
    margin-top: 30px;
    color: white;
    background-color: #F96E1C;
    border: 1px solid transparent;
}

.btn.bayar:hover {
    background-color: #FB923C;
}

.modal-dialog{
    text-align: center;
    color: white;
}

.modal-content{
    background-color: #1E2022;
}
.btn.btn-outline-secondary.dropdown-toggle{
    background-color: white;
    color: black;
}

.btn.batal{
    margin-top: 30px;
    color: white;
    background-color: #4A5157;
}

.btn.batal:hover{
    background-color: #3D4348;
}

.btn.kirim{
    margin-top: 30px;
    color: white;
    background-color: #F96E1C;
}

.btn.kirim:hover{
    background-color: #FB923C;
}

</style>