<script setup>
import { Github, Linkedin } from "lucide-vue-next";
import AppIcon from "../components/AppIcon.vue";
</script>

<template>
  <header class="font-ubuntu flex justify-between p-4">
    <div class="flex items-center">
      <AppIcon className="size-16 fill-cyan-700"/>
      <h3 class="font-nunito-sans text-zinc-800 text-4xl font-semibold">FinanceApp</h3>
    </div>
    <div class="flex gap-x-8 items-center">
      <a href="<?php echo Yii::app()->createUrl('/site/index'); ?>"
        class="uppercase text-zinc-800 cursor-pointer">Home</a>
      <a href="<?php echo Yii::app()->createUrl('/site/page&view=about'); ?>"
        class="uppercase text-zinc-800 cursor-pointer">About</a>
      <a href="<?php echo Yii::app()->createUrl('/site/contact'); ?>"
        class="uppercase text-zinc-800 cursor-pointer">Contact</a>
    </div>
    <div class="flex">
      <button class="bg-sky-500 hover:bg-sky-500/80 cursor-pointer text-white text-lg font-medium rounded-full px-8">
        <a href="<?php echo Yii::app()->createUrl('/site/login'); ?>">Login</a>
      </button>
    </div>
  </header>

  <main class="flex-grow">
    <slot></slot>
  </main>

  <footer class="flex flex-col gap-y-4 bg-stone-950 p-8">
    <div class="flex flex-wrap justify-between mx-24 mt-4 p-4">
      <div class="flex flex-col gap-4 mr-12 mb-12">
        <div class="flex items-center ml-[-12px]">
          <AppIcon className="size-16 fill-zinc-300"/>
          <h3 class="font-nunito-sans text-zinc-200 text-4xl font-semibold">FinanceApp</h3>
        </div>
        <p class="text-zinc-200 text-lg w-72">Our solutions make production faster and cheaper. Contact us for more
          information.
        </p>
      </div>
      <ul class="flex flex-wrap gap-16">
        <ul class="flex flex-col gap-2">
          <h4 class="text-xl text-zinc-100 pb-4">About</h4>
          <li class="text-lg text-zinc-300">Our Story</li>
          <li class="text-lg text-zinc-300">Careers</li>
          <li class="text-lg text-zinc-300">Blog</li>
          <li class="text-lg text-zinc-300">Contact us</li>
        </ul>
        <ul class="flex flex-col gap-2">
          <h4 class="text-xl text-zinc-100 pb-4">Products</h4>
          <li class="text-lg text-zinc-300">Personal Accounts</li>
          <li class="text-lg text-zinc-300">Business Accounts</li>
          <li class="text-lg text-zinc-300">Payment Solutions</li>
          <li class="text-lg text-zinc-300">Free test</li>
        </ul>
        <ul class="flex flex-col gap-2">
          <h4 class="text-xl text-zinc-100 pb-4">Resourses</h4>
          <li class="text-lg text-zinc-300">Help Center</li>
          <li class="text-lg text-zinc-300">API Documentation</li>
          <li class="text-lg text-zinc-300">Community</li>
          <li class="text-lg text-zinc-300">Paterns</li>
        </ul>
        <ul class="flex flex-col gap-2">
          <h4 class="text-xl text-zinc-100 pb-4">Support</h4>
          <li class="text-lg text-zinc-300">Customer Support</li>
          <li class="text-lg text-zinc-300">FAQ</li>
          <li class="text-lg text-zinc-300">Report a Problem</li>
          <li class="text-lg text-zinc-300">Security & Privacy</li>
        </ul>
        <li class="flex flex-col gap-2">
          <h4 class="text-xl text-zinc-100 pb-4">Get in Touch</h4>
          <a class="text-zinc-200 text-lg underline pb-2" href="mailto:hj.rickcp@gmail.com">hj.rickcp@gmail.com</a>
          <div class="flex gap-4">
            <a class="bg-zinc-400/20 p-2 rounded-xl" href="https://github.com/jhrick/">
              <Github class="text-zinc-100 size-6" />
            </a>
            <a class="bg-zinc-400/20 p-2 rounded-xl" href="https://www.linkedin.com/in/jorge-henrique-2200b424b/">
              <Linkedin class="text-zinc-100 size-6" />
            </a>
          </div>
        </li>
      </ul>
    </div>
    <div class="border-b-2 border-stone-800 mx-24 my-8"></div>
    <div class="flex justify-evenly pb-8">
      <p class="text-zinc-500">
        &copy; 2025 by jhrick. All Rights Reserved.
      </p>
      <div class="flex gap-12">
        <p class="text-zinc-400">Terms</p>
        <p class="text-zinc-400">Privacy</p>
      </div>
    </div>
  </footer>
</template>