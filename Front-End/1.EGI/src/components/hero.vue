<template>
  <div class="hero">
    <div class="carousel-container">
      <div class="carousel-control left" @click="prevSlide">
        <span class="material-icons"><</span>
      </div>
      <Carousel
        :items-to-show="1"
        :wrap-around="true"
        :transition="500"
        :autoplay="5000"
        :pauseAutoplayOnHover="true"
        :model-value="currentSlide"
        ref="carousel"
      >
        <Slide v-for="(slide, index) in slides" :key="index">
          <img :src="slide.imgSrc" alt="slide" class="d-block w-100 carousel-img" />
          <div class="carousel-caption">
            <h3>{{ slide.title }}</h3>
            <p>{{ slide.description }}</p>
          </div>
        </Slide>
      </Carousel>
      <div class="carousel-control right" @click="nextSlide">
        <span class="material-icons">></span>
      </div>
    </div>
    <div class="carousel-indicators">
      <span
        v-for="(slide, index) in slides"
        :key="index"
        :class="{ active: index === currentSlide }"
        class="carousel-indicator"
        @click="goToSlide(index)"
      ></span>
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
          imgSrc: 'public/img/ml.png',
          title: 'Mobile Legends',
          description: 'Experience the thrilling MOBA action on your mobile device!',
        },
        {
          imgSrc: 'public/img/ff.png',
          title: 'Free Fire',
          description: 'Survive and be the last one standing in this battle royale game.',
        },
        {
          imgSrc: 'public/img/pubg.png',
          title: 'PUBG Mobile',
          description: 'Join the ultimate battle royale experience on your smartphone.',
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
  background-color: #9F70FD;
}

.carousel-container {
  position: relative;
  display: active;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
  width: 600px;
  height: auto;
  padding: 10px;
}

.carousel-control {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(255, 255, 255, 1);
  color: #7F27FF;
  font-size: 36px;
  padding: 10px;
  border-radius: 50%;
  cursor: pointer;
  transition: background-color 0.3s ease;
  z-index: 1;
}

.carousel-control.left {
  left: 50px; /* Mengatur posisi untuk tombol kiri */
}

.carousel-control.right {
  right: 50px; /* Mengatur posisi untuk tombol kanan */
}


.carousel-control:hover {
  background-color: rgba(255, 255, 255, 0.8);
}

.carousel-img {
  border-radius: 40px;
  box-shadow: 0 0 0  rgba(0, 0, 0, 0.1);
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

.carousel-indicator.active {
  background-color: #7ffff;
}

/* Material Icons */
.material-icons {
  font-family: 'Material Icons', sans-serif;
  font-weight: normal;
  font-style: normal;
  font-size: 36px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -webkit-font-feature-settings: 'liga';
  -webkit-font-smoothing: antialiased;
}
</style>