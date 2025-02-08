<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<div id="app" class="flex flex-col min-h-screen">
	<div class="flex justify-center">
		<div class="flex flex-col p-4 my-24">
			<h1 class="nunito-sans leading-[4.5rem] font-extrabold text-zinc-800 text-[88px] mb-4 break-normal w-[540px]">
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
			<img class="w-[600px]" src="/images/money.svg" alt="money image">
		</div>
	</div>
	<div class="flex justify-center bg-zinc-50 p-24">
		<div class="flex-[0_0_40%] m-12 p-12 mt-0 pt-0 max-w-[580px]">
			<h2 class="nunito-sans leading-[4.5rem] font-bold text-zinc-800 text-[64px] mb-4 w-auto 2xl:w-[460px]">Key
				Features & Benefits</h2>
			<p class="text-zinc-600 text-lg">Unlock Your Financial Potential with Smart, Easy-to-Use Tools</p>
		</div>
		<ul class="flex-[0_0_45%] grid grid-cols-2 grid-rows-2 gap-8">
			<li class="flex flex-col gap-y-2 pb-8 border-dotted border-b-3 border-zinc-200">
				<div class="flex items-center gap-2">
					<span class="rounded-lg bg-zinc-200/70 p-3">
						<i data-lucide="chart-no-axes-combined" class="text-sky-600 size-10"></i>
					</span>
					<h3 class="text-slate-800 text-xl font-semibold">Expense Tracking</h3>
				</div>
				<p class="text-zinc-600 text-lg">Stay on top of you spending with real-time insights.</p>
			</li>
			<li class="flex flex-col gap-y-2 pb-8 border-dotted border-b-3 border-zinc-200">
				<div class="flex items-center gap-2">
					<span class="rounded-lg bg-zinc-200/70 p-3">
						<i data-lucide="bot" class="text-sky-600 size-10"></i>
					</span>
					<h3 class="text-slate-800 text-xl font-semibold">Automated Budgeting</h3>
				</div>
				<p class="text-zinc-600 text-lg">Let AI help you save smarter, not harder.</p>
			</li>
			<li class="flex flex-col gap-y-2 pb-8">
				<div class="flex items-center gap-2">
					<span class="rounded-lg bg-zinc-200/70 p-3">
						<i data-lucide="hand-coins" class="text-sky-600 size-10"></i>
					</span>
					<h3 class="text-slate-800 text-xl font-semibold">Investment Management</h3>
				</div>
				<p class="text-zinc-600 text-lg">Grow your wealth with smart investment tools.</p>
			</li>
			<li class="flex flex-col gap-y-2 pb-8">
				<div class="flex items-center gap-2">
					<span class="rounded-lg bg-zinc-200/70 p-3">
						<i data-lucide="shield-plus" class="text-sky-600 size-10"></i>
					</span>
					<h3 class="text-slate-800 text-xl font-semibold">Secury & Privacy</h3>
				</div>
				<p class="text-zinc-600 text-lg">Your data is encrypted and protected at all times.</p>
			</li>
		</ul>
	</div>
	<div class="flex justify-center px-24">
		<div class="flex-[0_0_40%] flex flex-col gap-y-12 m-12 p-12 pb-0 max-w-[580px]">
			<div class="w-full">
				<h2 class="nunito-sans leading-[4.5rem] font-bold text-zinc-800 text-[64px] mb-4">Why
					choose us?</h2>
				<p class="text-zinc-600 text-lg">Smarter Finance, Better Decisions, Seamless Experience</p>
			</div>
			<ul class="w-full flex flex-col gap-y-4">
				<li class="flex items-center gap-x-2">
					<span>
						<i data-lucide="circle-check" class="text-emerald-600 w-[34px] h-[34px]"></i>
					</span>
					<p class="text-lg">All-in-one Financial Dashboard</p>
				</li>
				<li class="flex items-center gap-x-2">
					<span>
						<i data-lucide="circle-check" class="text-emerald-600 w-[34px] h-[34px]"></i>
					</span>
					<p class="text-lg">AI-driven Insights for Better Decision-Making</p>
				</li>
				<li class="flex items-center gap-x-2">
					<span>
						<i data-lucide="circle-check" class="text-emerald-600 w-[34px] h-[34px]"></i>
					</span>
					<p class="text-lg">Seamless Integration with You Bank Accounts</p>
				</li>
			</ul>
		</div>
		<div class="flex-[0_0_45%] flex justify-center w-full min-h-[620px] max-h-[620px] py-10 pr-8">
			<img class="w-full h-full object-cover rounded-4xl" src="/images/why-choose-us_banner.webp"
				alt="why choose us banner">
		</div>
	</div>
	<div class="flex gap-12 bg-zinc-100 p-24">
		<div class="flex-[0_0_30%] bg-white rounded-4xl p-16">
			<h2 class="nunito-sans leading-[4.5rem] font-medium text-zinc-800 text-[64px] mb-8">What Our Client Say</h2>
			<i data-lucide="arrow-right" class="text-sky-600 size-20"></i>
		</div>
		<div ref="testimonials"
			class="flex-[0_0_70%] flex flex-col flex-wrap gap-4 rounded-lg max-h-[480px] overflow-y-scroll [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
			<testimonial-card v-for="(testimonial, index) in testimonials" :key="index" :testimonial="testimonial">
			</testimonial-card>
		</div>
	</div>
</div>

<script>
	Vue.component('testimonial-card', {
		props: ['testimonial'],
		template: `
								<div class="bg-white rounded-lg p-6 shadow-lg min-w-[380px] max-w-[380px] flex-grow">
										<div class="flex items-center mb-4">
												<img :src="testimonial.image" class="w-12 h-12 rounded-full mr-3 object-cover">
												<div>
														<h3 class="font-semibold">{{ testimonial.name }}</h3>
														<div class="flex">
																<i v-for="star in 5" 
																	 :key="star" 
																	 class="w-5 h-5 text-yellow-500" 
																	 :class="{'text-gray-300': star > testimonial.rating}"
																	 data-lucide="star" fill="orange" stroke-width="0"></i>
														</div>
												</div>
										</div>
										<p class="text-gray-700 text-lg mb-4">{{ testimonial.message }}</p>
										<span class="text-gray-500 text-xs">{{ testimonial.date }}</span>
								</div>
						`
	});

	new Vue({
		el: '#app',
		data: {
			testimonials: [
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
			],
			scrollAmount: 200
		},
		mounted() {
			this.startAutoScroll();
		},
		methods: {
			startAutoScroll() {
				const container = this.$refs.testimonials;
				let direction = 1;

				setInterval(() => {
					if (container) {
						container.scrollBy({ left: this.scrollAmount * direction, behavior: "smooth" });

						if (container.scrollLeft + container.clientWidth >= container.scrollWidth) {
							direction = -1;
						} else if (container.scrollLeft >= 0) {
							direction = 1;
						}
					}
				}, 3000);
			}
		}
	});
</script>