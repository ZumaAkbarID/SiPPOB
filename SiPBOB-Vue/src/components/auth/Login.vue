<script setup></script>

<template>
  <div>
    <button type="button" class="btn-close bg-light m-3" aria-label="Close">
      <RouterLink :to="{ name: 'home' }" aria-current="page"
        ><span style="opacity: 0">x</span></RouterLink
      >
    </button>
    <div class="login-container">
      <form @submit.prevent="login" class="login-form">
        <h2 class="form-title">Login</h2>
        <div class="form-group">
          <label for="username">Username</label>
          <input
            type="text"
            v-model="user.username"
            id="username"
            class="form-control"
            placeholder="Masukkan username"
            required
          />
          <div v-if="validation.username" class="mt-2 alert alert-danger">
            Masukkan Username
          </div>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            v-model="user.password"
            id="password"
            class="form-control"
            placeholder="Masukkan password"
            required
          />
          <div v-if="validation.password" class="mt-2 alert alert-danger">
            Masukkan Password
          </div>
        </div>

        <!-- <RouterLink
        :to="{ name: 'dashboard' }"
        class="btn btn-primary btn-block form-group"
        style="margin-top: 5px"
      >
        Login
      </RouterLink> -->
        <button
          type="submit"
          class="btn btn-primary btn-block form-group"
          style="margin-top: 5px"
        >
          LOGIN
        </button>

        <div class="row form-group">
          <div class="d-md-flex justify-content">
            <a class="btn btn-sm btn-block text-uppercase btn-outline" href="#">
              <img style="width: 30px" src="/assets/img/google.png" />

              Google
            </a>
            <a class="btn btn-sm btn-block text-uppercase btn-outline" href="#">
              <img style="width: 37px" src="/assets/img/discord.png" />
              Discord
            </a>
          </div>
        </div>

        <div>
          <p class="text-center">
            Belum memiliki akun?
            <RouterLink :to="{ name: 'daftar' }" aria-current="page"
              >Daftar</RouterLink
            >
          </p>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import Swal from "sweetalert2";
import NProgress from "NProgress";

export default {
  name: "Login",

  data() {
    return {
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
  methods: {
    async login() {
      if (this.user.username && this.user.password) {
        NProgress.start();

        await axios
          .post(
            this.base_api + "/auth/login",
            {
              username: this.user.username,
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
              localStorage.setItem("loggedIn", "true");
              localStorage.setItem("username", this.user.username);
              localStorage.setItem("token", res.data.data.token);

              //change state
              this.loggedIn = true;

              //redirect dashboard
              return this.$router.push({ name: "dashboard" });
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
        NProgress.done();
      }

      this.validation = [];

      if (!this.user.email) {
        this.validation.email = true;
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
/* Login container */
.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.btn-close {
  background-color: transparent;
}
/* Customizing the login form */
.login-form {
  width: 430px;
  padding: 20px;
  background-color: #f9f9f9;
  border-radius: 8px;
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
</style>