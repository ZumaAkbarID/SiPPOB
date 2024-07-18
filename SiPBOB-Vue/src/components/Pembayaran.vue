<template>
  <navbar />
  <main>
    <div id="printIni">
      <div class="container atas">
        <div class="row">
          <div class="col-12 satu">
            <h4>Terima Kasih!</h4>
          </div>

          <div class="col-12 dua">
            <h1 class="h1 harap">Harap lengkapi pembayaran.</h1>
          </div>

          <div class="col-12 tiga">
            <h5 class="h5 pesanan">
              Pesanan kamu <span>{{ order_id }}</span> menunggu pembayaran
              sebelum dikirim.
            </h5>
          </div>

          <div
            class="col-12 empat"
            v-if="
              (hours > 0 || minutes > 0 || seconds > 0) &&
              trx.payment == 'Unpaid'
            "
          >
            <h6>Pesanan ini akan kadaluwarsa pada</h6>
          </div>

          <div
            class="col-6 lima"
            v-if="
              (hours > 0 || minutes > 0 || seconds > 0) &&
              trx.payment == 'Unpaid'
            "
          >
            <span>{{ hours }} : {{ minutes }} : {{ seconds }}</span>
          </div>

          <div class="col-6">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn invoice" type="button" @click="printthis">
                <img src="/assets/img/icon_printer.png" class="btn-printer" />
                Unduh Invoice
              </button>
            </div>
          </div>
        </div>
        <hr class="hr-atas" />
      </div>

      <div class="container bawah">
        <div class="row">
          <div class="col-sm-5 col-md-6 satu">
            <img
              :src="Storage_url + game.image"
              alt="Mobile Legends"
              class="rounded-4 mobile-legends"
            />
            <div class="kolom satu">
              <a href="#" class="link mobile-legends"
                ><p>{{ trx.product_name }}</p></a
              >
              <!-- <p class="diamond">jumlah diamond</p> -->
              <p class="nickname-user">ID/Nickname : {{ trx.id_game }}</p>
              <!-- <p class="id-user">ID :</p>
              <p class="server-user">Server :</p> -->
            </div>
          </div>

          <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 dua">
            <p class="metode-pembayaran">Rincian Transaksi</p>
            <!-- <p class="jenis-pembayaran">OVO</p> -->
            <hr />
            <div class="container">
              <div class="row kanan-satu">
                <div class="col-6 invoice">Nomor Invoice</div>
                <div class="col-6 invoice">
                  <button class="btn copy-1">
                    {{ order_id }}
                    <!-- <img
                      src="/assets/img/icon_clipboard_white.png"
                      class="icon clipboard-white"
                    /> -->
                  </button>
                </div>
              </div>

              <div class="row kanan-dua">
                <div class="col-6 transaksi">Status Transaksi</div>
                <div class="col-6 pending">
                  <span class="span pending"> {{ trx.status }} </span>
                </div>
              </div>

              <div class="row kanan-tiga">
                <div class="col-6 pembayaran">Status Pembayaran</div>
                <div class="col-6 unpaid">
                  <span class="span unpaid"> {{ trx.payment }} </span>
                </div>
              </div>

              <div class="row kanan-empat">
                <div class="col-6 pesan">Pesan</div>
                <div class="col-6 tunggu-pembayaran">
                  <span
                    class="span tunggu-pembayaran"
                    v-if="trx.payment == 'Unpaid'"
                    >Menunggu pembayaran</span
                  >
                  <span
                    class="span tunggu-pembayaran"
                    v-else-if="trx.payment == 'Paid' && trx.status == 'Failed'"
                    >Provider bermasalah hubungi Admin!</span
                  >
                  <span
                    class="span tunggu-pembayaran"
                    v-else-if="trx.payment == 'Paid' && trx.status == 'Success'"
                    >Pesanan Berhasil</span
                  >
                  <span
                    class="span tunggu-pembayaran"
                    v-else-if="
                      trx.payment == 'Paid' && trx.status == 'Progress'
                    "
                    >Pesanan Diproses</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-md-5 col-lg-6 tiga">
            <div class="container">
              <!-- <div class="row">
                <button
                  class="btn rincian-pembayaran"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseExample"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                >
                  Rincian Pembayaran
                </button>

                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    <div class="container">
                      <div class="row">
                        <div class="col harga">Harga</div>
                        <div class="col harga-angka">Rp 1.xxx</div>
                      </div>

                      <div class="row">
                        <div class="col jumlah">Jumlah</div>
                        <div class="col jumlah-angka">1x</div>
                      </div>

                      <hr />

                      <div class="row">
                        <div class="col subtotal">Subtotal</div>
                        <div class="col subtotal-angka">Rp 1.xxx</div>
                      </div>

                      <div class="row">
                        <div class="col biaya">Biaya</div>
                        <div class="col biaya-angka">Rp 5x</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <div class="row total">
                <div class="col-6">
                  <h4 class="h4 total">Total Pembayaran</h4>
                </div>
                <div class="col-6 copy-2">
                  <button class="btn copy-2">
                    {{ formatPrice(trx.price) }}
                  </button>
                </div>
              </div>

              <!-- <div class="row">
                <div class="col">
                  <p class="pesan reminder">
                    Masukkan <b>nomor OVO</b> anda pada tombol orange di bawah,
                    lalu buka aplikasi OVO dan cari pembayaran
                    <b>TOP-UP IN</b> di notifikasi
                  </p>
                </div>
              </div>

              <div class="row">
                <div class="col proges">
                  <h5 class="h5 proges">Progess Transaksi</h5>
                </div>

                <div class="timeline">
                  <ul class="timeline-with-icons">
                    <li class="timeline-item mb-5">
                      <span class="timeline-icon satu">
                        <img
                          src="/assets/img/icon_check.png"
                          class="icon check"
                        />
                      </span>
                      <h5 class="h5 transaksi">Transaksi Dibuat</h5>
                      <p class="p transaksi">Transaksi berhasil dibuat.</p>
                    </li>

                    <li class="timeline-item mb-5">
                      <span class="timeline-icon dua">
                        <i class="fa-solid fa-circle satu"></i>
                      </span>
                      <h5 class="h5 pembayaran">Pembayaran</h5>
                      <p class="p pembayaran">Silahkan melakukan pembayaran.</p>
                    </li>

                    <li class="timeline-item mb-5">
                      <span class="timeline-icon tiga">
                        <i class="fa-solid fa-circle dua"></i>
                      </span>
                      <h5 class="h5 selesai">Selesai</h5>
                      <p class="p selesai">Tranksasi selesai.</p>
                    </li>
                  </ul>
                </div>
              </div> -->
            </div>
          </div>

          <div v-if="trx.payment == 'Unpaid'">
            <div class="col bayar">
              <div class="text-end">
                <button type="button" class="btn bayar" @click="bayarSekarang">
                  Bayar Sekarang
                  <img
                    src="/assets/img/icon_shared_boxed.png"
                    class="icon shared-boxed"
                  />
                </button>
              </div>
            </div>

            <!-- <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                      Satu Langkah Lagi!!
                    </h5>
                  </div>

                  <div class="modal-body">
                    <div class="input-group mb-3">
                      <button
                        class="btn btn-outline-secondary dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Negara
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">1</a></li>
                        <li><a class="dropdown-item" href="#">2</a></li>
                        <li><a class="dropdown-item" href="#">3</a></li>
                        <li><a class="dropdown-item" href="#">4</a></li>
                      </ul>
                      <input
                        type="text"
                        class="form-control"
                        aria-label="Text input with dropdown button"
                        placeholder="Silahkan masukkan nomor OVO kamu"
                      />
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn batal"
                      data-bs-dismiss="modal"
                    >
                      Batal
                    </button>
                    <button type="button" class="btn kirim">Kirim</button>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
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
  </main>
  <layout-footer />
