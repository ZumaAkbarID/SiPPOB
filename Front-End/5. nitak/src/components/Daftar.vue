<script setup></script>

<template>
    <navbar />

    <div class="daftar-container">
        <form @submit.prevent="daftar" class="daftar-form">
            <h2 class="form-title">Daftar</h2>
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
                <label for="email">Email</label>
                <input
                    type="email"
                    v-model="email"
                    id="email"
                    class="form-control"
                    placeholder="Masukkan email"
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
        </form>
    </div>

    <layout-footer />
</template>

<style scoped>
/* daftar container */
.daftar-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(45deg, #ff6b6b, #5563de);
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
