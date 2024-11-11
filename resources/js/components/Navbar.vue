<template>
    <nav class="navbar-style">
      <div class="container mx-auto flex justify-between items-center">
        <!-- Brand -->
        <p class="navbar_text">
          Audio
        </p>
        <!-- Navigation Links -->
        <div>
          <a href="#" class="link-style">Discover</a>
          <a href="#" class="link-style">About</a>
          <a href="#" class="link-style">Contact</a>
        </div>
        <p class="navbar_text">
          NOTHING Inc.
        </p>
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
  }
  </style>
  