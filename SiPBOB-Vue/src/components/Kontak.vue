<script setup></script>

<template>
    <navbar />
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Kontak Kami</h2>
                <p>
                    Jika Anda memiliki pertanyaan atau masalah, jangan ragu
                    untuk menghubungi kami melalui formulir di bawah ini.
                </p>
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nama"
                            required
                        />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            required
                        />
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea
                            class="form-control"
                            id="pesan"
                            rows="5"
                            required
                        ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Kirim Pesan
                    </button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Informasi Kontak</h2>
                <p>
                    Jl. Jenderal Sudirman No. 123<br />
                    Jakarta, Indonesia
                </p>
                <p>
                    Email: info@bangjeff.com<br />
                    Telepon: 123-456-789
                </p>
                <p>Ikuti kami di media sosial:</p>
                <ul class="list-unstyled">
                    <li>
                        <a href="#"><i class="bi bi-facebook"></i> Facebook</a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-twitter"></i> Twitter</a>
                    </li>
                    <li>
                        <a href="#"
                            ><i class="bi bi-instagram"></i> Instagram</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <layout-footer />
</template>

<style scoped>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
.container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}
.contact-form {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.contact-form h2 {
    text-align: center;
}
.form-group {
    margin-bottom: 20px;
}
.form-group label {
    display: block;
    font-weight: bold;
}
.form-group input[type="text"],
.form-group input[type="email"],
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.form-group textarea {
    height: 100px;
}
.form-group input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}
.form-group input[type="submit"]:hover {
    background-color: #0056b3;
}
</style>
