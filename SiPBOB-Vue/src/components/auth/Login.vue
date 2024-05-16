<script setup></script>

<template>
  <button type="button" class="btn-close bg-light m-3" aria-label="Close">
    <RouterLink :to="{ name: 'home' }" aria-current="page"><span style="opacity: 0;">x</span></RouterLink>
  </button>
  <div class="login-container">
    <form @submit.prevent="login" class="login-form">
      <h2 class="form-title">Login</h2>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" v-model="username" id="username" class="form-control" placeholder="Masukkan username" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" v-model="password" id="password" class="form-control" placeholder="Masukkan password" required />
      </div>

      <!-- <button type="submit" class="btn btn-primary btn-block form-group" style="margin-top: 5px">Login</button> -->
      <RouterLink :to="{ name: 'dashboard' }" class="btn  btn-primary btn-block form-group"
            >Login</RouterLink
          >

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
          <RouterLink :to="{ name: 'daftar' }" aria-current="page">Daftar</RouterLink>
        </p>
      </div>
    </form>
  </div>
  <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="delay-150 duration-300 ease-in-out print:hidden">
    <path
      d="M 0,400 C 0,400 0,200 0,200 C 40.34909359970402,243.0042668639783 80.69818719940804,286.0085337279566 135,268 C 189.30181280059196,249.9914662720434 257.5563448020718,170.97013195215192 311,159 C 364.4436551979282,147.02986804784808 403.07643359230485,202.11093846343573 452,207 C 500.92356640769515,211.88906153656427 560.137920828709,166.58611419410528 626,169 C 691.862079171291,171.41388580589472 764.3718830928599,221.54460476014305 826,248 C 887.6281169071401,274.45539523985695 938.3745467998519,277.2354667653225 985,246 C 1031.625453200148,214.7645332346775 1074.1299297077323,149.51352817856701 1122,137 C 1169.8700702922677,124.48647182143299 1223.1057343692194,164.71042052040943 1277,184 C 1330.8942656307806,203.28957947959057 1385.4471328153904,201.64478973979527 1440,200 C 1440,200 1440,400 1440,400 Z"
      stroke="none"
      stroke-width="0"
      fill="#34373b"
      fill-opacity="1"
      class="path-0 transition-all delay-150 duration-300 ease-in-out"
    ></path>
  </svg>
</template>

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
