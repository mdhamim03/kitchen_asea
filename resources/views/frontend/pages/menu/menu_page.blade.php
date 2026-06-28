@extends('frontend.templates.frontend_master')
@section('page_title', 'Review')

@section('main_content')

    <!-- PAGE WRAPPER -->
    <div class="mx-auto max-w-7xl px-4 py-8 lg:px-8">
        <div class="flex gap-6">

            <!-- ═══ LEFT: STICKY FILTER SIDEBAR ═══ -->
            <aside id="sidebar" class="hidden lg:block w-64 shrink-0">
                <div
                    class="sticky top-4 rounded-2xl bg-white shadow-md ring-1 ring-gray-100 overflow-hidden max-h-[calc(100vh-2rem)] flex flex-col">

                    <!-- Sidebar header -->
                    <div class="flex items-center gap-2 px-5 py-4 border-b border-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-[#c3181e]">
                            <path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z" />
                        </svg>
                        <span class="text-sm font-bold text-gray-800">Filter Menu</span>
                    </div>

                    <!-- Scrollable filter body -->
                    <div class="overflow-y-auto filter-scroll flex-1 px-5 py-4 space-y-6">

                        <!-- Categories -->
                        <div>
                            <div class="flex items-center gap-1.5 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-3.5 w-3.5 text-[#f68e1d]">
                                    <rect width="7" height="7" x="3" y="3" rx="1" />
                                    <rect width="7" height="7" x="14" y="3" rx="1" />
                                    <rect width="7" height="7" x="14" y="14" rx="1" />
                                    <rect width="7" height="7" x="3" y="14" rx="1" />
                                </svg>
                                <span class="text-xs font-bold uppercase tracking-wider text-gray-600">Categories</span>
                            </div>
                            <div class="flex flex-wrap gap-2" id="category-chips">
                                <!-- chips injected by JS -->
                            </div>
                        </div>

                        <!-- Price Range -->
                        <div>
                            <div class="flex items-center gap-1.5 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-3.5 w-3.5 text-[#f68e1d]">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8" />
                                    <path d="M12 18V6" />
                                </svg>
                                <span class="text-xs font-bold uppercase tracking-wider text-gray-600">Price Range</span>
                            </div>
                            <div class="relative h-4 mb-5">
                                <div id="sliderTrack"
                                    class="absolute top-1/2 -translate-y-1/2 left-0 right-0 h-1 rounded-full bg-gray-200">
                                </div>
                                <input type="range" id="minRange" min="20" max="2850" value="20"
                                    class="absolute w-full" oninput="updateSlider()">
                                <input type="range" id="maxRange" min="20" max="2850" value="2850"
                                    class="absolute w-full" oninput="updateSlider()">
                            </div>
                            <div class="flex items-center justify-between gap-2">
                                <div class="flex-1 rounded-lg border border-gray-200 bg-gray-50 px-2.5 py-1.5 text-center">
                                    <span class="text-[11px] text-gray-400 block">Min</span>
                                    <span class="text-sm font-bold text-gray-800">৳ <span id="minDisplay">20</span></span>
                                </div>
                                <div class="text-xs text-gray-300 font-bold">—</div>
                                <div class="flex-1 rounded-lg border border-gray-200 bg-gray-50 px-2.5 py-1.5 text-center">
                                    <span class="text-[11px] text-gray-400 block">Max</span>
                                    <span class="text-sm font-bold text-gray-800">৳ <span id="maxDisplay">2850</span></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </aside>

            <!-- ═══ RIGHT: MENU CONTENT ═══ -->
            <div class="flex-1 min-w-0">

                <!-- Mobile: filter toggle button -->
                <div class="lg:hidden mb-4 flex items-center gap-3">
                    <button onclick="toggleMobileFilter()"
                        class="flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-2.5 text-sm font-semibold text-gray-700 shadow-sm hover:border-orange-300 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-[#c3181e]">
                            <path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z" />
                        </svg>
                        Filters
                    </button>
                    <span class="text-sm text-gray-400">120 items found</span>
                </div>

                <!-- Mobile filter drawer -->
                <div id="mobileFilter"
                    class="hidden lg:hidden mb-4 rounded-2xl bg-white shadow-lg ring-1 ring-gray-100 p-5 space-y-5">

                    <!-- Mobile categories — horizontal chip list, scrollable -->
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-gray-500 mb-3">Categories</p>
                        <!-- Mobile: 2-column grid list style -->
                        <div class="grid grid-cols-2 gap-2" id="mobile-category-list"></div>
                    </div>

                    <!-- Mobile price range -->
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-gray-500 mb-4">Price Range</p>
                        <div class="relative h-4 mb-5">
                            <div id="mobileSliderTrack"
                                class="absolute top-1/2 -translate-y-1/2 left-0 right-0 h-1 rounded-full bg-gray-200">
                            </div>
                            <input type="range" id="mobileMinRange" min="20" max="2850" value="20"
                                class="absolute w-full" oninput="updateMobileSlider()">
                            <input type="range" id="mobileMaxRange" min="20" max="2850" value="2850"
                                class="absolute w-full" oninput="updateMobileSlider()">
                        </div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex-1 rounded-lg border border-gray-200 bg-gray-50 px-2.5 py-1.5 text-center">
                                <span class="text-[11px] text-gray-400 block">Min</span>
                                <span class="text-sm font-bold text-gray-800">৳ <span
                                        id="mobileMinDisplay">20</span></span>
                            </div>
                            <div class="text-xs text-gray-300 font-bold">—</div>
                            <div class="flex-1 rounded-lg border border-gray-200 bg-gray-50 px-2.5 py-1.5 text-center">
                                <span class="text-[11px] text-gray-400 block">Max</span>
                                <span class="text-sm font-bold text-gray-800">৳ <span
                                        id="mobileMaxDisplay">2850</span></span>
                            </div>
                        </div>
                    </div>

                    <button onclick="toggleMobileFilter()" class="w-full rounded-xl py-2.5 text-sm font-bold text-white"
                        style="background:linear-gradient(135deg,#c3181e,#f68e1d)">
                        Apply Filters
                    </button>
                </div>

                <!-- Results bar -->
                <div
                    class="mb-5 flex items-center justify-between rounded-xl bg-white px-5 py-3 shadow-sm ring-1 ring-gray-100">
                    <div class="flex items-center gap-2 text-sm font-semibold text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-4 w-4 text-[#c3181e]">
                            <rect width="7" height="7" x="3" y="3" rx="1" />
                            <rect width="7" height="7" x="14" y="3" rx="1" />
                            <rect width="7" height="7" x="14" y="14" rx="1" />
                            <rect width="7" height="7" x="3" y="14" rx="1" />
                        </svg>
                        120 items
                    </div>
                    <span class="text-xs text-gray-400">Page 3 of 14</span>
                </div>

                <!-- Menu cards grid -->
                <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" id="menuGrid">

                    <!-- Card template — 9 sample cards -->
                    <!-- Card 1 -->
                    <a href="#"
                        class="group flex flex-col rounded-2xl bg-white shadow-md ring-1 ring-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://degchidine.com/uploads/menus/variations/1781948737_0.png"
                                alt="Borhani (per Person)"
                                class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-105"
                                onerror="this.src='https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?w=400&q=70'">
                            <span
                                class="absolute left-2.5 top-2.5 rounded-full bg-white/90 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-[#c3181e] shadow-sm">Signature</span>
                        </div>
                        <div class="flex flex-col flex-1 p-4">
                            <h5 class="font-bold text-gray-900 text-sm leading-snug">Borhani (per Person)</h5>
                            <p class="mt-0.5 text-xs text-gray-400">Signature dish</p>
                            <div class="mt-auto pt-3 flex items-center justify-between">
                                <span class="text-xl font-extrabold text-[#c3181e]">৳ 60</span>
                                <button
                                    class="flex h-9 w-9 items-center justify-center rounded-full text-white shadow-md hover:scale-110 active:scale-90 transition-all duration-150"
                                    style="background:linear-gradient(135deg,#c3181e,#f68e1d)" aria-label="Add to cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </a>

                    <!-- Card 2 -->
                    <a href="#"
                        class="group flex flex-col rounded-2xl bg-white shadow-md ring-1 ring-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://degchidine.com/uploads/menus/variations/1781948761_0.png"
                                alt="Borhani Shorbot"
                                class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-105"
                                onerror="this.src='https://images.unsplash.com/photo-1589302168068-964664d93dc0?w=400&q=70'">
                            <span
                                class="absolute left-2.5 top-2.5 rounded-full bg-white/90 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-[#c3181e] shadow-sm">Popular</span>
                        </div>
                        <div class="flex flex-col flex-1 p-4">
                            <h5 class="font-bold text-gray-900 text-sm leading-snug">Borhani Shorbot (1 litre)</h5>
                            <p class="mt-0.5 text-xs text-gray-400">Signature dish</p>
                            <div class="mt-auto pt-3 flex items-center justify-between">
                                <span class="text-xl font-extrabold text-[#c3181e]">৳ 240</span>
                                <button
                                    class="flex h-9 w-9 items-center justify-center rounded-full text-white shadow-md hover:scale-110 active:scale-90 transition-all duration-150"
                                    style="background:linear-gradient(135deg,#c3181e,#f68e1d)" aria-label="Add to cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </a>

                    <!-- Card 3 -->
                    <a href="#"
                        class="group flex flex-col rounded-2xl bg-white shadow-md ring-1 ring-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://degchidine.com/uploads/menus/variations/1782029982_0.webp" alt="Chap Masala"
                                class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-105"
                                onerror="this.src='https://images.unsplash.com/photo-1645177628172-a94c1f96e6db?w=400&q=70'">
                            <span
                                class="absolute left-2.5 top-2.5 rounded-full bg-white/90 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-[#c3181e] shadow-sm">Spicy</span>
                        </div>
                        <div class="flex flex-col flex-1 p-4">
                            <h5 class="font-bold text-gray-900 text-sm leading-snug">Chap Masala</h5>
                            <p class="mt-0.5 text-xs text-gray-400">Signature dish</p>
                            <div class="mt-auto pt-3 flex items-center justify-between">
                                <span class="text-xl font-extrabold text-[#c3181e]">৳ 150</span>
                                <button
                                    class="flex h-9 w-9 items-center justify-center rounded-full text-white shadow-md hover:scale-110 active:scale-90 transition-all duration-150"
                                    style="background:linear-gradient(135deg,#c3181e,#f68e1d)" aria-label="Add to cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </a>

                    <!-- Card 4 -->
                    <a href="#"
                        class="group flex flex-col rounded-2xl bg-white shadow-md ring-1 ring-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://degchidine.com/uploads/menus/variations/1781945984_0.png" alt="Cherry Naan"
                                class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-105"
                                onerror="this.src='https://images.unsplash.com/photo-1631515243349-e0cb75fb8d3a?w=400&q=70'">
                            <span
                                class="absolute left-2.5 top-2.5 rounded-full bg-white/90 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-[#c3181e] shadow-sm">Classic</span>
                        </div>
                        <div class="flex flex-col flex-1 p-4">
                            <h5 class="font-bold text-gray-900 text-sm leading-snug">Cherry Naan</h5>
                            <p class="mt-0.5 text-xs text-gray-400">Signature dish</p>
                            <div class="mt-auto pt-3 flex items-center justify-between">
                                <span class="text-xl font-extrabold text-[#c3181e]">৳ 80</span>
                                <button
                                    class="flex h-9 w-9 items-center justify-center rounded-full text-white shadow-md hover:scale-110 active:scale-90 transition-all duration-150"
                                    style="background:linear-gradient(135deg,#c3181e,#f68e1d)" aria-label="Add to cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </a>

                    <!-- Card 5 -->
                    <a href="#"
                        class="group flex flex-col rounded-2xl bg-white shadow-md ring-1 ring-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://degchidine.com/uploads/menus/variations/1782029917_0.webp"
                                alt="Chicken Boti Kebab"
                                class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-105"
                                onerror="this.src='https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?w=400&q=70'">
                            <span
                                class="absolute left-2.5 top-2.5 rounded-full bg-white/90 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-[#c3181e] shadow-sm">Best
                                Seller</span>
                        </div>
                        <div class="flex flex-col flex-1 p-4">
                            <h5 class="font-bold text-gray-900 text-sm leading-snug">Chicken Boti Kebab</h5>
                            <p class="mt-0.5 text-xs text-gray-400">Signature dish</p>
                            <div class="mt-auto pt-3 flex items-center justify-between">
                                <span class="text-xl font-extrabold text-[#c3181e]">৳ 150</span>
                                <button
                                    class="flex h-9 w-9 items-center justify-center rounded-full text-white shadow-md hover:scale-110 active:scale-90 transition-all duration-150"
                                    style="background:linear-gradient(135deg,#c3181e,#f68e1d)" aria-label="Add to cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </a>

                    <!-- Card 6 -->
                    <a href="#"
                        class="group flex flex-col rounded-2xl bg-white shadow-md ring-1 ring-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://degchidine.com/uploads/menus/variations/1781975549_0.webp"
                                alt="Chicken Chap"
                                class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-105"
                                onerror="this.src='https://images.unsplash.com/photo-1589302168068-964664d93dc0?w=400&q=70'">
                            <span
                                class="absolute left-2.5 top-2.5 rounded-full bg-white/90 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-[#c3181e] shadow-sm">Chef's
                                Pick</span>
                        </div>
                        <div class="flex flex-col flex-1 p-4">
                            <h5 class="font-bold text-gray-900 text-sm leading-snug">Chicken Chap</h5>
                            <p class="mt-0.5 text-xs text-gray-400">Signature dish</p>
                            <div class="mt-auto pt-3 flex items-center justify-between">
                                <span class="text-xl font-extrabold text-[#c3181e]">৳ 140</span>
                                <button
                                    class="flex h-9 w-9 items-center justify-center rounded-full text-white shadow-md hover:scale-110 active:scale-90 transition-all duration-150"
                                    style="background:linear-gradient(135deg,#c3181e,#f68e1d)" aria-label="Add to cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </a>

                    <!-- Card 7 -->
                    <a href="#"
                        class="group flex flex-col rounded-2xl bg-white shadow-md ring-1 ring-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://degchidine.com/uploads/menus/variations/1781976368_0.webp"
                                alt="Chicken Dum Biryani"
                                class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-105"
                                onerror="this.src='https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?w=400&q=70'">
                            <span
                                class="absolute left-2.5 top-2.5 rounded-full bg-white/90 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-[#c3181e] shadow-sm">Dum
                                Style</span>
                        </div>
                        <div class="flex flex-col flex-1 p-4">
                            <h5 class="font-bold text-gray-900 text-sm leading-snug">Chicken Dum Biryani (Farm)</h5>
                            <p class="mt-0.5 text-xs text-gray-400 line-clamp-1">Slow-cooked biryani made with farm chicken
                            </p>
                            <div class="mt-auto pt-3 flex items-center justify-between">
                                <span class="text-xl font-extrabold text-[#c3181e]">৳ 200</span>
                                <button
                                    class="flex h-9 w-9 items-center justify-center rounded-full text-white shadow-md hover:scale-110 active:scale-90 transition-all duration-150"
                                    style="background:linear-gradient(135deg,#c3181e,#f68e1d)" aria-label="Add to cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </a>

                    <!-- Card 8 -->
                    <a href="#"
                        class="group flex flex-col rounded-2xl bg-white shadow-md ring-1 ring-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://degchidine.com/uploads/menus/variations/1782030619_0.png"
                                alt="Chicken Grill Full"
                                class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-105"
                                onerror="this.src='https://images.unsplash.com/photo-1631515243349-e0cb75fb8d3a?w=400&q=70'">
                            <span
                                class="absolute left-2.5 top-2.5 rounded-full bg-white/90 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-[#c3181e] shadow-sm">Grilled</span>
                        </div>
                        <div class="flex flex-col flex-1 p-4">
                            <h5 class="font-bold text-gray-900 text-sm leading-snug">Chicken Grill (Full)</h5>
                            <p class="mt-0.5 text-xs text-gray-400">Signature dish</p>
                            <div class="mt-auto pt-3 flex items-center justify-between">
                                <span class="text-xl font-extrabold text-[#c3181e]">৳ 480</span>
                                <button
                                    class="flex h-9 w-9 items-center justify-center rounded-full text-white shadow-md hover:scale-110 active:scale-90 transition-all duration-150"
                                    style="background:linear-gradient(135deg,#c3181e,#f68e1d)" aria-label="Add to cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </a>

                    <!-- Card 9 -->
                    <a href="#"
                        class="group flex flex-col rounded-2xl bg-white shadow-md ring-1 ring-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1645177628172-a94c1f96e6db?w=400&q=70"
                                alt="Mutton Kacchi"
                                class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-105">
                            <span
                                class="absolute left-2.5 top-2.5 rounded-full bg-white/90 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wider text-[#c3181e] shadow-sm">Signature</span>
                        </div>
                        <div class="flex flex-col flex-1 p-4">
                            <h5 class="font-bold text-gray-900 text-sm leading-snug">Basmati Mutton Kacchi</h5>
                            <p class="mt-0.5 text-xs text-gray-400">Signature dish</p>
                            <div class="mt-auto pt-3 flex items-center justify-between">
                                <span class="text-xl font-extrabold text-[#c3181e]">৳ 330</span>
                                <button
                                    class="flex h-9 w-9 items-center justify-center rounded-full text-white shadow-md hover:scale-110 active:scale-90 transition-all duration-150"
                                    style="background:linear-gradient(135deg,#c3181e,#f68e1d)" aria-label="Add to cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </a>

                </div><!-- /grid -->

                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav class="flex items-center gap-1" aria-label="Menu pagination">
                        <!-- Prev -->
                        <a href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 hover:border-[#c3181e] hover:text-[#c3181e] transition-colors duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="h-4 w-4">
                                <path d="m15 18-6-6 6-6" />
                            </svg>
                        </a>
                        <a href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-200 bg-white text-sm text-gray-600 hover:border-[#c3181e] hover:text-[#c3181e] transition-colors duration-150">1</a>
                        <a href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-200 bg-white text-sm text-gray-600 hover:border-[#c3181e] hover:text-[#c3181e] transition-colors duration-150">2</a>
                        <span class="flex h-9 w-9 items-center justify-center rounded-full text-sm font-bold text-white"
                            style="background:linear-gradient(135deg,#c3181e,#f68e1d)">3</span>
                        <a href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-200 bg-white text-sm text-gray-600 hover:border-[#c3181e] hover:text-[#c3181e] transition-colors duration-150">4</a>
                        <a href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-200 bg-white text-sm text-gray-600 hover:border-[#c3181e] hover:text-[#c3181e] transition-colors duration-150">5</a>
                        <!-- Next -->
                        <a href="#"
                            class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 hover:border-[#c3181e] hover:text-[#c3181e] transition-colors duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="h-4 w-4">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                    </nav>
                </div>

            </div><!-- /right -->
        </div>
    </div>

@endsection
@push('additional_css')
    <style>
        /* Custom dual-range slider */
        .range-slider {
            position: relative;
            height: 4px;
        }

        input[type=range] {
            -webkit-appearance: none;
            appearance: none;
            position: absolute;
            width: 100%;
            height: 4px;
            background: transparent;
            pointer-events: none;
            outline: none;
        }

        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #c3181e;
            border: 2px solid #fff;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.25);
            cursor: pointer;
            pointer-events: all;
            position: relative;
            z-index: 1;
        }

        input[type=range]::-moz-range-thumb {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #c3181e;
            border: 2px solid #fff;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.25);
            cursor: pointer;
            pointer-events: all;
        }

        #sliderTrack {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 4px;
            background: linear-gradient(to right, #e5e7eb 0%, #c3181e 0%, #c3181e 100%, #e5e7eb 100%);
        }

        /* scrollbar for filter sidebar */
        .filter-scroll::-webkit-scrollbar {
            width: 4px;
        }

        .filter-scroll::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        .filter-scroll::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
    </style>
@endpush
@push('additional_js')
    <script>
        const categories = [{
                label: 'All Items',
                value: '',
                all: true
            },
            {
                label: 'Kacchi Item',
                value: 'kacchi-item'
            },
            {
                label: 'Biriyani',
                value: 'biriyani'
            },
            {
                label: 'Sweets & Water',
                value: 'sweets-water'
            },
            {
                label: 'Mezbani Menu',
                value: 'mezbani-menu'
            },
            {
                label: 'Kebab Item',
                value: 'kebab-item'
            },
            {
                label: 'Khichuri Item',
                value: 'khichuri-item'
            },
            {
                label: 'Hyderabadi Item',
                value: 'hyderabadi-item'
            },
            {
                label: 'Others',
                value: 'others'
            },
            {
                label: 'Family Premium Package',
                value: 'family-premium-package'
            },
            {
                label: 'Shada Vat & Kari',
                value: 'shada-vat-kari'
            },
            {
                label: 'Fish',
                value: 'fish'
            },
            {
                label: 'Bhurta',
                value: 'bhurta'
            },
            {
                label: 'Naan Porota',
                value: 'naan-porota'
            },
            {
                label: 'Tea',
                value: 'tea'
            },
            {
                label: 'Juice',
                value: 'juice'
            },
            {
                label: 'Special Shake',
                value: 'special-shake'
            },
            {
                label: 'Coffee Item',
                value: 'coffee-item'
            },
            {
                label: 'Dessert Item',
                value: 'dessert-item'
            },
        ];

        let activeCategory = '';

        // Build desktop category chips
        const desktopContainer = document.getElementById('category-chips');
        categories.forEach(cat => {
            const chip = document.createElement('button');
            chip.textContent = cat.label;
            chip.dataset.value = cat.value;
            const isActive = cat.all;
            chip.className = `text-xs font-semibold px-3 py-1.5 rounded-full border transition-all duration-150 ${
      isActive
        ? 'text-white border-transparent'
        : 'text-gray-600 border-gray-200 bg-white hover:border-orange-300 hover:text-[#c3181e]'
    }`;
            if (isActive) chip.style.background = 'linear-gradient(135deg,#c3181e,#f68e1d)';
            chip.addEventListener('click', () => selectCategory(cat.value));
            desktopContainer.appendChild(chip);
        });

        // Build mobile category list (2-col grid, row style)
        const mobileContainer = document.getElementById('mobile-category-list');
        categories.forEach(cat => {
            const item = document.createElement('button');
            item.textContent = cat.label;
            item.dataset.value = cat.value;
            const isActive = cat.all;
            item.className = `text-xs font-semibold px-3 py-2 rounded-xl border text-left transition-all duration-150 ${
      isActive
        ? 'text-white border-transparent'
        : 'text-gray-600 border-gray-200 bg-white hover:border-orange-300 hover:text-[#c3181e]'
    }`;
            if (isActive) item.style.background = 'linear-gradient(135deg,#c3181e,#f68e1d)';
            item.addEventListener('click', () => selectCategory(cat.value));
            mobileContainer.appendChild(item);
        });

        function selectCategory(value) {
            activeCategory = value;
            // Update desktop chips
            document.querySelectorAll('#category-chips button').forEach(btn => {
                const active = btn.dataset.value === value;
                btn.className = `text-xs font-semibold px-3 py-1.5 rounded-full border transition-all duration-150 ${
        active
          ? 'text-white border-transparent'
          : 'text-gray-600 border-gray-200 bg-white hover:border-orange-300 hover:text-[#c3181e]'
      }`;
                btn.style.background = active ? 'linear-gradient(135deg,#c3181e,#f68e1d)' : '';
            });
            // Update mobile items
            document.querySelectorAll('#mobile-category-list button').forEach(btn => {
                const active = btn.dataset.value === value;
                btn.className = `text-xs font-semibold px-3 py-2 rounded-xl border text-left transition-all duration-150 ${
        active
          ? 'text-white border-transparent'
          : 'text-gray-600 border-gray-200 bg-white hover:border-orange-300 hover:text-[#c3181e]'
      }`;
                btn.style.background = active ? 'linear-gradient(135deg,#c3181e,#f68e1d)' : '';
            });
        }

        // Price slider logic
        function updateSlider() {
            const min = parseInt(document.getElementById('minRange').value);
            const max = parseInt(document.getElementById('maxRange').value);
            if (min > max) {
                document.getElementById('minRange').value = max;
                return;
            }
            document.getElementById('minDisplay').textContent = min;
            document.getElementById('maxDisplay').textContent = max;
            const pct1 = ((min - 20) / (2850 - 20)) * 100;
            const pct2 = ((max - 20) / (2850 - 20)) * 100;
            document.getElementById('sliderTrack').style.background =
                `linear-gradient(to right, #e5e7eb ${pct1}%, #c3181e ${pct1}%, #c3181e ${pct2}%, #e5e7eb ${pct2}%)`;
        }

        function updateMobileSlider() {
            const min = parseInt(document.getElementById('mobileMinRange').value);
            const max = parseInt(document.getElementById('mobileMaxRange').value);
            if (min > max) {
                document.getElementById('mobileMinRange').value = max;
                return;
            }
            document.getElementById('mobileMinDisplay').textContent = min;
            document.getElementById('mobileMaxDisplay').textContent = max;
            const pct1 = ((min - 20) / (2850 - 20)) * 100;
            const pct2 = ((max - 20) / (2850 - 20)) * 100;
            document.getElementById('mobileSliderTrack').style.background =
                `linear-gradient(to right, #e5e7eb ${pct1}%, #c3181e ${pct1}%, #c3181e ${pct2}%, #e5e7eb ${pct2}%)`;
        }

        // Init slider tracks
        updateSlider();
        updateMobileSlider();

        // Mobile filter toggle
        function toggleMobileFilter() {
            const f = document.getElementById('mobileFilter');
            f.classList.toggle('hidden');
        }
    </script>
@endpush
