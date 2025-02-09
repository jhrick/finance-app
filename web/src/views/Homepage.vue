<script setup>
import { onMounted } from 'vue';
import TestimonialCard from '../components/TestimonialCard.vue';
import { ArrowRight, Bot, ChartNoAxesCombined, CircleCheck, HandCoins, ShieldPlus } from 'lucide-vue-next';

const scrollAmount = 200;

const testimonials = [
  {
    name: "Alex Smith",
    image: "https://randomuser.me/api/portraits/men/32.jpg",
    rating: 5,
    message: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere tenetur possimus laborum facilis blanditiis consequuntur magnam cumque quae quam amet sed repudiandae explicabo veritatis incidunt, saepe impedit nobis voluptates placeat.",
    date: "15:06 PM · Apr 12, 2023"
  },
  {
    name: "Anna Mosby",
    image: "https://randomuser.me/api/portraits/women/44.jpg",
    rating: 5,
    message: "Excellent CRM system for business, sales grew very quickly.",
    date: "15:06 PM · Apr 12, 2023"
  },
  {
    name: "Cara Sort",
    image: "https://randomuser.me/api/portraits/women/22.jpg",
    rating: 5,
    message: "Now I use only this system. Excellent communication with the customer base.",
    date: "09:06 AM · Mar 12, 2023"
  },
  {
    name: "Sam Wither",
    image: "https://randomuser.me/api/portraits/men/55.jpg",
    rating: 4,
    message: "This CRM system is just a godsend. Bought a business plan.",
    date: "12:35 AM · May 12, 2023"
  },
  {
    name: "Alex Smith",
    image: "https://randomuser.me/api/portraits/men/31.jpg",
    rating: 5,
    message: "Lorem ipsum dolor sit amet consectetur adipisicing elit, saepe impedit nobis voluptates placeat.",
    date: "15:06 PM · Apr 12, 2023"
  },
  {
    name: "Alex Smith",
    image: "https://randomuser.me/api/portraits/men/38.jpg",
    rating: 5,
    message: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere tenetur possimus laborum facilis blanditiis consequuntur magnam cumque quae quam amet sed repudiandae explicabo veritatis incidunt.",
    date: "15:06 PM · Apr 12, 2023"
  },
  {
    name: "Anna Mosby",
    image: "https://randomuser.me/api/portraits/women/42.jpg",
    rating: 5,
    message: "Excellent CRM system for business, sales grew very quickly.",
    date: "15:06 PM · Apr 12, 2023"
  },
  {
    name: "Cara Sort",
    image: "https://randomuser.me/api/portraits/women/20.jpg",
    rating: 5,
    message: "Now I use only this system. Excellent communication with the customer base.",
    date: "09:06 AM · Mar 12, 2023"
  },
  {
    name: "Alex Smith",
    image: "https://randomuser.me/api/portraits/men/32.jpg",
    rating: 5,
    message: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere tenetur possimus laborum facilis blanditiis consequuntur magnam cumque quae quam amet sed repudiandae explicabo veritatis incidunt, saepe impedit nobis voluptates placeat.",
    date: "15:06 PM · Apr 12, 2023"
  },
  {
    name: "Anna Mosby",
    image: "https://randomuser.me/api/portraits/women/49.jpg",
    rating: 5,
    message: "Excellent CRM system for business, sales grew very quickly.",
    date: "15:06 PM · Apr 12, 2023"
  },
  {
    name: "Cara Sort",
    image: "https://randomuser.me/api/portraits/women/25.jpg",
    rating: 5,
    message: "Now I use only this system. Excellent communication with the customer base.",
    date: "09:06 AM · Mar 12, 2023"
  },
  {
    name: "Sam Wither",
    image: "https://randomuser.me/api/portraits/men/54.jpg",
    rating: 4,
    message: "This CRM system is just a godsend. Bought a business plan.",
    date: "12:35 AM · May 12, 2023"
  },
  {
    name: "Alex Smith",
    image: "https://randomuser.me/api/portraits/men/34.jpg",
    rating: 5,
    message: "Lorem ipsum dolor sit amet consectetur adipisicing elit, saepe impedit nobis voluptates placeat.",
    date: "15:06 PM · Apr 12, 2023"
  },
  {
    name: "Alex Smith",
    image: "https://randomuser.me/api/portraits/men/39.jpg",
    rating: 5,
    message: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere tenetur possimus laborum facilis blanditiis consequuntur magnam cumque quae quam amet sed repudiandae explicabo veritatis incidunt.",
    date: "15:06 PM · Apr 12, 2023"
  },
  {
    name: "Anna Mosby",
    image: "https://randomuser.me/api/portraits/women/52.jpg",
    rating: 5,
    message: "Excellent CRM system for business, sales grew very quickly.",
    date: "15:06 PM · Apr 12, 2023"
  },
  {
    name: "Cara Sort",
    image: "https://randomuser.me/api/portraits/women/10.jpg",
    rating: 5,
    message: "Now I use only this system. Excellent communication with the customer base.",
    date: "09:06 AM · Mar 12, 2023"
  },
];

const autoScroll = () => {
  const container = document.getElementById('testimonialsContainer');
  let direction = 1;

  setInterval(() => {
    if (container) {
      container.scrollBy({ left: scrollAmount * direction, behavior: "smooth" });

      if (container.scrollLeft + container.clientWidth >= container.scrollWidth) {
        direction = -1;
      } else if (container.scrollLeft >= 0) {
        direction = 1;
      }
    }
  }, 3000);
}

onMounted(() => {
  autoScroll();
})
</script>

