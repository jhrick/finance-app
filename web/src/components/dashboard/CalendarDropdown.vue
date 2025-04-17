<script setup lang="ts">
import { ref } from "vue";
import DatePicker from "primevue/datepicker";

const date = ref<Date>(new Date());
</script>

<template>
  <DatePicker class="font-inter font-medium h-8" showIcon :fluid="true" iconDisplay="input" v-model="date" showButtonBar/>
</template>