<script setup></script>

<template>
  <navbar />

  <div class="login-container">
    <form @submit.prevent="login" class="login-form">
      <h2 class="form-title">Login</h2>
      <div class="form-group">
        <label for="username">Username</label>
        <input
          type="text"
          v-model="username"
          id="username"
          class="form-control"
          placeholder="Masukkan username"
          required
        />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input
          type="password"
          v-model="password"
          id="password"
          class="form-control"
          placeholder="Masukkan password"
          required
        />
      </div>

      <!-- <button
        type="submit"
        class="btn btn-primary btn-block form-group"
        style="margin-top: 5px"
      >
        Login
      </button> -->
      <RouterLink
        :to="{ name: 'dashboard' }"
        class="btn btn-primary btn-block form-group"
        style="margin-top: 5px"
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
          <RouterLink :to="{ name: 'daftar' }" aria-current="page"
            >Daftar</RouterLink
          >
        </p>
      </div>
    </form>
  </div>

  <layout-footer />
</template>

<style scoped>
/* Login container */
.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: linear-gradient(45deg, #ff6b6b, #5563de);
}

/* Customizing the login form */
.login-form {
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
</style>