<template>
  <div id="app" class="flex flex-col min-h-screen">
    <div class="flex justify-center">
      <div class="flex flex-col p-4 my-24">
        <h1 class="font-nunito-sans leading-[4.5rem] font-extrabold text-zinc-800 text-[88px] mb-4 break-normal w-[540px]">
          Take Control of Your Finances, Effortlessly
        </h1>
        <p class="text-zinc-600">Finance made simple. Wealth made smarter.</p>
        <div class="flex gap-8 my-4">
          <button
            class="bg-zinc-800 hover:bg-zinc-800/80 text-white font-semibold rounded-full cursor-pointer px-8 py-4">Get
            Started</button>
          <button class="hover:tracking-wide underline cursor-pointer">Our Features</button>
        </div>
      </div>
      <div>
        <img class="w-[600px] rounded-4xl" src="../assets/hero-section.jpeg" alt="hero section image">
      </div>
    </div>
    <div class="flex flex-col 2xl:flex-row justify-center bg-zinc-50 p-24">
      <div class="flex-[0_0_40%] m-12 p-12 mt-0 pt-0 max-w-[580px]">
        <h2 class="font-nunito-sans leading-[4.5rem] font-bold text-zinc-800 text-[64px] mt-12 mb-4 w-auto 2xl:w-[460px]">Key
          Features & Benefits</h2>
        <p class="text-zinc-600 text-lg mb-12">Unlock Your Financial Potential with Smart, Easy-to-Use Tools</p>
        <button
          class="font-nunito-sans font-semibold text-sm border-2 border-zinc-200 shadow-lg rounded-lg px-6 py-3 cursor-pointer hover:scale-[110%] transition-all duration-200">
          Try out
        </button>
      </div>
      <ul class="flex-[0_0_30%] grid grid-cols-2 grid-rows-2 gap-8">
        <li class="flex flex-col gap-y-2 bg-zinc-100/50 p-8 rounded-xl">
          <span class="mb-8">
            <ChartNoAxesCombined class="text-sky-600 size-10" />
          </span>
          <h3 class="text-slate-800 text-xl font-semibold">Expense Tracking</h3>
          <p class="text-zinc-600 text-lg">Stay on top of you spending with real-time insights.</p>
        </li>
        <li class="flex flex-col gap-y-2 bg-zinc-100/50 p-8 rounded-xl">
          <span class="mb-8">
            <Bot class="text-sky-600 size-10" />
          </span>
          <h3 class="text-slate-800 text-xl font-semibold">Automated Budgeting</h3>
          <p class="text-zinc-600 text-lg">Let AI help you save smarter, not harder.</p>
        </li>
        <li class="flex flex-col gap-y-2 bg-zinc-100/50 p-8 rounded-xl">
          <span class="mb-8">
            <HandCoins class="text-sky-600 size-10" />
          </span>
          <h3 class="text-slate-800 text-xl font-semibold">Investment Management</h3>
          <p class="text-zinc-600 text-lg">Grow your wealth with smart investment tools.</p>
        </li>
        <li class="flex flex-col gap-y-2 bg-zinc-100/50 p-8 rounded-xl">
          <span class="mb-8">
            <ShieldPlus class="text-sky-600 size-10" />
          </span>
          <h3 class="text-slate-800 text-xl font-semibold">Secury & Privacy</h3>
          <p class="text-zinc-600 text-lg">Your data is encrypted and protected at all times.</p>
        </li>
      </ul>
    </div>
    <div class="flex flex-col 2xl:flex-row justify-center px-24">
      <div class="flex-[0_0_40%] flex flex-col gap-y-12 m-12 p-12 pb-0 max-w-[580px]">
        <div class="w-full">
          <h2 class="font-nunito-sans leading-[4.5rem] font-bold text-zinc-800 text-[64px] mb-4">Why
            choose us?</h2>
          <p class="text-zinc-600 text-lg">Smarter Finance, Better Decisions, Seamless Experience</p>
        </div>
        <ul class="w-full flex flex-col gap-y-4">
          <li class="flex items-center gap-x-2">
            <span>
              <CircleCheck class="text-emerald-600 w-[34px] h-[34px]" />
            </span>
            <p class="text-lg">All-in-one Financial Dashboard</p>
          </li>
          <li class="flex items-center gap-x-2">
            <span>
              <CircleCheck class="text-emerald-600 w-[34px] h-[34px]" />
            </span>
            <p class="text-lg">AI-driven Insights for Better Decision-Making</p>
          </li>
          <li class="flex items-center gap-x-2">
            <span>
              <CircleCheck class="text-emerald-600 w-[34px] h-[34px]" />
            </span>
            <p class="text-lg">Seamless Integration with You Bank Accounts</p>
          </li>
        </ul>
      </div>
      <div class="hidden flex-[0_0_30%] 2xl:flex justify-center w-full min-h-[620px] max-h-[620px] py-10 pr-8">
        <img class="object-cover w-full h-full rounded-4xl" src="../assets/why-choose-us.jpeg" alt="why choose us banner">
      </div>
    </div>
    <div class="flex gap-12 bg-zinc-100 p-24">
      <div class="flex-[0_0_30%] bg-white rounded-4xl p-16">
        <h2 class="font-nunito-sans leading-[4.5rem] font-medium text-zinc-800 text-[64px] mb-8">What Our Client Say</h2>
        <ArrowRight class="text-sky-600 size-20" />
      </div>
      <div id="testimonialsContainer"
        class="flex-[0_0_70%] flex flex-col flex-wrap gap-4 rounded-lg max-h-[480px] overflow-y-scroll [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
        <TestimonialCard v-for="(testimonial, index) in testimonials" :key="index" :data="testimonial">
        </TestimonialCard>
      </div>
    </div>
  </div>
</template>