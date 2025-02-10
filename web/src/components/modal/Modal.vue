<script setup>
import { X } from 'lucide-vue-next';
import { useModalStore } from '../../stores/modal';

const props = defineProps({
  name: String
});

const modalStore = useModalStore();
modalStore.create(props.name);

const close = () => {
  console.log(props.name)
  modalStore.close(props.name)
};
</script>

<template>
  <Teleport to="body">
    <div v-if="modalStore.modals[name]?.isOpen" class="fixed inset-0 bg-black/50 flex items-center justify-center">
      <div class="bg-zinc-50 m-2 rounded-lg shadow-lg relative min-w-[32rem] max-w-[64rem] min-h-[28rem] overflow-hidden">
        <button @click="close" class="cursor-pointer absolute top-4 right-4 text-gray-500 hover:text-gray-700">
          <X />
        </button>
        <slot />
      </div>
    </div>
  </Teleport>
</template>