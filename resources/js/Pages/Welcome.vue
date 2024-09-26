<template>
  <div>
    <Navigation></Navigation>
    <div class=" text-gray-900 ">
      <!-- Hero Section -->
      <section class="bg-cover bg-center h-screen " id="food">
        <!-- :style="{ backgroundImage: `url(${heroImage})` }" -->
        <!-- <div>
            <img :src="imgs/food.png" alt="food">
        </div> -->
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
          <div class="text-center">
            <h1 class="text-5xl font-bold text-white">Welcome to Our Restaurant</h1>
            <p class="text-xl text-gray-300 mt-4">Experience the best dining in the city</p>
            <a href="#menu"
              class="mt-6 inline-block bg-yellow-500 text-white py-2 px-6 rounded-full hover:bg-yellow-600">
              Explore Our Menu
            </a>
          </div>
        </div>
      </section>
      <!-- Hero section end -->


      <!-- food section start from here -->
      <section class="bg-gray-100">
        <div class="max-w-7xl mx-auto xl:px-4 lg:px-4 px-5 carousel-container py-5 bg-gray-100">
          <div class="relative">
            <h3 class="text-2xl font-semibold text-gray-800 mb-8 text-center">We offer people best way to eat healthy
              food
            </h3>
            <div ref="carousel" class="carousel-content flex overflow-x-scroll space-x-6 scrollbar-hide">
              <!-- Carousel Items -->
              <div v-for="item in items" :key="item.id" class="flex-none w-40 flex flex-col items-center">
                <div class=" rounded-full">
                  <img :src="item.imgSrc" alt="image" class="w-40 h-40 object-cover rounded-full mx-auto">
                  <a :href="item.link" class="block p-4 text-center">
                    <p class="text-lg  font-semibold">{{ item.title }}</p>
                  </a>
                </div>
              </div>
            </div>
            <!-- Previous and Next Icons -->
            <button @click="scrollPrev"
              class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button @click="scrollNext"
              class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
      </section>
      <!-- food section end -->

      <!-- Explore story start -->
      <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
          <div class="grid items-center md:grid-cols-2 md:gap-x-20 gap-y-10">
            <!-- Right Image Section (Chef Image) -->
            <div class="relative pl-16 pr-10 sm:pl-6 md:pl-0 xl:pr-0 md:order-2">
              <img class="absolute top-6 -right-4 xl:-right-12"
                src="https://cdn.rareblocks.xyz/collection/celebration/images/features/3/dots-pattern.svg" alt="" />

              <div class="relative max-w-md ml-auto">
                <div class="overflow-hidden">
                  <img class="object-cover w-full h-auto rounded-lg shadow-lg" src="imgs/chef.png" alt="Chef Image" />
                </div>
              </div>
            </div>

            <!-- Left Text Section -->
            <div class="md:order-1">
              <!-- Section Title and Description -->
              <div class="text-center mb-10">
                <h3 class="text-sm font-semibold text-orange-500 uppercase tracking-wide">Services</h3>
                <h2 class="mt-2 text-3xl font-bold text-gray-900 sm:text-4xl">We serve best quality food</h2>
              </div>

              <!-- Services List -->
              <div class="space-y-6">
                <!-- Single Service -->
                <div class="flex items-start bg-white rounded-xl shadow-md p-6">
                  <!-- Icon -->
                  <div class="flex-shrink-0">
                    <span class="inline-block p-4 bg-orange-100 text-orange-500 rounded-full">
                      <!-- Icon can be replaced with an SVG -->
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M..." />
                      </svg>
                    </span>
                  </div>
                  <!-- Title and Description -->
                  <div class="ml-6">
                    <h4 class="text-lg font-semibold text-gray-900">Healthy Food</h4>
                    <p class="mt-2 text-base text-gray-600">A food festival is a festival that uses food, often produce,
                      as its central theme. These festivals have always been.</p>
                  </div>
                </div>

                <!-- Second Service -->
                <!---  <div class="flex items-start bg-white rounded-xl shadow-md p-6">
        
        <div class="flex-shrink-0">
          <span class="inline-block p-4 bg-orange-100 text-orange-500 rounded-full">
            
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
              <path d="M..." />
            </svg>
          </span>
        </div>
        
        <div class="ml-6">
          <h4 class="text-lg font-semibold text-gray-900">Super Tea</h4>
          <p class="mt-2 text-base text-gray-600">A food festival is a festival that uses food, often produce, as its central theme. These festivals have always been.</p>
        </div> 
      </div>-->

                <!-- Third Service -->
                <div class="flex items-start bg-white rounded-xl shadow-md p-6">
                  <!-- Icon -->
                  <div class="flex-shrink-0">
                    <span class="inline-block p-4 bg-orange-100 text-orange-500 rounded-full">
                      <!-- Icon can be replaced with an SVG -->
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M..." />
                      </svg>
                    </span>
                  </div>
                  <!-- Title and Description -->
                  <div class="ml-6">
                    <h4 class="text-lg font-semibold text-gray-900">Fast Service</h4>
                    <p class="mt-2 text-base text-gray-600">A food festival is a festival that uses food, often produce,
                      as its central theme. These festivals have always been.</p>
                  </div>
                </div>
              </div>


              <a href="#"
                class="inline-flex items-center justify-center px-8 py-3 mt-8 text-base font-semibold bg-yellow-400 text-black font-semibold py-2 px-6 rounded-full hover:bg-yellow-500 transition-all"
                role="button">
                Start exploring
              </a>

            </div>
          </div>
        </div>
      </section>

      <!-- Explore end story -->

      <!-- image section start -->
      <section class="max-w-7xl mx-auto xl:px-4 lg:px-4 px-6 py-5">
        <div class="bg-gray-900 rounded-xl flex flex-col lg:flex-row justify-between items-center">
          <!-- Left Section: Text and Buttons (With padding) -->
          <div class="text-left text-white lg:w-1/2 px-6 py-5">
            <h1 class="text-3xl lg:text-4xl font-bold mb-4">
              Discover Restaurants <br /> Near From you
            </h1>
            <div class="flex space-x-4 mt-6">
              <!-- Find Restaurants Button -->
              <button
                class="bg-yellow-400 text-black font-semibold py-2 px-6 rounded-full hover:bg-yellow-500 transition-all">
                Find Restaurants
              </button>
              <!-- Explore Menu Button -->
              <button
                class="bg-orange-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-orange-600 transition-all">
                Explore Menu
              </button>
            </div>
          </div>

          <!-- Right Section: Image (No padding, aligned at top) -->
          <div class="lg:w-1/2 flex justify-center lg:justify-end items-start">
            <img src="imgs/cheese1.png" alt="Sandwich"
              class="w-full max-w-xs sm:max-w-sm lg:max-w-md rounded-lg shadow-xl" />
          </div>
        </div>
      </section>
      <!-- image section end -->


      <!-- testinomial start from here -->
      <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
          <div class="grid items-center md:grid-cols-2 gap-y-10 md:gap-x-20">
            <div class="pr-12 sm:pr-0">
              <div class="relative max-w-xs mb-12">
                <img class="object-bottom rounded-md"
                  src="https://cdn.rareblocks.xyz/collection/celebration/images/features/4/man-eating-noodles.jpg"
                  alt="" />

                <img class="absolute origin-bottom-right scale-75 rounded-md -bottom-12 -right-12"
                  src="https://cdn.rareblocks.xyz/collection/celebration/images/features/4/smiling-businessman.jpg"
                  alt="" />
              </div>
            </div>

            <div>
              <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Grow business with
                Celebration.</h2>
              <p class="mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt ullamco est sit
                aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat
                sunt nostrud amet.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- testinomial end -->

     

      <!-- order section start -->
      <section class="max-w-7xl mx-auto xl:px-4 lg:px-4 relative my-5">
        <div class="bg-yellow-400 py-12 px-6 flex justify-between items-center relative z-10 rounded-t-xl">
          <!-- Left Section: Text and App Store Buttons -->
          <div class="text-left">
            <h1 class="text-4xl font-bold text-gray-900 mb-6">
              Simple way to <br /> order your foods
            </h1>
            <div class="flex space-x-4">
              <a href="#" class="inline-block">
                <img src="imgs/Google_play.png" alt="Google Play" class="h-12" />
              </a>
              <a href="#" class="inline-block">
                <img src="imgs/App_store.png" alt="App Store" class="h-12" />
              </a>
            </div>
          </div>
        </div>

        <!-- Right Section: Mobile Screens (Overlapping the background) -->
        <div class="absolute top-0 right-0 transform -translate-x-1/2 -translate-y-18 lg:-translate-y-20 z-20 ">
          <img src="imgs/phone.png" alt="Mobile Screen 2" class="" />
        </div>
      </section>
      <!-- Order section end -->
     
      <!-- About Section -->
      <!-- <section class="py-20 px-6 md:px-12 bg-white" id="about">
        <div class="max-w-5xl mx-auto text-center">
          <h2 class="text-4xl font-semibold mb-8">About Us</h2>
          <p class="text-lg text-gray-600 leading-relaxed">
            We are a family-owned restaurant that offers a wide variety of delicious meals, using only the freshest
            ingredients. Our passion for food drives us to deliver an unforgettable dining experience.
          </p>
        </div>
      </section> -->

      <!-- Menu Section -->
      <!-- <section class="py-20 px-6 md:px-12 bg-gray-50" id="menu">
        <div class="max-w-6xl mx-auto">
          <h2 class="text-4xl font-semibold mb-8 text-center">Our Menu</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div v-for="item in menuItems" :key="item.id" class="bg-white shadow-lg rounded-lg overflow-hidden">
              <img :src="item.image" alt="menu item" class="w-full h-48 object-cover">
              <div class="p-6">
                <h3 class="text-xl font-bold mb-2">{{ item.name }}</h3>
                <p class="text-gray-600">{{ item.description }}</p>
                <div class="mt-4 flex justify-between items-center">
                  <span class="text-xl font-semibold">{{ item.price }}</span>
                  <a href="#" class="text-yellow-500 hover:text-yellow-600">Order Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <!-- Contact Section -->
      <section class="py-20 px-6 md:px-12 bg-white" id="contact">
        <div class="max-w-5xl mx-auto">
          <h2 class="text-4xl font-semibold mb-8 text-center">Contact Us</h2>
          <form @submit.prevent="submitForm" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <input type="text" v-model="form.name" placeholder="Your Name"
                class="py-3 px-4 border border-gray-300 rounded-lg w-full">
              <input type="email" v-model="form.email" placeholder="Your Email"
                class="py-3 px-4 border border-gray-300 rounded-lg w-full">
            </div>
            <textarea v-model="form.message" placeholder="Your Message"
              class="py-3 px-4 border border-gray-300 rounded-lg w-full"></textarea>
            <button type="submit"
              class="w-full py-3 bg-yellow-500 text-white font-semibold rounded-lg hover:bg-yellow-600">
              Send Message
            </button>
          </form>
        </div>
      </section>

      <!-- Footer -->
      <section class="py-10 bg-gray-900 sm:pt-16 lg:pt-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
          <div class="grid grid-cols-2 gap-x-5 gap-y-12 md:grid-cols-4 md:gap-x-12">
            <div>
              <p class="text-base text-gray-500">Company</p>

              <ul class="mt-8 space-y-4">
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    About </a>
                </li>
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    Features </a>
                </li>
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    Works </a>
                </li>
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    Career </a>
                </li>
              </ul>
            </div>

            <div>
              <p class="text-base text-gray-500">Help</p>

              <ul class="mt-8 space-y-4">
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    Customer Support </a>
                </li>
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    Delivery Details </a>
                </li>
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    Terms & Conditions </a>
                </li>
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    Privacy Policy </a>
                </li>
              </ul>
            </div>

            <div>
              <p class="text-base text-gray-500">Resources</p>

              <ul class="mt-8 space-y-4">
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    Free eBooks </a>
                </li>
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    Development Tutorial </a>
                </li>
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    How to - Blog </a>
                </li>
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    YouTube Playlist </a>
                </li>
              </ul>
            </div>

            <div>
              <p class="text-base text-gray-500">Extra Links</p>

              <ul class="mt-8 space-y-4">
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    Customer Support </a>
                </li>
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    Delivery Details </a>
                </li>
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    Terms & Conditions </a>
                </li>
                <li>
                  <a href="#" title=""
                    class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                    Privacy Policy </a>
                </li>
              </ul>
            </div>
          </div>

          <hr class="mt-16 mb-10 border-gray-800" />

          <div class="flex flex-wrap items-center justify-between">
            <img class="h-8 auto md:order-1" src="imgs/logo-white.png" alt="logo" />

            <ul class="flex items-center space-x-3 md:order-3">


              <li>
                <a href="#" title=""
                  class="flex items-center justify-center text-white transition-all duration-200 bg-transparent border border-gray-700 rounded-full w-7 h-7 focus:bg-blue-600 hover:bg-blue-600 hover:border-blue-600 focus:border-blue-600">
                  <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
                    </path>
                  </svg>
                </a>
              </li>

              <li>
                <a href="#" title=""
                  class="flex items-center justify-center text-white transition-all duration-200 bg-transparent border border-gray-700 rounded-full w-7 h-7 focus:bg-red-600 hover:bg-red-600 hover:border-red-600 focus:border-red-600">
                  <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                    </path>
                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                    <path
                      d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                    </path>
                  </svg>
                </a>
              </li>


            </ul>

            <p class="w-full mt-8 text-sm text-center text-gray-100 md:mt-0 md:w-auto md:order-2">© Copyright 2021, All
              Rights Reserved by Food@99</p>
          </div>
        </div>
      </section>
      <!-- Footer section end -->
    </div>
  </div>
