<script setup>
  const notifications = []
</script>

<template>
  <div>
    <div v-if="notifications.length === 0" class="relative">
      <img src="../../../../../assets/empty-notification.png" alt="empty notification illustration"
        class="object-cover w-full pr-8">
    </div>
    <div v-else>
      {{ notifications }}
    </div>
  </div>
</template>