<template>
    <div class="w-full md:w-4/5 gap-4 flex flex-col overflow-y-auto">
      <span class="text-3xl font-semibold">Protectors spam reports view</span>
      <div
        class="block bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 p-6"
      >
        <div v-for="report in spamReports.data" :key="report.id">
          <ReportItem :report="report" :canViewActions="true"/>
        </div>
        <div class="flex justify-end" v-if="spamReports.data.length">
          <Pagination :links="spamReports.links" />
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import ReportItem from "../../components/reports/ReportItem.vue";
  import Pagination from "../../components/Pagination.vue";
  
  defineProps({
    spamReports: Object,
  });
  </script>