<template>
  <div>
    <Navbar />
    <div class="flex flex-col items-center justify-center h-full overflow-y-auto">
      <div class="w-4/5" v-if="hasSuccess">
        <fwb-alert closable icon type="success"> {{ hasSuccess }} </fwb-alert>
      </div>
      <slot></slot>
    </div>
  </div>
</template>

<script setup>
import { FwbAlert } from "flowbite-vue";
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";

import Navbar from "./Navbar.vue";

const page = usePage();
const hasSuccess = computed(() => page.props.flash.success);
</script>