</template>

<script>
import Loading from "vue-loading-overlay";
import "vue-loading-overlay/dist/css/index.css";
import axios from "axios";
import Swal from "sweetalert2";
import { Modal } from "bootstrap";

export default {
  data() {
    return {
      hours: 0,
      minutes: 0,
      seconds: 0,
      timer: null,
      isLoading: false,
      fullPage: true,
      loggedIn: localStorage.getItem("loggedIn"),
      token: localStorage.getItem("token"),
      Storage_url: import.meta.env.VITE_IMAGE_STORAGE_URL + "/product/",
      base_api: import.meta.env.VITE_BASE_API,
      secret_token: import.meta.env.VITE_SECRET_TOKEN,
      order_id: this.$route.query.order_id,
      trx: [],
      game: [],
    };
  },
  components: {
    Loading,
  },
  mounted() {
    this.startTimer();
    let midtransSnapScript = document.createElement("script");
    midtransSnapScript.setAttribute(
      "src",
      "https://app.sandbox.midtrans.com/snap/snap.js"
    );
    midtransSnapScript.setAttribute(
      "data-client-key",
      import.meta.env.VITE_MIDTRANS_CLIENT_KEY
    );
    document.head.appendChild(midtransSnapScript);
  },
  created() {
    this.fetchTransaction();
  },
  beforeDestroy() {
    this.stopTimer();
  },
  methods: {
    formatPrice(value) {
      let val = (value / 1).toFixed(0).replace(".", ",");
      return "Rp " + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    },
    startTimer() {
      this.timer = setInterval(this.updateTime, 1000);
    },
    stopTimer() {
      clearInterval(this.timer);
    },
    updateTime() {
      this.seconds--;
      if (this.seconds === 0) {
        this.seconds = 59;
        this.minutes--;
      }
      if (this.minutes === 0) {
        this.minutes = 59;
        this.hours--;
      }
    },
    printthis() {
      //   var printContents = document.getElementById("printIni").innerHTML;
      //   var originalContents = document.body.innerHTML;

      //   document.body.innerHTML = printContents;

      window.print();

      //   document.body.innerHTML = originalContents;
    },
    async fetchTransaction() {
      this.isLoading = true;
      await axios
        .get(`${this.base_api}/transaction/${this.order_id}`, {
          headers: {
            SECRET: this.secret_token,
          },
        })
        .then((response) => {
          this.trx = response.data.data.trx;
          this.game = response.data.data.game;
          let time = response.data.data.time;
          this.hours = time.jam;
          this.minutes = time.menit;
          this.seconds = time.detik;
          this.isLoading = false;
        })
        .catch((error) => {
          console.error("Failed to fetch product:", error);
          this.isLoading = false;
          return this.$router.push({ name: "404" });
        });
    },
    async bayarSekarang() {
      snap.pay(this.trx.snap_token, {
        // Optional
        onSuccess: function (result) {
          console.log(result);
          return this.$router.push({
            name: "pembayaran",
            query: { order_id: this.order_id },
          });
        },
        // Optional
        onPending: function (result) {
          console.log(result);
          return this.$router.push({
            name: "pembayaran",
            query: { order_id: this.order_id },
          });
        },
        // Optional
        onError: function (result) {
          console.log(result);
          return this.$router.push({
            name: "pembayaran",
            query: { order_id: this.order_id },
          });
        },
      });
    },
  },
};
</script>

