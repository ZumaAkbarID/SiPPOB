<template>
  <navbar />

  <div class="container py-5">
    <form @submit.prevent="beliSekarang">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-4">
          <div class="card border-0 bg-custom text-white shadow-sm sticky-card">
            <img
              :src="Storage_url + product.image"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h2>{{ product.brand }}</h2>
              <p>
                {{ product.description }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
          <div class="card border-0 bg-custom text-white shadow-sm mb-4">
            <div class="card-body">
              <h3 class="mb-3">1. Masukan ID/Nickname Game</h3>
              <input
                type="text"
                name=""
                id=""
                placeholder="id atau nickname"
                class="form-control"
                required
                v-model="id_game"
              />
              <small class="small text-white mt-2"
                >Pastikan data benar, perhatikan spasi, jika MLBB ketik seperti
                berikut <code>2131233 3433</code> id< spasi >zona
              </small>
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
                      <h5 class="card-title">{{ item.product_name }}</h5>
                      {{ formatPrice(item.price) }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card border-0 bg-custom text-white shadow-sm mb-4">
            <div class="card-body">
              <h3 class="mb-3">3. Nomor WhatsApp</h3>

              <input
                type="tel"
                name=""
                id=""
                placeholder="081xxxx"
                class="form-control"
                required
                v-model="phoneNumber"
                @keyup="validatePhoneNumber"
              />
              <small class="text-white"
                >Rincian pembelian akan dikirimkan ke nomor WhatsApp.</small
              >
            </div>
          </div>

          <button
            type="submit"
            class="btn btn-beli text-white fw-bold w-100 py-2"
          >
            <i class="fa-solid fa-cart-shopping"></i> Beli Sekarang
          </button>

          <!-- <RouterLink :to="{ name: 'pembayaran' }"> </RouterLink> -->
        </div>
      </div>
    </form>
  </div>

  <layout-footer />
</template>

<script>
import axios from "axios";
import Swal from "sweetalert2";

export default {
  data() {
    return {
      loggedIn: localStorage.getItem("loggedIn"),
      token: localStorage.getItem("token"),
      Storage_url: import.meta.env.VITE_IMAGE_STORAGE_URL + "/product/",
      items: [],
      base_api: import.meta.env.VITE_BASE_API,
      secret_token: import.meta.env.VITE_SECRET_TOKEN,
      selectedItem: null,
      selectedPayment: null,
      product: [],
      phoneNumber: "08",
      id_game: "",
      phoneNumberPattern: /^08\d{0,12}$/,
    };
  },
  created() {
    this.fetchCategories();
    this.fetchProduct();
  },
  methods: {
    formatPrice(value) {
      let val = (value / 1).toFixed(0).replace(".", ",");
      return "Rp " + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    },
    selectItem(item) {
      this.selectedItem = item;
    },
    validatePhoneNumber() {
      if (!this.phoneNumberPattern.test(this.phoneNumber)) {
        this.phoneNumber = "08";
        Swal.fire({
          title: "Error!",
          text: "Nomor HP harus diawali dengan 08 dan hanya berisi angka tanpa spasi.",
          icon: "error",
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 1500,
          timerProgressBar: true,
        });
      }
    },
    async fetchCategories() {
      await axios
        .get(`${this.base_api}/product/${this.$route.params.id}`, {
          headers: {
            SECRET: this.secret_token,
          },
        })
        .then((response) => {
          this.items = response.data.data;
        })
        .catch((error) => {
          console.error("Failed to fetch product:", error);
        });
    },
    async fetchProduct() {
      await axios
        .get(`${this.base_api}/category/${this.$route.params.id}`, {
          headers: {
            SECRET: this.secret_token,
          },
        })
        .then((response) => {
          this.product = response.data.data;
        })
        .catch((error) => {
          console.error("Failed to fetch product:", error);
        });
    },
    async beliSekarang(form) {
      let errorMessage = "";

      if (!this.id_game) errorMessage = "ID/Nickname game wajib di isi!";

      if (!this.selectedItem) errorMessage = "Pilih item yang akan kamu beli!";

      if (!this.phoneNumberPattern.test(this.phoneNumber)) {
        this.phoneNumber = "08";
        errorMessage =
          "Nomor HP harus diawali dengan 08 dan hanya berisi angka tanpa spasi.";
      }

      if (errorMessage)
        return Swal.fire({
          title: "Error!",
          text: errorMessage,
          icon: "error",
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 1500,
          timerProgressBar: true,
        });

      axios.defaults.withCredentials = this.loggedIn ?? false;
      await axios
        .post(
          this.base_api + "/transaction/order",
          {
            category: this.$route.params.id,
            item: this.selectedItem.id,
            idGame: this.id_game,
            phone: this.phoneNumber,
          },
          {
            headers: {
              Accept: "application/json",
              Authorization: `Bearer ${this.token}`,
              SECRET: this.secret_token,
            },
          }
        )
        .then((res) => {
          console.log(res);
          if (res.data.status) {
            Swal.fire({
              title: "OK!",
              text: res.data.message,
              icon: "success",
            });
          } else {
            //set state login failed
            Swal.fire({
              title: "Error!",
              text: res.data.message,
              icon: "error",
            });
          }
        })
        .catch((error) => {
          Swal.fire({
            title: "Error!",
            text: error.response.data.message,
            icon: "error",
          });
        });
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
  animation: gradient 10s ease infinite;
  overflow: hidden;
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
<!-- komen bawah -->