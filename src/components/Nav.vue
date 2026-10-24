<script setup lang="ts">
import { ref } from 'vue'

const isMenuOpen = ref(false)

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value
}

const closeMenu = () => {
  isMenuOpen.value = false
}
</script>

<template>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button
        type="button"
        class="navbar-toggle"
        :class="{ collapsed: !isMenuOpen }"
        aria-expanded="false"
        aria-controls="navbar"
        @click="toggleMenu"
      >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <router-link class="navbar-brand main-logo" to="/" @click="closeMenu">Jonathan <span class="red">Torres</span></router-link>
    </div>
    <div
      id="navbar"
      class="navbar-collapse"
      :class="{ collapse: !isMenuOpen, in: isMenuOpen }"
    >
      <ul class="nav navbar-nav pull-right">
        <li>
          <router-link to="/resume" @click="closeMenu">Resume</router-link>
          <div class="marker">
            <div class="prog"></div>
          </div>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
</template>
