<template>
  <div class="inline-flex text-base h-10">
    <Link
      v-for="(link, index) in links"
      :key="index"
      :href="link.url"
      class="flex items-center justify-center leading-tight border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white px-4 h-10"
      :class="renderLinkClass(link)"
    >
      <span v-html="link.label"></span>
    </Link>
  </div>
</template>
    
    <script setup>
import { Link } from "@inertiajs/vue3";
import { computed } from "vue";

defineProps({
  links: Array,
});

const renderLinkClass = computed(() => {
  return (link) => (link.active ? "bg-[#1a56db] text-white" : "");
});
</script>