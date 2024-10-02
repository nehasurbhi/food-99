<template>
    <div>
      <!-- Fixed Transparent Navbar -->
      <nav class="fixed top-0 left-0 w-full  bg-black/50  z-50">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
          <!-- Brand Logo -->
          <a href="#" class="text-white font-bold text-lg">
            <img src="imgs/logo-no-background.png" alt="" height="70px" width="70px">
          </a>
  
          <!-- Navigation Links -->
          <div class="hidden md:flex space-x-6">
            <a href="#home" class="text-white hover:text-gray-300">Home</a>
            <a href="#about" class="text-white hover:text-gray-300">About</a>
            <a href="#services" class="text-white hover:text-gray-300">Services</a>
            <a href="#contact" class="text-white hover:text-gray-300">Contact</a>
          </div>
  
          <!-- Mobile Menu Button -->
          <button @click="toggleMenu" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
  
        <!-- Mobile Menu -->
        <div v-if="menuOpen" class="md:hidden bg-gray-900 bg-opacity-75 text-white">
          <a href="#home" class="block py-2 px-4">Home</a>
          <a href="#about" class="block py-2 px-4">About</a>
          <a href="#services" class="block py-2 px-4">Services</a>
          <a href="#contact" class="block py-2 px-4">Contact</a>
        </div>
      </nav>
  
      <!-- Page Content -->
     
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        menuOpen: false,
      };
    },
    methods: {
      toggleMenu() {
        this.menuOpen = !this.menuOpen;
      },
    },
  };
  </script>
  