<script setup lang="ts">
import Nav from './components/Nav.vue'
import Footer from './components/Footer.vue'

// TODO: google analytics goes here now
</script>

<template>
  <Nav />
  <router-view />
  <div class="container">
    <Footer />
  </div>
</template>
