<template>
  <section class="hero">
    <div class="container">
      <div class="hero__slider owl-carousel">
        <div v-for="(item, index) in heroItems" :key="index" class="hero__items set-bg" :data-setbg="item.backgroundImage">
          <div class="row">
            <div class="col-lg-6">
              <div class="hero__text">
                <div class="label">{{ item.category }}</div>
                <h2>{{ item.title }}</h2>
                <p>{{ item.description }}</p>
                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      heroItems: [
        {
          category: 'Adventure',
          title: 'Fate / Stay Night: Unlimited Blade Works',
          description: 'After 30 days of travel across the world...',
          backgroundImage: 'img/hero/hero-1.jpg'
        },
        {
          category: 'Adventure',
          title: 'Fate / Stay Night: Unlimited Blade Works',
          description: 'After 30 days of travel across the world...',
          backgroundImage: 'img/hero/hero-2.jpg'
        },
        {
          category: 'Adventure',
          title: 'Fate / Stay Night: Unlimited Blade Works',
          description: 'After 30 days of travel across the world...',
          backgroundImage: 'img/hero/hero-3.jpg'
        }
      ]
    };
  }
};
</script>

<style scoped>
.hero {
  /* Styles for hero section */
}

.hero__items {
  /* Styles for hero items */
}

/* Add more styles as needed */
</style>
