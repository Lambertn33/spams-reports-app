<template>
    <fwb-navbar class="bg-gray-100">
      <template #default="{ isShowMenu }">
        <fwb-navbar-collapse :is-show-menu="isShowMenu">
          <Link href="/users/reports">Users View</Link>
          <Link href="/protectors/reports">Protectors View</Link>        
        </fwb-navbar-collapse>
      </template>
    </fwb-navbar>
  </template>
    
    <script setup>
  import {
    FwbNavbar,
    FwbNavbarCollapse,
    FwbNavbarLink,
    FwbNavbarLogo,
  } from "flowbite-vue";
  import { Link } from '@inertiajs/vue3'
  </script>