<script setup lang="ts">
import { LucideProps } from 'lucide-vue-next';
import { FunctionalComponent } from 'vue';
import { useRouter } from 'vue-router';

type Props = {
  icon: FunctionalComponent<LucideProps, {}, any, {}>;
  title: string;
  label: string;
  to?: string,
  viewMorePosition: 'header' | 'footer' | 'hidden';
  width?: string,
  height?: string,
}

const props = defineProps<Props>();

const router = useRouter();

const handleViewMore = () => {
  if (!props.to) return;

  router.push(props.to);
}
</script>

<template>
  <div class="flex flex-col justify-between gap-4 min-w-fit w-[30%] bg-zinc-50 p-8 rounded-2xl"
    :style="{ width: props.width, height: props.height }">
    <header class="flex justify-between">
      <div :class="`flex ${props.to ? 'flex-col gap-2' : 'flex-row w-full justify-between'}`">
        <span class="flex items-center gap-2">
          <div class="flex justify-center items-center bg-zinc-200/40 p-2 rounded-2xl">
            <component :is="props.icon" class="text-zinc-700"/>
          </div>
          <h3 class="font-ubuntu font-medium text-zinc-800 text-2xl tracking-tight">{{ props.title }}</h3>
        </span>
        <p :class="`font-inter ${props.to ? 'text-xs' : 'text-sm'} font-medium text-zinc-400`">{{ props.label }}</p>
      </div>
      <button v-if="props.viewMorePosition === 'header'" @onclick="handleViewMore"
        class="cursor-pointer bg-transparent border-2 border-zinc-300 h-10 py-2 px-4 rounded-md font-inter font-medium text-sm">View
        More</button>
    </header>
    <slot />
    <footer v-if="props.viewMorePosition === 'footer'" class="w-full">
      <button @onclick="handleViewMore"
        class="cursor-pointer bg-zinc-200/30 backdrop-blur-2xl hover: w-full h-10 py-2 px-4 rounded-md font-inter font-medium text-sm">View
        More</button>
    </footer>
  </div>
</template>
