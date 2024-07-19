<template>
  <div>
    <button type="button" class="btn-close bg-light m-3" aria-label="Close">
      <RouterLink :to="{ name: 'home' }" aria-current="page"
        ><span style="opacity: 0">x</span></RouterLink
      >
    </button>
    <div class="daftar-container">
      <form @submit.prevent="daftar" class="daftar-form">
        <h2 class="form-title">Daftar</h2>
        <div class="form-group">
          <label for="username">Username</label>
          <input
            type="text"
            id="username"
            class="form-control"
            placeholder="Masukkan username"
            required
            v-model="user.username"
          />
          <div v-if="validation.username" class="mt-2 alert alert-danger"></div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            class="form-control"
            placeholder="Masukkan email"
            required
            v-model="user.email"
          />
          <div v-if="validation.email" class="mt-2 alert alert-danger"></div>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            class="form-control"
            placeholder="Masukkan password"
            required
            v-model="user.password"
          />
          <div v-if="validation.password" class="mt-2 alert alert-danger"></div>
        </div>

        <div class="utama-cek">
          <div class="col-12">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                id="gridCheck"
                required
              />
              <label class="form-check-label" for="gridCheck">
                Dengan mendaftar saya menyetujui
                <a href="#">Aturan Penggunaan</a> dan
                <a href="#">Kebijakan Privasi </a>TOP-UP IN
              </label>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block space">
          Daftar
        </button>

        <div>
          <p class="text-center">
            Sudah memiliki akun?
            <RouterLink :to="{ name: 'masuk' }" aria-current="page"
              >Masuk</RouterLink
            >
          </p>
        </div>
      </form>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#34373b"
        fill-opacity="1"
        d="M0,160L26.7,176C53.3,192,107,224,160,240C213.3,256,267,256,320,240C373.3,224,427,192,480,186.7C533.3,181,587,203,640,202.7C693.3,203,747,181,800,154.7C853.3,128,907,96,960,101.3C1013.3,107,1067,149,1120,165.3C1173.3,181,1227,171,1280,170.7C1333.3,171,1387,181,1413,186.7L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
      ></path>
    </svg>
  </div>
</template>

<script>
import axios from "axios";
import Swal from "sweetalert2";
import Loading from "vue-loading-overlay";
import "vue-loading-overlay/dist/css/index.css";

export default {
  name: "Register",

  data() {
    return {
      isLoading: false,
      fullPage: true,
      //state loggedIn with localStorage
      loggedIn: localStorage.getItem("loggedIn"),
      //state token
      token: localStorage.getItem("token"),
      //state user
      user: [],
      //state validation
      validation: [],
      //state login failed
      loginFailed: false,
      // Apinyah
      base_api: import.meta.env.VITE_BASE_API,
      secret_token: import.meta.env.VITE_SECRET_TOKEN,
    };
  },
  components: {
    Loading,
  },
  methods: {
    async daftar() {
      if (this.user.username && this.user.email && this.user.password) {
        this.isLoading = true;

        await axios
          .post(
            this.base_api + "/auth/register",
            {
              username: this.user.username,
              email: this.user.email,
              password: this.user.password,
            },
            {
              headers: {
                Accept: "application/json",
                SECRET: this.secret_token,
              },
            }
          )
          .then((res) => {
            if (res.data.status) {
              Swal.fire({
                title: "Sukses!",
                text: "Akun berhasil dibuat, silahkan login",
                icon: "success",
              });
              this.isLoading = false;

              //redirect login
              return this.$router.push({ name: "masuk" });
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
        this.isLoading = false;
      }

      this.validation = [];

      if (!this.user.email) {
        this.validation.email = true;
      }

      if (!this.user.username) {
        this.validation.username = true;
      }

      if (!this.user.password) {
        this.validation.password = true;
      }
    },
  },

  //check user already logged in
  mounted() {
    if (this.loggedIn) {
      return this.$router.push({ name: "dashboard" });
    }
  },
};
</script>

<style scoped>
/* daftar container */
.daftar-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Customizing the daftar form */
.daftar-form {
  width: 430px;
  padding: 20px;
  background-color: #f9f9f9;
  border-radius: 8px;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

/* Centering title */
.form-title {
  text-align: center;
}

/* Adding space between form groups */
.form-group {
  margin-bottom: 20px;
}

.space {
  margin-bottom: 15px;
}

/* Styling form controls */
.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Customizing the primary button */
.btn-primary {
  background-color: #5563de;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 0;
  cursor: pointer;
}

/* Hover effect */
.btn-primary:hover {
  background-color: #445bd4;
}

/* Making button full width */
.btn-block {
  width: 100%;
}

/* Making custom for checking box */
.utama-cek {
  font-size: 12px;
  margin-top: 15px;
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}
</style>
