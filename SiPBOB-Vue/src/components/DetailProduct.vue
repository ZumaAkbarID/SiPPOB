<template>
    <navbar />
  
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
          <div class="card border-0 bg-custom text-white shadow-sm sticky-card">
            <img
              src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:zahrapedia/p/1710324214ant_murah.webp"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h2>Valorant</h2>
              <p>
                Top up Point Valorant sekarang semakin mudah bersama
                Top Up In! Kamu bisa menggunakannya untuk membeli skin kesukaanmu. Cukup masukkan ID,
                pilih nominal dan lakukan pembayaran.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
          <div class="card border-0 bg-custom text-white shadow-sm mb-4">
            <div class="card-body">
              <h3 class="mb-3">1. Masukan Riot ID</h3>
              <input
                type="text"
                name=""
                id=""
                placeholder="ex: kumbang#123"
                class="form-control"
                required
              />
              <small class="small text-white"
                >Log in ke game dan kamu akan menemukan username ID di bagian layar pojok kiri atas.
                Jika kamu klik tombol "Play" dan masuk ke main menu, kamu juga bisa menemukan username ID di layar bagian kanan atas  </small
              >
            </div>
          </div>
  
          <div class="card border-0 bg-custom text-white shadow-sm mb-4">
            <div class="card-body">
              <h3 class="mb-3">2. Pilih Item</h3>
  
              <div class="row">
                <div
                  class="col-lg-4 col-md-6 col-6 mb-2 item-game"
                  v-for="item in items"
                  :key="item.id"
                >
                  <div
                    class="card card-item bg-custom bg-hover border-1 border-warning text-white"
                    :class="{ 'bg-selected': item === selectedItem }"
                    @click="selectItem(item)"
                  >
                    <div class="card-body">
                      <h5 class="card-title">{{ item.title }}</h5>
                      {{ item.price }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="card border-0 bg-custom text-white shadow-sm mb-4">
            <div class="card-body">
              <h3 class="mb-3">3. Pilih Pembayaran</h3>
  
              <div v-for="payment in payments" :key="payment.id" class="mb-4">
                <button
                  class="btn btn-warning w-100 mb-3"
                  type="button"
                  data-bs-toggle="collapse"
                  :data-bs-target="'#collapsePayment' + payment.id"
                  aria-expanded="false"
                  :aria-controls="'collapsePayment' + payment.id"
                >
                  <h4 class="fw-bold mb-0 text-start text-white">
                    {{ payment.title }}
                  </h4>
                  <div class="text-end">
                    <img :src="payment.image" width="100" alt="" />
                  </div>
                </button>
  
                <div class="collapse" :id="'collapsePayment' + payment.id">
                  <div class="card card-body bg-dark">
                    <div class="row">
                      <div
                        class="col-lg-4 col-md-6 col-6 mb-2"
                        v-for="item in payment.data"
                        :key="item.id"
                      >
                        <div
                          class="card bg-custom border-1 text-white"
                          :class="{ 'bg-selected': item === selectedPayment }"
                          @click="selectPayment(item)"
                        >
                          <div class="card-body">
                            <h5 class="card-title">{{ item.title }}</h5>
                            <div class="text-end">
                              <img
                                :src="item.image"
                                alt="payment image"
                                width="80px"
                              />
                            </div>
                            <p class="fw-bolder">{{ item.price }}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
  
            </div>
          </div>
  
              <button type="submit" class="btn btn-beli text-white fw-bold w-100"><i class="fa-solid fa-cart-shopping"></i> Beli Sekarang</button>
  
  
        </div>
      </div>
    </div>
  
    <layout-footer />
  </template>
  
  <script>
  export default {
    data() {
      return {
        items: [
          { id: 1, title: "420 Points", price: "Rp 50.000" },
          { id: 1, title: "700 Points", price: "Rp 80.000" },
          { id: 1, title: "1375 Points", price: "Rp 150.000" },
          { id: 1, title: "2400 Points", price: "Rp 250.000" },
          { id: 1, title: "3100 Points", price: "Rp 330.000" },
          { id: 1, title: "4000 Points", price: "Rp 400.000" },
          { id: 1, title: "6400 Points", price: "Rp 650.000" },
          { id: 1, title: "8150 Points", price: "Rp 800.000" },
        ],
        payments: [
          {
            id: 1,
            category: "e_wallet",
            title: "E-Wallet",
            image: "https://is3.cloudhost.id/carenindonesia/bisacash/qr.png",
            data: [
              {
                id: 1,
                title: "QRIS",
                image: "https://is3.cloudhost.id/carenindonesia/bisacash/qr.png",
                price: "Rp 350.000",
              },
              {
                id: 1,
                title: "Gopay",
                image: "https://sentralkomputer.com/wp-content/uploads/2020/04/new-gopay-logo-copy.png",
                price: "Rp 350.000",
              },
              {
                id: 1,
                title: "Dana",
                image:
                  "https://www.productboard.com/wp-content/uploads/2020/10/dana-logo.png",
                price: "Rp 350.000",
              },
              {
                id: 1,
                title: "Shopeepay",
                image: "https://1.bp.blogspot.com/-EmJLucvvYZw/X0Gm1J37spI/AAAAAAAAC0s/Dyq4-ko9Eecvg0ostmowa2RToXZITkbcQCLcBGAsYHQ/w1200-h630-p-k-no-nu/Logo%2BShopeePay.png",
                price: "Rp 350.000",
              },
            ],
          },
          {
            id: 2,
            category: "virtual_account",
            title: "Virtual Account",
            image: "https://logos-download.com/wp-content/uploads/2017/03/BCA_logo_Bank_Central_Asia.png",
  
            data: [
              {
                id: 1,
                title: "BCA VA",
                image: "https://logos-download.com/wp-content/uploads/2017/03/BCA_logo_Bank_Central_Asia.png",
                price: "Rp 360.000",
              },
              {
                id: 1,
                title: "BNI VA",
                image: "https://is3.cloudhost.id/carenindonesia/bisacash/bni.png",
                price: "Rp 360.000",
              },
              {
                id: 1,
                title: "BRI VA",
                image: "https://1.bp.blogspot.com/--5kyRID4c5I/YHy3H1FVmmI/AAAAAAAAcgU/RhJDG7y8hMUhwJ-9Xd8GW2cpMn9k9uo6QCLcBGAsYHQ/s400/logo-bank-BRI-baru_237-design.png",
                price: "Rp 360.000",
              },
              {
                id: 1,
                title: "MANDIRI VA",
                image: "https://3.bp.blogspot.com/-9jB6Uhgglco/WlJW0uU9ekI/AAAAAAAANPQ/NPDKUvdd4DgoQdYP75_XlH94IFWRdYxQQCLcBGAs/s1600/logo-bank-mandiri.png",
                price: "Rp 360.000",
              },
            ],
          },
          {
            id: 3,
            category: "retail",
            title: "Retail",
            image: "https://1000logos.net/wp-content/uploads/2020/10/Alfamart-logo.png",
  
            data: [
              {
                id: 1,
                title: "Indomaret",
                image: "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhBMjGibJMDSwmwFvQFb4GPYthT_tuXsE4--XtDBwHnmCApILR5_dZAdyUsXIa8szbH3VJjp6VRat7oEvzrTVkcZhDp7BeRG5wZHDG4nkqAj_b_S5OtXXeppQ5cQkbqcP97d3ZBXom1mtV8AE0UD6zEG6vrYlMrO-svP37BGhzYiiLj_k6pjoGfuCdd/w1200-h630-p-k-no-nu/logo-indomaret.png",
                price: "Rp 360.000",
              },
              {
                id: 2,
                title: "Alfamart",
                image: "https://1000logos.net/wp-content/uploads/2020/10/Alfamart-logo.png",
                price: "Rp 360.000",
              },
            ],
          },
        ],
        selectedItem: null,
        selectedPayment: null,
      };
    },
    methods: {
      selectPayment(payment) {
        this.selectedPayment = payment;
        console.log("Selected Payment:", payment);
      },
      selectItem(item) {
        this.selectedItem = item;
        console.log("Selected item:", item);
      },
    },
  };
  </script>
  
  <style scoped>
  
  .sticky-card {
        position: -webkit-sticky; /* For Safari */
        position: sticky;
        top: 80px;
      }
  
  .btn-beli {
      background: linear-gradient(-45deg, #ff9900, #b99a1c, #b5590d, #dfea15);
      background-size: 400% 400%;
      animation: gradient 15s ease infinite;
      overflow:hidden;
  }
  
  @keyframes gradient {
      0% {
          background-position: 0% 50%;
      }
      50% {
          background-position: 100% 50%;
      }
      100% {
          background-position: 0% 50%;
      }
  }
  
  .bg-custom {
    background-color: rgb(52, 55, 59);
  }
  .item-game {
    cursor: pointer;
  }
  
  .bg-hover:hover {
    background-color: #ffc107 !important;
    color: black !important;
    transition: 0.3s;
  }
  
  .bg-selected {
    background-color: #ffc107 !important;
    color: black !important;
    transition: 0.3s;
  }
  .card-item {
    border-radius: 15px;
  }
  </style>
  