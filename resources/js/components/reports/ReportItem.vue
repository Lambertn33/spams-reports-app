<template>
  <div
    class="grid grid-cols-1  items-center gap-8 justify-between"
    :class="canViewActions ? 'md:grid-cols-3' : 'md:grid-cols-2'"
  >
    <ReportState :id="report.id" :state="report.state" />
    <ReportType :message="report.message" :type="report.reportType" />

    <div class="flex items-start gap-2" v-if="canViewActions">
      <form @submit.prevent="handleChangeState">
        <fwb-button :disabled="report.isBlocked" type="submit" color="default" size="sm">{{ report.isBlocked ? "Blocked" : "Block" }}</fwb-button>
      </form>
      <form @submit.prevent="handleResolve">
        <fwb-button type="submit" color="default" outline size="sm"
          >Resolve</fwb-button
        >
      </form>
    </div>
  </div>
  <hr class="my-4" />
</template>
  <script setup>
import { useForm } from "@inertiajs/vue3";
import { FwbButton } from "flowbite-vue";

import ReportType from "./ReportType.vue";
import ReportState from "./ReportState.vue";

const props = defineProps({
  report: Object,
  canViewActions: Boolean,
});

const stateForm = useForm({
  _method: "put",
  type: "stateForm",
});

const resolveForm = useForm({
  _method: "put",
  type: "resolveForm",
});

const handleChangeState = () => {
  stateForm.post(`/protectors/reports/${props.report.id}`, {
    type: stateForm.type,
  });
};

const handleResolve = () => {
  resolveForm.post(`/protectors/reports/${props.report.id}`, {
    type: resolveForm.type,
  });
};
</script>