<template>
  <div>
    <Navbar />
    <div
      class="flex flex-col items-center justify-center h-full overflow-y-auto"
    >
      <slot></slot>
    </div>
  </div>
</template>
  
  <script setup>
import Navbar from "./Navbar.vue";
</script>