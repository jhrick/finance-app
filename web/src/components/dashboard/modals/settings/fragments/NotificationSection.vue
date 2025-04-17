<script setup>
const notifications = []
</script>

<template>
  <div>
    <div v-if="notifications.length === 0" class="flex flex-col items-center">
      <img src="../../../../../assets/empty-notification.png" alt="empty notification illustration"
        class="object-cover w-full pr-8">
        <h1 class="font-inter font-medium text-lg text-gray-700">No yet notifications</h1>
    </div>
    <div v-else>
      {{ notifications }}
    </div>
  </div>
</template>