<template>
    <div class="flex justify-center flex-col gap-2">
      <span
        >Id: <b>{{ id }}</b></span
      >
      <span class="flex gap-2"
        >State:
        <fwb-badge :type="renderReportStateBadge(state)">{{
          state
        }}</fwb-badge></span
      >
    </div>
  </template>
  
  <script setup>
  import { FwbBadge } from "flowbite-vue";
  import { computed } from "vue";
  
  import { constants } from "../../constants";
  
  defineProps({
    id: String,
    state: String,
  });
  
  const renderReportStateBadge = computed(() => {
    return (state) => (state === constants.OPEN ? "red" : "green");
  });
  </script>