<template>
    <nav class="bg-gray-800 p-4 w-full fixed top-0 left-0 z-50">
      <div class="container mx-auto flex justify-between items-center">
        <!-- Brand -->
        <a href="####" class="text-white text-lg font-bold">
          MyApp
        </a>
        <!-- Navigation Links -->
        <div>
          <a href="#" class="text-gray-300 hover:text-white px-3">Home</a>
          <a href="##" class="text-gray-300 hover:text-white px-3">About</a>
          <a href="###" class="text-gray-300 hover:text-white px-3">Contact</a>
        </div>
      </div>
    </nav>
  </template>
  
  <script>
  export default {
    name: 'Navbar',
    mounted(){
        console.log("Navbar loaded!");
    }
  };
  </script>
  
  <style scoped>
  /* Optional padding for body to prevent content from hiding under navbar */
  body {
    padding-top: 64px; 
    border: 1px solid black;
  }
  </style>
  