<template>
    <fwb-navbar class="bg-gray-100">
      <template #default="{ isShowMenu }">
        <fwb-navbar-collapse :is-show-menu="isShowMenu">
          <Link href="/">Users View</Link>
          <Link href="/">Protectors View</Link>        
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