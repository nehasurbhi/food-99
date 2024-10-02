<template>
  <div>
    <Navigation></Navigation>

    <!-- switch tab start -->
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-20">
      <div class="max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
        <!-- Tabs -->
        <div class="flex justify-center space-x-4 mb-8 flex-wrap">
          <button
            v-for="tab in tabs"
            :key="tab"
            @click="selectedTab = tab"
            :class="{
              'bg-yellow-500 text-white': selectedTab === tab,
              'bg-gray-800 text-white': selectedTab !== tab,
            }"
            class="px-4 py-2 rounded-lg transition"
          >
            {{ tab }}
          </button>
        </div>

        <!-- Items Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <div v-for="item in filteredItems" :key="item.id" class="bg-white shadow-md rounded-lg p-6">
            <img :src="item.image" alt="food image" class="w-full h-48 object-cover mb-4 rounded-lg" />
            <h3 class="text-xl font-semibold">{{ item.title }}</h3>
            <p class="text-sm text-gray-600">{{ item.description }}</p>
            <div class="flex justify-between items-center mt-4">
              <span class="text-lg font-bold">${{ item.price }}</span>
              <button class="bg-yellow-500 text-white px-4 py-2 rounded-lg">
                Add to Cart
              </button>
            </div>
          </div>
        </div>
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
  name: "Home",
  data() {
    return {
      selectedTab: 'All', // Default to "All" tab
      tabs: ['All', 'Special Foods', 'Mexican', 'Italian', 'Japanese', 'Drinks', 'Lunch', 'Sav'],
      foodItems: [
        {
          id: 1,
          category: 'Italian',
          title: 'Pasta',
          description: 'Pasta is a type of food made from an unleavened dough.',
          price: 35.0,
          image: 'pasta.jpg',
        },
        {
          id: 2,
          category: 'Italian',
          title: 'French Fries',
          description: 'A fried potato snack from an unleavened dough.',
          price: 55.0,
          image: 'french-fries.jpg',
        },
        {
          id: 3,
          category: 'Italian',
          title: 'Chicken Shawarma',
          description: 'Chicken shawarma in a wrap.',
          price: 35.0,
          image: 'shawarma.jpg',
        },
        {
          id: 4,
          category: 'Italian',
          title: 'Fish Curry',
          description: 'Fish curry made from fresh fish and curry spices.',
          price: 35.0,
          image: 'fish-curry.jpg',
        },
        // Sav Tab Item
        {
          id: 5,
          category: 'Sav',
          title: 'Sav Special',
          description: 'Sav’s special dish with unique spices and flavors.',
          price: 45.0,
          image: 'sav-special.jpg',
        },
        // Mexican Tab Item
        {
          id: 7,
          category: 'Mexican',
          title: 'Mexican Special',
          description: 'Mexican special dish with unique spices and flavors.',
          price: 45.0,
          image: 'mexican-special.jpg',
        },
        // Special Food Tab Item
        {
          id: 9,
          category: 'Special Foods',
          title: 'Special Foods Special',
          description: 'Special Foods special dish with unique spices and flavors.',
          price: 45.0,
          image: 'special-foods-special.jpg',
        },
        // Japanese Food Tab Item
        {
          id: 11,
          category: 'Japanese',
          title: 'Japanese Special',
          description: 'Japanese special dish with unique spices and flavors.',
          price: 45.0,
          image: 'japanese-special.jpg',
        },
        // Drinks Tab Item
        {
          id: 13,
          category: 'Drinks',
          title: 'Drinks Special',
          description: 'Refreshing drinks with unique flavors.',
          price: 20.0,
          image: 'drinks-special.jpg',
        },
        // Lunch Tab Item
        {
          id: 15,
          category: 'Lunch',
          title: 'Lunch Special',
          description: 'A healthy lunch with fresh ingredients.',
          price: 55.0,
          image: 'lunch-special.jpg',
        },
      ],
    };
  },
  computed: {
    filteredItems() {
      // If "All" is selected, return all items, otherwise filter by category
      if (this.selectedTab === 'All') {
        return this.foodItems;
      } else {
        return this.foodItems.filter((item) => item.category === this.selectedTab);
      }
    },
  },
};
</script>

<style scoped>
/* You can add any additional styles here */
.max-w-7xl {
  max-width: 70rem;
}
</style>
