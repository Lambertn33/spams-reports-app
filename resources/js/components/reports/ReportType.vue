<template>
    <div class="flex flex-col items-start">
      <span class="flex gap-2"
        >Type:
        <fwb-badge :type="renderReportTypeBadge(type)">{{
          type
        }}</fwb-badge>
      </span>
      <span
        >Message: <b>{{ message ?? "---" }}</b>
      </span>
    </div>
  </template>
  
  <script setup>
  import { FwbBadge } from "flowbite-vue";
  import { computed } from "vue";
  
  import { constants } from "../../constants";
  
  defineProps({
    type: String,
    message: String,
  });
  
  const renderReportTypeBadge = computed(() => {
    return (type) => {
      if (type === constants.SPAM) return "red";
      if (type === constants.INFRINGES_PROPERTY) return "yellow";
      if (type === constants.VIOLATES_POLICIES) return "indigo";
    };
  });
  </script>