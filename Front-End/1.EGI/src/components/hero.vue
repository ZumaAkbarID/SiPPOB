<template>
  <div class="hero">
    <div class="carousel-container">
      <div class="carousel-control left" @click="prevSlide">
      </div>
      <Carousel
        :items-to-show="1"
        :wrap-around="true"
        :transition="500"
        :autoplay="2500"
        :pauseAutoplayOnHover="true"
        :model-value="currentSlide"
        ref="carousel"
      >
        <Slide v-for="(slide, index) in slides" :key="index">
          <img :src="slide.imgSrc" alt="slide" class="carousel-img" />

        </Slide>
      </Carousel>
      <div class="carousel-control right" @click="nextSlide">
      </div>
    </div>
  </div>
</template>

<script>
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide } from 'vue3-carousel';

export default {
  components: {
    Carousel,
    Slide,
  },
  data() {
    return {
      currentSlide: 0,
      slides: [
        {
          imgSrc: 'src/assets/img/slide1.png',

        },
        {
          imgSrc: 'src/assets/img/slide2.png',
        },
        {
          imgSrc: 'src/assets/img/slide3.png',
        },
      ],
    };
  },
  methods: {
    prevSlide() {
      this.$refs.carousel.prev();
    },
    nextSlide() {
      this.$refs.carousel.next();
    },
    goToSlide(index) {
      this.currentSlide = index;
      this.$refs.carousel.slideTo(index);
    },
  },
};
</script>

<style scoped>
.hero {
  padding: 20px 0;
  background-color: rgb(30 32 34);
}

.carousel-container {
  position: relative;
  margin: 0 auto;
  width: 90%; /* Lebar relatif untuk responsif */
}
.carousel-control {
  position: absolute;
  top: 1000%;
  transform: translateY(-50%);
  background-color: #7F27FF;
  color: #fff;
  font-size: 10px;
  padding: 0px;
  border-radius: 100%;
  cursor: pointer;
  transition: background-color 0.3s ease;
  z-index: 1;
}

.carousel-control.left {
    left: 20px; /* Mengatur posisi untuk tombol kiri */
  border-radius: 50%; /* Menjadikan tombol kiri bulat */
}

.carousel-control.right {
   right: 20px; /* Mengatur posisi untuk tombol kanan */
  border-radius: 50%; /* Menjadikan tombol kanan bulat */
}

.carousel-control:hover {
  background-color: rgba(255, 255, 255, 1);
}

.carousel-img {
    object-fit: cover; /* Sesuaikan gambar agar ukurannya sama */
  width: 100%; /* Gambar memenuhi lebar container */
  border-radius: 20px; /* Sudut border gambar */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan gambar */
}

.carousel-caption {
  position: absolute;
  bottom: 20px;
  left: 20px;
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  max-width: 60%;
}

.carousel-caption h3 {
  font-size: 20px;
  margin-bottom: 5px;
}

.carousel-caption p {
  font-size: 14px;
  margin: 0;
}

.carousel-indicators {
  display: flex;
  justify-content: center;
  margin-top: 10px;
}

.carousel-indicator {
  width: 12px;
  height: 12px;
  background-color: #ccc;
  border-radius: 50%;
  margin: 0 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

/* Material Icons */
.material-icons {  
  font-family: 'Material Icons', sans-serif;
  font-size: 36px;
  line-height: 1;
}

@media (max-width: 992px) { 
  .card-img-top {
    height: 150px; /* Atur tinggi gambar untuk layar berukuran kecil */
  }
}

@media (max-width: 768px) {
  .card {
    margin-bottom: 10px; /* Atur margin bawah kartu untuk layar berukuran kecil */
  }
}

</style>
