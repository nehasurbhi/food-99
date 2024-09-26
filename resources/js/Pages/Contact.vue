<template>
  <div>
    <Navigation></Navigation>

    <!-- switch tab start -->
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-20">
      <div class="max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
        <!-- Tabs -->
        Contact Page
      </div>
    </section>
    <!-- switch tab end -->

    <Footer></Footer>
  </div>
</template>

<script>
import Navigation from "@/Layouts/Navigation.vue";
import Footer from "@/Layouts/Footer.vue";
export default {
  components: {
    Navigation,
    Footer
  },
  name: "Contact",
  data() {
    return {
     
    };
  },
  computed: {
   
  },
};
</script>

<style scoped>
/* You can add any additional styles here */
.max-w-7xl {
  max-width: 70rem;
}
</style>
