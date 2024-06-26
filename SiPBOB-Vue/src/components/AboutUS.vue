<template>
  <navbar />
  <!-- ini kan manggil file navbar ---->

  <!-- ngoding disini ya ---->
  <div class="we-are-block">
    <div id="about-us-section">
      <div class="about-us-image">
        <img
          class="logo-amikom"
          src="https://upload.wikimedia.org/wikipedia/id/thumb/c/c7/AMIKOM_LOGO.svg/1200px-AMIKOM_LOGO.svg.png"
          width="808"
          height=""
          alt="Logo Amikom"
        />
      </div>

      <div class="about-us-info">
        <h2>Visi & Misi</h2>
        <h3>Visi</h3>
        <p>
          Menjadi layanan top-up game terkemuka dan terpercaya bagi pemain game
          di seluruh Indonesia.
        </p>

        <h3>Misi</h3>
        <p>
          Memberikan layanan top-up game yang cepat, mudah, dan aman bagi pemain
          game di Indonesia dengan layanan pelanggan yang responsif dan
          memuaskan
        </p>
        <RouterLink :to="{ name: 'home' }">BERANDA</RouterLink>
      </div>
    </div>

    <div id="history-section">
      <div class="history-image">
        <img
          src="/assets/topupin-logo.png"
          width="50%"
          height=""
          alt="Logo Top Up In"
        />
      </div>

      <div class="history-info">
        <h2>Sejarah Perusahaan</h2>
        <p>
          Pada tahun 2020, dunia mengalami pandemi Covid-19 yang mengharuskan
          masyarakat mengurangi kegiatan di luar rumah dan menghabiskan waktu
          lebih banyak di rumah. Tak sedikit yang merasa kaget dengan pandemi
          yang terjadi secara mendadak, beberapa dari mereka memutuskan untuk
          menghabiskan waktu dan melepas stress dengan bermain game. Kami hadir
          untuk melengkapi pengalaman bermain yang lebih lengkap dengan top-up
          game melalui perusahaan kami. Besar harapan kami untuk dapat terus
          bersaing dengan sehat kedepannya.
        </p>

        <RouterLink :to="{ name: 'kontak' }">KONTAK</RouterLink>
      </div>
    </div>
  </div>

  <layout-footer />
  <!-- ini kan manggil file footer ---->
</template>

<style scoped>
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Poppins", cursive;
}

a {
  text-decoration: none;
  transition: all 0.5s ease-in-out;
}

a:hover {
  transition: all 0.5s ease-in-out;
}

.we-are-block {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  flex-wrap: nowrap;
  width: 100%;
  height: 900px;
}

@media screen and (max-width: 860px) {
  .we-are-block {
    height: 2200px;
  }
  .logo-amikom{
    width: 500px;
  }
}

@media screen and (max-width: 500px) {
  .we-are-block {
    height: 2300px;
  }
}

#about-us-section {
  background: #fdbf60;
  width: 100%;
  height: 50%;
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  align-items: center;
  justify-content: center;
  position: relative;
}

@media screen and (max-width: 860px) {
  #about-us-section {
    flex-direction: column;
    justify-content: space-between;
  }
}

.about-us-image {
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
  overflow: hidden;
}

@media screen and (max-width: 860px) {
  .about-us-image {
    position: relative;
    width: 100%;
    height: 45%;
  }
}

@media screen and (max-width: 747px) {
  .about-us-image {
    height: 35%;
  }
}

@media screen and (max-width: 644px) {
  .about-us-image img {
    position: absolute;
    left: -220px;
  }
}

.about-us-info {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: space-evenly;
  width: 40%;
  height: 80%;
  margin-right: 850px;
  margin-left: 12px;
  z-index: 2;
  font-family: "Poppins";
}

@media screen and (max-width: 1353px) {
  .about-us-info {
    margin-right: 400px;
    width: 60%;
    /* background: #0c4c9199; */
    padding: 0px 25px 0px 0px;
  }
}

