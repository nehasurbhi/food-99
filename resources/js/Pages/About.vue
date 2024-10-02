<template>
  <div>
    <Navigation></Navigation>

    <!-- switch tab start
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-20">
      <div class="max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
      
        About Page
      </div>
    </section> 
     switch tab end -->
    <!-- testinomial test start from here -->
    <section class="py-10 bg-white sm:py-16 lg:py-24">
      <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="grid items-center md:grid-cols-2 gap-y-10 md:gap-x-20">
          <div class="pr-12 sm:pr-0">
            <div class="relative max-w-xs mb-12">
              <img v-for="(image, index) in carouselImages" :key="index" :src="image.mainSrc" :alt="image.alt"
                v-show="currentImageIndex === index" class="object-bottom rounded-md transition-opacity duration-500" />

              <img v-for="(image, index) in carouselImages" :key="index" :src="image.secondarySrc" :alt="image.alt"
                v-show="currentImageIndex === index"
                class="absolute origin-bottom-right scale-75 rounded-md -bottom-12 -right-12 transition-opacity duration-500" />
            </div>
          </div>

          <div>
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">{{
              carouselImages[currentImageIndex].title }}</h2>
            <p class="mt-4 text-base leading-relaxed text-gray-600">{{ carouselImages[currentImageIndex].description
              }}</p>
          </div>
        </div>
        <!-- Carousel Controls -->
        <div class="flex justify-between mt-8">
          <button @click="prevImage" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
            Previous
          </button>
          <button @click="nextImage" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
            Next
          </button>
        </div>
      </div>
    </section>
    <!-- testinomial test end from here -->

    <!-- counter start from here -->
    <section class="py-10 bg-white sm:py-16 lg:py-24">
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center">
          <h4 class="text-xl font-medium text-gray-900">
            Numbers tell the hard work we’ve done in the last 6 years
          </h4>
        </div>

        <div class="grid grid-cols-1 gap-6 px-6 mt-8 sm:px-0 lg:mt-16 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-6">
          <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
            <div class="px-4 py-6">
              <div class="flex items-start">
                <svg class="flex-shrink-0 w-12 h-12 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                <div class="ml-4">
                  <h4 class="text-4xl font-bold text-gray-900">{{ yearsInBusiness }}</h4>
                  <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">
                    Years in business
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
            <div class="px-4 py-6">
              <div class="flex items-start">
                <svg class="flex-shrink-0 w-12 h-12 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <div class="ml-4">
                  <h4 class="text-4xl font-bold text-gray-900">{{ teamMembers }}</h4>
                  <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">
                    Team members
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
            <div class="px-4 py-6">
              <div class="flex items-start">
                <svg class="flex-shrink-0 w-12 h-12 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <div class="ml-4">
                  <h4 class="text-4xl font-bold text-gray-900">{{ projectsDelivered }}</h4>
                  <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">
                    Projects delivered
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
            <div class="px-4 py-6">
              <div class="flex items-start">
                <svg class="flex-shrink-0 w-12 h-12 text-fuchsia-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                </svg>
                <div class="ml-4">
                  <h4 class="text-4xl font-bold text-gray-900">{{ customerSuccess }}%</h4>
                  <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">
                    Customer success
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Counter end -->

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
  name: "About",
  data() {
    return {
      yearsInBusiness: 0,
      teamMembers: 0,
      projectsDelivered: 0,
      customerSuccess: 0,
      observer: null,
      currentImageIndex: 0,
      carouselImages: [
        {
          mainSrc: 'https://cdn.rareblocks.xyz/collection/celebration/images/features/4/man-eating-noodles.jpg',
          secondarySrc: 'https://cdn.rareblocks.xyz/collection/celebration/images/features/4/smiling-businessman.jpg',
          alt: 'First Image',
          title: 'Grow business with Celebration1.',
          description: 'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.'
        },
        {
          mainSrc: 'https://cdn.rareblocks.xyz/collection/celebration/images/features/4/man-eating-noodles.jpg',
          secondarySrc: 'https://cdn.rareblocks.xyz/collection/celebration/images/features/4/smiling-businessman.jpg',
          alt: 'Second Image',
          title: 'Grow business with Celebration2.',
          description: 'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.'
        },
        {
          mainSrc: 'https://cdn.rareblocks.xyz/collection/celebration/images/features/4/man-eating-noodles.jpg',
          secondarySrc: 'https://cdn.rareblocks.xyz/collection/celebration/images/features/4/smiling-businessman.jpg',
          alt: 'Third Image',
          title: 'Grow business with Celebration3.',
          description: 'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.'
        },
      ],
    };

  },
  mounted() {
    // IntersectionObserver to trigger when the section is in view
    this.observer = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting) {
        this.startCountUp();
        this.observer.disconnect(); // Ensure it only happens once
      }
    });

    this.observer.observe(this.$el);
  },
  methods: {
    
    nextImage() {
      this.currentImageIndex = (this.currentImageIndex + 1) % this.carouselImages.length;
    },
    prevImage() {
      this.currentImageIndex =
        (this.currentImageIndex - 1 + this.carouselImages.length) % this.carouselImages.length;
    },

    // countdown start
    startCountUp() {
      this.animateCount('yearsInBusiness', 6, 1000);
      this.animateCount('teamMembers', 37, 1000);
      this.animateCount('projectsDelivered', 300, 6000);
      this.animateCount('customerSuccess', 98, 1500);
    },
    animateCount(field, endValue, duration) {
      let startValue = 0;
      const stepTime = Math.abs(Math.floor(duration / endValue));
      const counter = setInterval(() => {
        startValue += 1;
        this[field] = startValue;
        if (startValue === endValue) {
          clearInterval(counter);
        }
      }, stepTime);
    },
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
