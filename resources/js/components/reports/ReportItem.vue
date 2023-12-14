<template>
  <div
    class="grid grid-cols-1 md:grid-cols-3 items-center gap-8 justify-between"
  >
    <ReportState :id="report.id" :state="report.state" />
    <ReportType :message="report.message" :type="report.reportType" />

    <div class="flex items-start gap-2">
      <fwb-button color="default" size="sm">Block</fwb-button>
      <fwb-button color="default" outline size="sm"
        >Resolve</fwb-button
      >
    </div>
  </div>
  <hr class="my-4" />
</template>
  <script setup>
import { FwbButton } from "flowbite-vue";

import ReportType from "./ReportType.vue";
import ReportState from "./ReportState.vue";

const props = defineProps({
  report: Object,
});
</script>