@media screen and (max-width: 1238px) {
  .about-us-info {
    margin-right: 340px;
    width: 100%;
  }
}

@media screen and (max-width: 1111px) {
  .about-us-info {
    margin-right: 270px;
  }
}

@media screen and (max-width: 910px) {
  .about-us-info {
    margin-right: 150px;
  }
}

@media screen and (max-width: 860px) {
  .about-us-info {
    margin: 0px 0px 0px 0px !important;
    padding: 0px 20px 0px 20px !important;
    width: 100%;
    height: 55%;
    align-items: center;
  }
}

@media screen and (max-width: 747px) {
  .about-us-info {
    height: 65%;
  }
}

.about-us-info h2 {
  color: black;
  font-size: 40pt;
  text-align: right;
  font-family: "Poppins";
}

@media screen and (max-width: 860px) {
  .about-us-info h2 {
    text-align: center;
  }
}

.about-us-info h3 {
  color: white;
  text-align: left;
  font-family: "Poppins";
}

.about-us-info p {
  color: black;
  font-size: 14pt;
  text-align: right;
  font-family: "Poppins";
}

@media screen and (max-width: 860px) {
  .about-us-info p {
    text-align: center;
  }
}

.about-us-info a {
  background-color: #404140;
  color: white;
  width: 180px;
  text-align: center;
  padding: 15px 0px 15px 0px;
  font-size: 14pt;
  font-family: "Poppins";
  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}

.about-us-info a:hover {
  background: white;
  color: black;
  box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
  transform: translateY(10px);
}

#history-section {
  width: 100%;
  height: 50%;
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  align-items: center;
  justify-content: center;
  position: relative;
}

@media screen and (max-width: 860px) {
  #history-section {
    flex-direction: column;
    justify-content: space-between;
  }
}

.history-image {
  position: absolute;
  top: 0;
  left: 0;
  max-width: 820px;
  height: 100%;
  overflow: hidden;
}

@media screen and (max-width: 860px) {
  .history-image {
    position: relative;
    width: 100%;
    height: 40%;
  }
}

@media screen and (max-width: 747px) {
  .history-image {
    height: 35%;
  }
}

@media screen and (max-width: 644px) {
  .history-image img {
    position: absolute;
    right: -220px;
  }
}

.history-info {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: space-evenly;
  width: 40%;
  height: 80%;
  margin-left: 850px;
  margin-right: 12px;
  z-index: 2;
  font-family: "Poppins";
}

@media screen and (max-width: 1353px) {
  .history-info {
    margin-left: 400px;
    width: 60%;
    /* background: #ffffff99; */
    padding: 0px 0px 0px 25px;
  }
}

@media screen and (max-width: 1238px) {
  .history-info {
    margin-left: 340px;
    width: 100%;
  }
}

@media screen and (max-width: 1111px) {
  .history-info {
    margin-left: 270px;
  }
}

@media screen and (max-width: 910px) {
  .history-info {
    margin-left: 150px;
  }
}

@media screen and (max-width: 860px) {
  .history-info {
    margin: 0px 0px 0px 0px !important;
    padding: 0px 40px 0px 40px !important;
    width: 100%;
    height: 60%;
    align-items: center;
  }
}

@media screen and (max-width: 747px) {
  .history-info {
    height: 65%;
  }
}

.history-info h2 {
  color: #ff8911;
  font-size: 40pt;
  text-align: left;
  font-family: "Poppins";
}

@media screen and (max-width: 860px) {
  .history-info h2 {
    text-align: center;
  }
}

.history-info p {
  color: #ff8911;
  font-size: 14pt;
  text-align: left;
  font-family: "Poppins";
}

@media only screen and (max-width: 860px) {
  .history-info p {
    text-align: center;
  }
}

.history-info a {
  background-color: #ff8911;
  color: white;
  width: 180px;
  text-align: center;
  padding: 15px 0px 15px 0px;
  font-size: 14pt;
  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
  font-family: "Poppins";
}

.history-info a:hover {
  color: #404140;
  box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
  transform: translateY(10px);
}
</style>