</template>

<script>
import Navigation from "@/Layouts/Navigation.vue";
export default {
  components: {
    Navigation,
  },
  name: "HomeComponent",
  data() {
    return {
      
      items: [
        { id: 1, title: 'Biryani', imgSrc: 'https://b.zmtcdn.com/data/o2_assets/37df381734b24f138af4a84fd7e4d4ec1716558578.jpeg', link: '/chhindwara/delivery/dish-biryani' },
        { id: 2, title: 'Pizza', imgSrc: 'https://b.zmtcdn.com/data/o2_assets/d0bd7c9405ac87f6aa65e31fe55800941632716575.png', link: '/chhindwara/delivery/dish-pizza' },
        { id: 3, title: 'Chicken', imgSrc: 'https://b.zmtcdn.com/data/dish_images/197987b7ebcd1ee08f8c25ea4e77e20f1634731334.png', link: '/chhindwara/delivery/dish-chicken' },
        { id: 1, title: 'Burger', imgSrc: 'imgs/burger.jpg', link: '' },
        { id: 2, title: 'Chienese', imgSrc: 'imgs/chinese1.jpg', link: '/chhindwara/delivery/dish-pizza' },
        { id: 3, title: 'Pasta', imgSrc: 'imgs/pasta.jpg', link: '/chhindwara/delivery/dish-chicken' },
        { id: 1, title: 'Tacos', imgSrc: 'imgs/tacos.png', link: '/chhindwara/delivery/dish-biryani' },
        { id: 2, title: 'Maggie', imgSrc: 'imgs/maggie1.jpg', link: '/chhindwara/delivery/dish-pizza' },
        { id: 3, title: 'Drinks', imgSrc: 'imgs/drink.jpg', link: '/chhindwara/delivery/dish-chicken' },
      ],

      menuItems: [
        {
          id: 1,
          name: "Grilled Steak",
          description: "Juicy steak grilled to perfection with a side of vegetables.",
          price: "$25",
          image: "https://images.unsplash.com/photo-1559622213-fe5e7f3b0e41?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDE4fHxzdGVha3xlbnwwfHx8fDE2MjM4MDgzODg&ixlib=rb-1.2.1&q=80&w=1080"
        },
        {
          id: 2,
          name: "Pasta Carbonara",
          description: "Classic Italian pasta with a creamy sauce and pancetta.",
          price: "$18",
          image: "https://images.unsplash.com/photo-1523986371872-9d3ba2e2ca48?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDd8fHBhc3RhfGVufDB8fHx8MTYyMzgwODM4Nw&ixlib=rb-1.2.1&q=80&w=1080"
        },
        {
          id: 3,
          name: "Caesar Salad",
          description: "Crispy romaine lettuce with Caesar dressing, croutons, and parmesan.",
          price: "$12",
          image: "https://images.unsplash.com/photo-1512621776951-a57141f2eefd?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDl8fGNzYWxhZHxlbnwwfHx8fDE2MjM4MDgzODA&ixlib=rb-1.2.1&q=80&w=1080"
        }
      ],

     

      form: {
        name: '',
        email: '',
        message: ''
      }
    };
  },
  computed: {
   
  },
  methods: {
    submitForm() {
      alert(`Thank you for contacting us, ${this.form.name}!`);
      // Handle form submission (e.g., send data to a server)
    },
    scrollNext() {
      this.$refs.carousel.scrollBy({ left: 300, behavior: 'smooth' });
    },
    scrollPrev() {
      this.$refs.carousel.scrollBy({ left: -300, behavior: 'smooth' });
    },

   
  }
};
</script>
<style>
.max-w-7xl {
  max-width: 70rem;
}

#food {
  background-image: url("/imgs/food.png");
  background-repeat: no-repeat;
  background-size: cover;
}

/* Hide scrollbar */
.scrollbar-hide::-webkit-scrollbar {
  display: none;
}

.scrollbar-hide {
  -ms-overflow-style: none;
  /* Internet Explorer 10+ */
  scrollbar-width: none;
  /* Firefox */
}
</style>