<style scoped>
/* CONTAINER ATAS */
.container.atas {
  color: white;
}

.col-12.satu {
  color: #f96e1c;
  margin-top: 50px;
}

.h1.harap {
  font-weight: bold;
}

.h5.pesanan {
  font-weight: normal;
  color: #c3c9cc;
}
.col-12.tiga {
  margin-bottom: 30px;
}

.col-12.tiga span {
  color: #f96e1c;
}

.col-6.lima {
  display: flex;
  color: white;
}

.col-6.lima span {
  padding: 6px 20px;
  border: 1px solid #f43f5e;
  border-radius: 5px;
  background-color: #f43f5e;
}

.btn.invoice {
  color: white;
  background-color: #f96e1c;
}

.btn.invoice:hover {
  background-color: #fb923c;
}

.btn-printer {
  width: 18px;
  align-items: center;
  margin: 0 5px 4px 0;
}

.hr-atas {
  background-color: #4a5157;
  margin-bottom: 30px;
}

/* CONTAINER BAWAH */

.container.bawah {
  color: white;
}

.col-sm-5.col-md-6.satu {
  display: flex;
}

/* KOLOM KIRI ATAS */

.rounded-4.mobile-legends {
  width: 175px;
}

.kolom.satu {
  padding: 0 0 0 40px;
}

.link.mobile-legends {
  text-decoration: none;
  color: white;
  font-size: 23px;
  font-weight: bold;
}
.nickname-user {
  font-size: 18px;
  padding-top: 20px;
}

.diamond,
.id-user,
.server-user {
  font-size: 18px;
}

/* KOLOM KANAN ATAS */

.metode-pembayaran {
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

.row.kanan-dua,
.row.kanan-tiga,
.row.kanan-empat {
  font-size: 18px;
  padding-top: 20px;
}

.col-6.invoice {
  display: flex;
}
.btn.copy-1 {
  color: white;
  background-color: #4a5157;
  border: 1px solid transparent;
  margin-left: auto;
}

.btn.copy-1:hover {
  background-color: #3d4348;
}

.icon.clipboard-white {
  width: 18px;
  align-items: center;
  margin: 0 0 4px 5px;
}

.col-6.pending {
  display: flex;
}

.span.pending {
  margin-left: auto;
  /* background-color: #fde047;
  color: #854d0e; */
  padding: 3px 10px;
}

.col-6.unpaid {
  display: flex;
}

.span.unpaid {
  margin-left: auto;
  /* background-color: #fda4af;
  color: #854d0e; */
  padding: 3px 10px;
}

.col-6.tunggu-pembayaran {
  display: flex;
}

.span.tunggu-pembayaran {
  margin-left: auto;
}
/* KOLOM KIRI BAWAH */

.btn.rincian-pembayaran {
  display: flex;
  font-weight: bold;
  font-size: 20px;
  margin-top: 30px;
  color: white;
  background-color: #4a5157;
  border: 1px solid transparent;
}

.btn.rincian-pembayaran:hover {
  color: white;
  background-color: #3d4348;
}

.card.card-body {
  margin-top: 15px;
  color: #eeffff;
  background-color: #4a5157;
}

.col.harga,
.col.jumlah,
.col.subtotal,
.col.biaya {
  font-weight: bold;
}

.col.harga-angka,
.col.jumlah-angka,
.col.subtotal-angka,
.col.biaya-angka {
  display: flex;
  justify-content: right;
}

.col-6.copy-2 {
  display: flex;
}
.btn.copy-2 {
  max-width: 100%;
  width: 15rem;
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 40px;
  color: #f97316;
  background-color: #4a5157;
  border: 1px solid;
  margin-left: auto;
}

.btn.copy-2:hover {
  background-color: #3d4348;
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
  background-color: #fef9c3;
  color: #854d0e;
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
  margin-left: 2rem;
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
  background-color: #22c55e;
  color: white;
}

.timeline-icon.satu:hover {
  background-color: #16a34a;
}

.timeline-icon.dua {
  background-color: #1e2022;
  color: white;
  border: 2px solid #f97316;
}

.timeline-icon.tiga {
  background-color: #1e2022;
  color: #e6e6e6;
  border: 2px solid;
}

.fa-solid.fa-circle.satu {
  color: #fb923c;
}

.fa-solid.fa-circle.satu:hover {
  color: #f96e1c;
}

.fa-solid.fa-circle.dua {
  color: transparent;
}

.fa-solid.fa-circle.dua:hover {
  color: #5e666e;
}

.h5.transaksi {
  color: #22b83b;
}

.p.transaksi {
  color: #c3c9cc;
}

.icon.check {
  width: 18px;
  align-items: center;
  margin: 0;
}
.h5.pembayaran {
  color: #f97316;
}

.p.pembayaran {
  color: #c3c9cc;
}

.h5.selesai {
  color: #c3c9cc;
}

.p.selesai {
  color: #c3c9cc;
}

/* KOLOM KANAN BAWAH */

.col.bayar {
  margin-left: 1rem;
}
.btn.bayar {
  margin-top: 30px;
  color: white;
  background-color: #f96e1c;
  border: 1px solid transparent;
}

.btn.bayar:hover {
  background-color: #fb923c;
}

.modal-dialog {
  text-align: center;
  color: white;
}

.modal-content {
  background-color: #1e2022;
}
.btn.btn-outline-secondary.dropdown-toggle {
  background-color: white;
  color: black;
}

.btn.batal {
  margin-top: 30px;
  color: white;
  background-color: #4a5157;
}

.btn.batal:hover {
  background-color: #3d4348;
}

.btn.kirim {
  margin-top: 30px;
  color: white;
  background-color: #f96e1c;
}

.btn.kirim:hover {
  background-color: #fb923c;
}
</style>
