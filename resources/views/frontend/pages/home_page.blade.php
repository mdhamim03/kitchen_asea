@extends('frontend.templates.frontend_master')
@section('page_title', 'Home')

@section('main_content')
 

    <!-- BANNER SECTION -->
    <section class="relative overflow-hidden">

        <!-- Background image -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?w=1600&q=80" alt="Biryani background"
                class="h-full w-full object-cover" />
            <!-- left-to-right dark gradient -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/60 to-black/30"></div>
            <!-- bottom-up dark gradient -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        </div>

        <!-- Content -->
        <div class="relative mx-auto grid min-h-[88vh] max-w-7xl items-center px-5 py-24 lg:px-8">
            <div class=" text-white">

                <!-- Badge chip -->
                <span
                    class="inline-flex items-center gap-1.5 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-yellow-300 backdrop-blur-sm">
                    ★ Since 2014 · Halishahar
                </span>

                <!-- Headline -->
                <h1 class="mt-6 text-3xl md:text-5xl font-extrabold leading-[1.05] tracking-tight sm:text-4xl lg:text-7xl">
                    Home of Authentic
                    <span class="bg-gradient-to-r from-orange-400 to-yellow-300 bg-clip-text text-transparent">
                        Kacchi
                    </span>
                    &amp; Biryani
                </h1>

                <!-- Sub-text -->
                <p class="mt-6 max-w-xl text-lg leading-relaxed text-white/80">
                    From slow-cooked Kacchi to Mughlai favorites — every grain of rice and every spice is layered to create
                    a dining experience that feels like a celebration.
                </p>

                <!-- CTA Buttons -->
                <div class="mt-9 flex flex-wrap items-center gap-4">
                    <!-- Primary -->
                    <a href="/full-menu"
                        class="inline-flex items-center gap-2 rounded-full bg-orange-500 px-7 py-4 text-base font-semibold text-white shadow-lg hover:bg-orange-600 active:scale-95 transition-all duration-150">
                        Order Now
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"
                            aria-hidden="true">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                    <!-- Ghost -->
                    <a href="/full-menu"
                        class="inline-flex items-center gap-2 rounded-full border border-white/40 bg-white/10 px-7 py-4 text-base font-semibold text-white backdrop-blur-sm hover:bg-white/20 active:scale-95 transition-all duration-150">
                        Explore Menu
                    </a>
                </div>

                <!-- Stats -->
                <div class="mt-12 grid max-w-lg grid-cols-3 gap-6 border-t border-white/15 pt-8" id="stats">
                    <div>
                        <div class="counter text-3xl font-extrabold text-yellow-300" data-count="5" data-suffix="+"
                            data-format="">
                            0+
                        </div>
                        <div class="mt-0.5 text-xs font-medium uppercase tracking-wider text-white/70">Years of Flavor</div>
                    </div>
                    <div>
                        <div class="counter text-3xl font-extrabold text-yellow-300" data-count="120" data-suffix="+"
                            data-format="">
                            0+
                        </div>
                        <div class="mt-0.5 text-xs font-medium uppercase tracking-wider text-white/70">Signature Dishes
                        </div>
                    </div>
                    <div>
                        <div class="counter text-3xl font-extrabold text-yellow-300" data-count="50000" data-suffix="+"
                            data-format="k">
                            0+
                        </div>
                        <div class="mt-0.5 text-xs font-medium uppercase tracking-wider text-white/70">Happy Guests</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- BANNER SECTION END -->

    <!-- BRANCH SECTION START -->
    <section class="mx-auto max-w-7xl px-5 py-20 lg:px-8">

        <!-- Section header -->
        <div class="text-center">
            <span
                class="inline-flex items-center gap-1.5 rounded-full border border-orange-200 bg-orange-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-brand-red">
                | Our Branches
            </span>
            <h2 class="mt-4 text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                Find us across the city
            </h2>
            <p class="mt-3 text-base text-gray-500">
                Walk in for warm hospitality or call ahead for reservations.
            </p>
        </div>

        <!-- Cards grid -->
        <div class="mt-12 grid gap-6 md:grid-cols-3">

            <!-- Card 1 – CDC -->
            <div
                class="rounded-2xl bg-white p-7 shadow-md ring-1 ring-gray-100 hover:shadow-lg transition-shadow duration-200">
                <!-- Icon badge with brand gradient -->
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl text-white"
                    style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6" aria-hidden="true">
                        <path
                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                </div>
                <h3 class="mt-5 text-xl font-bold text-gray-900">CDC Branch</h3>
                <p class="mt-1 text-sm text-gray-500">Chittagong Central</p>
                <a href="tel:01700-111144"
                    class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#c3181e] hover:underline underline-offset-2 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" aria-hidden="true">
                        <path
                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                    </svg>
                    01700-111144
                </a>
            </div>

            <!-- Card 2 – Halishahar -->
            <div
                class="rounded-2xl bg-white p-7 shadow-md ring-1 ring-gray-100 hover:shadow-lg transition-shadow duration-200">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl text-white"
                    style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6" aria-hidden="true">
                        <path
                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                </div>
                <h3 class="mt-5 text-xl font-bold text-gray-900">Halishahar Branch</h3>
                <p class="mt-1 text-sm text-gray-500">Boropool Circle</p>
                <a href="tel:01711-222277"
                    class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#c3181e] hover:underline underline-offset-2 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"
                        aria-hidden="true">
                        <path
                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                    </svg>
                    01711-222277
                </a>
            </div>

            <!-- Card 3 – Agrabad -->
            <div
                class="rounded-2xl bg-white p-7 shadow-md ring-1 ring-gray-100 hover:shadow-lg transition-shadow duration-200">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl text-white"
                    style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6"
                        aria-hidden="true">
                        <path
                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                </div>
                <h3 class="mt-5 text-xl font-bold text-gray-900">Agrabad Branch</h3>
                <p class="mt-1 text-sm text-gray-500">Commercial Hub</p>
                <a href="tel:01800-555599"
                    class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#c3181e] hover:underline underline-offset-2 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"
                        aria-hidden="true">
                        <path
                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                    </svg>
                    01800-555599
                </a>
            </div>

        </div>
    </section>
    <!-- BRANCH SECTION END -->

    <!-- FOOD MENU SLIDER SECTION START -->
    <section class="relative overflow-hidden"
        style="
        background: linear-gradient(
          135deg,
          #1a0a00 0%,
          #2d1000 50%,
          #1a0505 100%
        );
      ">
        <!-- Decorative glow blob top-right -->
        <div class="pointer-events-none absolute -top-32 right-0 h-96 w-96 rounded-full opacity-30 blur-3xl"
            style="background: linear-gradient(135deg, #c3181e, #f68e1d)"></div>

        <div class="relative mx-auto max-w-7xl px-5 py-24 lg:px-8">
            <!-- Section header -->
            <div class="flex flex-wrap items-end justify-between gap-4 text-white">
                <div>
                    <span
                        class="inline-flex items-center gap-1.5 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-[#f68e1d] backdrop-blur-sm">
                        | Loved by Our Guests
                    </span>
                    <h2 class="mt-4 text-4xl font-extrabold tracking-tight sm:text-5xl">
                        Crowd-favorite dishes
                    </h2>
                </div>
                <a href="/full-menu"
                    class="inline-flex items-center gap-2 rounded-full bg-white/10 px-5 py-2.5 text-sm font-semibold text-white backdrop-blur-sm hover:bg-white/20 active:scale-95 transition-all duration-150">
                    View Complete Menu
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"
                        aria-hidden="true">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Cards grid -->
            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Card 1 -->
                <article
                    class="group relative overflow-hidden rounded-2xl bg-white shadow-xl cursor-pointer transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-2xl hover:shadow-black/40">
                    <!-- Image -->
                    <div class="relative aspect-square overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?w=600&q=80"
                            alt="Basmati Mutton Kacchi" loading="lazy"
                            class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110" />
                        <!-- Overlay shimmer on hover -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <!-- Badge -->
                        <span
                            class="absolute left-3 top-3 rounded-full bg-white/95 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-[#c3181e] shadow-sm">
                            Signature
                        </span>
                    </div>
                    <!-- Info -->
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 leading-tight">
                            Basmati Mutton Kacchi
                        </h3>
                        <p class="mt-1 text-xs text-gray-400 font-medium">
                            Signature dish
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-2xl font-extrabold text-[#c3181e]">৳ 330</span>
                            <button aria-label="Add to cart"
                                class="inline-flex h-10 w-10 items-center justify-center rounded-full text-white shadow-md transition-all duration-200 active:scale-90 hover:scale-110"
                                style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-5 w-5" aria-hidden="true">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- Bottom border accent on hover -->
                    <div class="absolute bottom-0 left-0 right-0 h-[3px] scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left rounded-b-2xl"
                        style="background: linear-gradient(90deg, #c3181e, #f68e1d)"></div>
                </article>

                <!-- Card 2 -->
                <article
                    class="group relative overflow-hidden rounded-2xl bg-white shadow-xl cursor-pointer transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-2xl hover:shadow-black/40">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1589302168068-964664d93dc0?w=600&q=80"
                            alt="Degchi Chicken Biryani" loading="lazy"
                            class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <span
                            class="absolute left-3 top-3 rounded-full bg-white/95 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-[#c3181e] shadow-sm">
                            Best Seller
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 leading-tight">
                            Degchi Chicken Biryani
                        </h3>
                        <p class="mt-1 text-xs text-gray-400 font-medium">
                            Signature dish
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-2xl font-extrabold text-[#c3181e]">৳ 290</span>
                            <button aria-label="Add to cart"
                                class="inline-flex h-10 w-10 items-center justify-center rounded-full text-white shadow-md transition-all duration-200 active:scale-90 hover:scale-110"
                                style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-5 w-5" aria-hidden="true">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-[3px] scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left rounded-b-2xl"
                        style="background: linear-gradient(90deg, #c3181e, #f68e1d)"></div>
                </article>

                <!-- Card 3 -->
                <article
                    class="group relative overflow-hidden rounded-2xl bg-white shadow-xl cursor-pointer transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-2xl hover:shadow-black/40">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1645177628172-a94c1f96e6db?w=600&q=80"
                            alt="Afghan Beef Tehari" loading="lazy"
                            class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <span
                            class="absolute left-3 top-3 rounded-full bg-white/95 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-[#c3181e] shadow-sm">
                            Spicy
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 leading-tight">
                            Afghan Beef Tehari
                        </h3>
                        <p class="mt-1 text-xs text-gray-400 font-medium">
                            Signature dish
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-2xl font-extrabold text-[#c3181e]">৳ 240</span>
                            <button aria-label="Add to cart"
                                class="inline-flex h-10 w-10 items-center justify-center rounded-full text-white shadow-md transition-all duration-200 active:scale-90 hover:scale-110"
                                style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-5 w-5" aria-hidden="true">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-[3px] scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left rounded-b-2xl"
                        style="background: linear-gradient(90deg, #c3181e, #f68e1d)"></div>
                </article>

                <!-- Card 4 -->
                <article
                    class="group relative overflow-hidden rounded-2xl bg-white shadow-xl cursor-pointer transition-all duration-500 ease-out hover:-translate-y-3 hover:shadow-2xl hover:shadow-black/40">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1631515243349-e0cb75fb8d3a?w=600&q=80"
                            alt="Mughlai Chicken Korma" loading="lazy"
                            class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <span
                            class="absolute left-3 top-3 rounded-full bg-white/95 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-[#c3181e] shadow-sm">
                            Classic
                        </span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 leading-tight">
                            Mughlai Chicken Korma
                        </h3>
                        <p class="mt-1 text-xs text-gray-400 font-medium">
                            Signature dish
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-2xl font-extrabold text-[#c3181e]">৳ 260</span>
                            <button aria-label="Add to cart"
                                class="inline-flex h-10 w-10 items-center justify-center rounded-full text-white shadow-md transition-all duration-200 active:scale-90 hover:scale-110"
                                style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-5 w-5" aria-hidden="true">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-[3px] scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left rounded-b-2xl"
                        style="background: linear-gradient(90deg, #c3181e, #f68e1d)"></div>
                </article>
            </div>
        </div>
    </section>
    <!-- FOOD MENU SLIDER SECTION END -->

    <!-- SIGNATURE PLATTERS SECTION START -->
    <section class="mx-auto max-w-7xl px-5 py-24 lg:px-8">
        <!-- Section header -->
        <div class="text-center">
            <span
                class="inline-flex items-center gap-1.5 rounded-full border border-orange-200 bg-orange-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-[#c3181e]">
                | Our Signature Platters
            </span>
            <h2 class="mt-4 text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                Curated for unforgettable evenings
            </h2>
        </div>

        <!-- Main card -->
        <div
            class="mt-14 overflow-hidden rounded-3xl bg-gradient-to-br from-orange-50 to-red-50 p-6 shadow-xl sm:p-10 lg:grid lg:grid-cols-2 lg:gap-12 lg:p-14">
            <!-- Left: image -->
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?w=800&q=80"
                    alt="Signature Kacchi Platter" loading="lazy"
                    class="aspect-square w-full rounded-2xl object-cover shadow-xl" />
                <!-- Floating badge -->
                <div class="absolute -bottom-4 -right-4 flex items-center gap-2 rounded-full bg-white px-5 py-3 text-sm font-bold shadow-xl"
                    style="color: #c3181e">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"
                        aria-hidden="true">
                        <path
                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526" />
                        <circle cx="12" cy="8" r="6" />
                    </svg>
                    Mid-day Special
                </div>
            </div>

            <!-- Right: content -->
            <div class="mt-10 lg:mt-0 lg:flex lg:flex-col lg:justify-center">
                <!-- Sub-label -->
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#f68e1d]">
                    Family Premium · Limited
                </span>

                <!-- Heading -->
                <h3 class="mt-3 text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl leading-tight">
                    Flavors to brighten your afternoon
                </h3>

                <!-- Description -->
                <p class="mt-4 text-base text-gray-500 leading-relaxed">
                    Choose from our chef's table of selected mid-day flavorful platters
                    served fresh out of the degchi.
                </p>

                <!-- Bullet list -->
                <ul class="mt-6 space-y-3 text-sm text-gray-700">
                    <li class="flex gap-3 items-start">
                        <span class="mt-0.5 text-[#c3181e] text-base leading-none">●</span>
                        Veg &amp; Non-Veg curated favorites with traditional sides
                    </li>
                    <li class="flex gap-3 items-start">
                        <span class="mt-0.5 text-[#c3181e] text-base leading-none">●</span>
                        Hot Naan and Basmati rice — slow-cooked the Mughal way
                    </li>
                    <li class="flex gap-3 items-start">
                        <span class="mt-0.5 text-[#c3181e] text-base leading-none">●</span>
                        Member perks: complimentary dessert with every platter
                    </li>
                </ul>

                <!-- CTA buttons -->
                <div class="mt-8 flex flex-wrap gap-3">
                    <!-- Primary -->
                    <a href="/full-menu"
                        class="inline-flex items-center gap-2 rounded-full px-6 py-3 text-sm font-semibold text-white shadow-md hover:opacity-90 active:scale-95 transition-all duration-150"
                        style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                        View Menu Card
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"
                            aria-hidden="true">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                    <!-- Ghost -->
                    <a href="/card"
                        class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-6 py-3 text-sm font-semibold text-gray-800 hover:bg-gray-50 active:scale-95 transition-all duration-150">
                        Get Privilege Card
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- SIGNATURE PLATTERS SECTION END -->

    <!-- FACEBOOK REELS SECTION START-->
    <section class="relative overflow-hidden text-white"
        style="
        background: linear-gradient(
          135deg,
          #1a0a00 0%,
          #2d1000 50%,
          #1a0505 100%
        );
      ">
        <!-- Decorative glow blob left -->
        <div class="pointer-events-none absolute -left-20 top-20 h-72 w-72 rounded-full opacity-20 blur-3xl"
            style="background: #f68e1d"></div>

        <div class="mx-auto max-w-7xl px-5 py-24 lg:px-8">
            <!-- Header row -->
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div>
                    <span
                        class="inline-flex items-center gap-1.5 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-[#f68e1d] backdrop-blur-sm">
                        | Watch Us on Facebook
                    </span>
                    <h2 class="mt-4 text-4xl font-extrabold tracking-tight sm:text-5xl">
                        Behind the scenes, every week
                    </h2>
                    <p class="mt-3 max-w-xl text-white/70 text-base leading-relaxed">
                        Kitchen moments, chef inspirations, and guest stories from Kitchen
                        Asia.
                    </p>
                </div>
                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 rounded-full px-6 py-3 text-sm font-semibold text-white shadow-md hover:opacity-90 active:scale-95 transition-all duration-150"
                    style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"
                        aria-hidden="true">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                    </svg>
                    Follow on Facebook
                </a>
            </div>

            <!-- Reels grid -->
            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Reel 1 -->
                <a href="https://facebook.com/reels" target="_blank" rel="noopener noreferrer"
                    class="group relative aspect-[3/4] overflow-hidden rounded-2xl block">
                    <img src="https://images.unsplash.com/photo-1589302168068-964664d93dc0?w=600&q=80"
                        alt="Chicken Biryani Reel" loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110" />
                    <!-- dark overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                    <!-- Hover tint -->
                    <div
                        class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-400">
                    </div>
                    <!-- Play button -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="flex h-14 w-14 items-center justify-center rounded-full bg-white/95 shadow-lg transition-all duration-300 ease-out group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-white"
                            style="color: #c3181e">
                            <!-- Animated pulse ring -->
                            <span
                                class="absolute h-14 w-14 rounded-full bg-white/40 animate-ping opacity-0 group-hover:opacity-100"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-6 w-6 translate-x-0.5" aria-hidden="true">
                                <path
                                    d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Reel 2 -->
                <a href="https://facebook.com/reels" target="_blank" rel="noopener noreferrer"
                    class="group relative aspect-[3/4] overflow-hidden rounded-2xl block">
                    <img src="https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?w=600&q=80" alt="Kacchi Reel"
                        loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                    <div
                        class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-400">
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="flex h-14 w-14 items-center justify-center rounded-full bg-white/95 shadow-lg transition-all duration-300 ease-out group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-white"
                            style="color: #c3181e">
                            <span
                                class="absolute h-14 w-14 rounded-full bg-white/40 animate-ping opacity-0 group-hover:opacity-100"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-6 w-6 translate-x-0.5" aria-hidden="true">
                                <path
                                    d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Reel 3 -->
                <a href="https://facebook.com/reels" target="_blank" rel="noopener noreferrer"
                    class="group relative aspect-[3/4] overflow-hidden rounded-2xl block">
                    <img src="https://images.unsplash.com/photo-1645177628172-a94c1f96e6db?w=600&q=80" alt="Tehari Reel"
                        loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                    <div
                        class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-400">
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="flex h-14 w-14 items-center justify-center rounded-full bg-white/95 shadow-lg transition-all duration-300 ease-out group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-white"
                            style="color: #c3181e">
                            <span
                                class="absolute h-14 w-14 rounded-full bg-white/40 animate-ping opacity-0 group-hover:opacity-100"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-6 w-6 translate-x-0.5" aria-hidden="true">
                                <path
                                    d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Reel 4 – with discount badge -->
                <a href="https://facebook.com/reels" target="_blank" rel="noopener noreferrer"
                    class="group relative aspect-[3/4] overflow-hidden rounded-2xl block">
                    <img src="https://images.unsplash.com/photo-1631515243349-e0cb75fb8d3a?w=600&q=80" alt="Korma Reel"
                        loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                    <div
                        class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-400">
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="flex h-14 w-14 items-center justify-center rounded-full bg-white/95 shadow-lg transition-all duration-300 ease-out group-hover:scale-110 group-hover:shadow-2xl group-hover:bg-white"
                            style="color: #c3181e">
                            <span
                                class="absolute h-14 w-14 rounded-full bg-white/40 animate-ping opacity-0 group-hover:opacity-100"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-6 w-6 translate-x-0.5" aria-hidden="true">
                                <path
                                    d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z" />
                            </svg>
                        </div>
                    </div>
                    <!-- Discount badge -->
                    <span class="absolute right-3 top-3 rounded-full px-3 py-1 text-xs font-bold text-white shadow-md"
                        style="background: #c3181e">
                        20% OFF
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!-- FACEBOOK REELS SECTION END -->

    <!-- OUR STORY SECTION START-->
    <section class="mx-auto max-w-7xl px-5 py-24 lg:px-8">
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <!-- LEFT: Text content -->
            <div>
                <!-- Chip badge -->
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-gray-700 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="h-3.5 w-3.5 text-[#c3181e]">
                        <path
                            d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                    </svg>
                    Our Heritage
                </span>

                <!-- Heading with left border accent -->
                <div class="mt-4 border-l-4 pl-4" style="border-color: #c3181e">
                    <h2 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl leading-tight">
                        The Story of Kitchen Asia
                    </h2>
                </div>

                <!-- Bold sub-description -->
                <p class="mt-5 text-base font-bold text-gray-800 leading-relaxed">
                    Bringing the authentic, slow-cooked royal culinary traditions of
                    heritage degchi dining straight to your contemporary table.
                </p>

                <!-- Body text -->
                <p class="mt-4 text-base text-gray-500 leading-relaxed">
                    At Kitchen Asia, every recipe is a tribute. Hand-ground spices, aged
                    basmati, and fire-kissed clay pots come together to honor a cuisine
                    perfected over generations. We specialize in traditional Dum cooking
                    methods — where premium cuts of meat, fragrant basmati rice, and
                    freshly crushed spice masalas are sealed tightly inside heavy
                    vessels, allowing the ingredients to mature perfectly in their own
                    steam.
                </p>

                <!-- Feature pills -->
                <div class="mt-8 flex flex-wrap gap-3">
                    <div
                        class="flex items-center gap-3 rounded-2xl border-l-4 border-[#f68e1d] bg-white px-5 py-3 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#f68e1d"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 shrink-0">
                            <path d="M12 2c0 6-8 7-8 12a8 8 0 0 0 16 0c0-5-8-6-8-12z" />
                        </svg>
                        <span class="text-xs font-bold uppercase tracking-wider text-gray-700">Authentic Dum Style</span>
                    </div>
                    <div
                        class="flex items-center gap-3 rounded-2xl border-l-4 border-[#c3181e] bg-white px-5 py-3 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#c3181e"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 shrink-0">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                            <path d="m9 12 2 2 4-4" />
                        </svg>
                        <span class="text-xs font-bold uppercase tracking-wider text-gray-700">Premium Ingredients</span>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="/full-menu"
                        class="inline-flex items-center gap-2 rounded-full px-6 py-3 text-sm font-semibold text-white shadow-md hover:opacity-90 active:scale-95 transition-all duration-150"
                        style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                        Taste the Journey
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"
                            aria-hidden="true">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                    <a href="/contact"
                        class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-6 py-3 text-sm font-semibold text-gray-800 hover:bg-gray-50 active:scale-95 transition-all duration-150">
                        Reserve a Table
                    </a>
                </div>
            </div>

            <!-- RIGHT: Image with floating badge -->
            <div class="relative">
                <!-- Decorative background blob -->
                <div class="absolute -right-6 -top-6 h-64 w-64 rounded-full opacity-20 blur-3xl -z-10"
                    style="background: #f68e1d"></div>

                <!-- Image card — styled like screenshot: rounded large, slight border, shadow -->
                <div class="overflow-hidden rounded-3xl border border-gray-100 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?w=900&q=80"
                        alt="Signature Kacchi in clay pot" loading="lazy"
                        class="aspect-[5/4] w-full object-cover transition-transform duration-700 hover:scale-105" />
                </div>

                <!-- Floating stat badge — bottom-right like screenshot -->
                <div
                    class="absolute -bottom-4 right-6 rounded-2xl px-6 py-4 shadow-xl text-right bg-white/90 backdrop-blur-sm">
                    <div class="text-3xl font-extrabold text-start text-[#f68e1d]">10+</div>
                    <div class="mt-0.5 text-[10px] font-bold uppercase tracking-wider text-black">
                        Years of Culinary Craft
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR STORY SECTION END -->

    <!-- REVIEWS SECTION START -->
    <section class="bg-[#faf4ef] py-24">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <!-- Section header -->
            <div class="text-center">
                <span
                    class="inline-flex items-center gap-1.5 rounded-full border border-orange-200 bg-orange-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-[#c3181e]">
                    | What Our Guests Say
                </span>
                <h2 class="mt-4 text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                    Loved by food lovers
                </h2>
            </div>

            <!-- Reviews grid -->
            <div class="mt-12 grid gap-6 lg:grid-cols-2">
                <!-- Review Card 1 -->
                <div
                    class="relative rounded-2xl bg-white p-8 shadow-md ring-1 ring-gray-100 hover:shadow-xl hover:shadow-[#f68d1d36] transition-shadow duration-300">
                    <!-- Quote icon top-right -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="absolute right-6 top-6 h-10 w-10" style="color: #f68e1d; opacity: 0.3" aria-hidden="true">
                        <path
                            d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                        <path
                            d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                    </svg>

                    <!-- Stars -->
                    <div class="flex gap-1" style="color: #f68e1d">
                        <!-- 5 stars -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                        </svg>
                    </div>

                    <!-- Review text -->
                    <p class="mt-5 text-base leading-relaxed text-gray-700">
                        "One of the best places for Biriyani and Mughlai dishes. Fresh
                        ingredients, reasonable price, and a pleasant environment."
                    </p>

                    <!-- Reviewer -->
                    <div class="mt-6 flex items-center gap-3 border-t border-gray-100 pt-5">
                        <div class="flex h-11 w-11 items-center justify-center rounded-full text-base font-bold text-white shrink-0"
                            style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                            F
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">
                                Faisal Ahmed Shourav
                            </div>
                            <div class="text-xs text-gray-400 mt-0.5">
                                Overall Excellent
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review Card 2 -->
                <div
                    class="relative rounded-2xl bg-white p-8 shadow-md ring-1 ring-gray-100 hover:shadow-xl hover:shadow-[#f68d1d36] transition-shadow duration-300">
                    <!-- Quote icon top-right -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="absolute right-6 top-6 h-10 w-10" style="color: #f68e1d; opacity: 0.3" aria-hidden="true">
                        <path
                            d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                        <path
                            d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                    </svg>

                    <!-- Stars -->
                    <div class="flex gap-1" style="color: #f68e1d">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                        </svg>
                    </div>

                    <!-- Review text -->
                    <p class="mt-5 text-base leading-relaxed text-gray-700">
                        "Excellent food quality and authentic taste. The Kacchi Biriyani
                        was perfectly cooked, and the service was very friendly."
                    </p>

                    <!-- Reviewer -->
                    <div class="mt-6 flex items-center gap-3 border-t border-gray-100 pt-5">
                        <div class="flex h-11 w-11 items-center justify-center rounded-full text-base font-bold text-white shrink-0"
                            style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                            M
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">Md Abdur Rahman</div>
                            <div class="text-xs text-gray-400 mt-0.5">5★ Guest</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- REVIEWS SECTION END -->

    <!-- VISIT US SECTION START-->
    <section class=" px-5 py-24 lg:px-8 bg-[#fffafc]">
        <div class="mx-auto max-w-7xl">
            <!-- Section header -->
            <div class="text-center">
                <span
                    class="inline-flex items-center gap-1.5 rounded-full border border-orange-200 bg-orange-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-[#c3181e]">
                    | Visit Us
                </span>
                <h2 class="mt-4 text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                    An evening awaiting you
                </h2>
            </div>

            <!-- Grid: Info card + Map -->
            <div class="mt-12 grid gap-8 lg:grid-cols-2">
                <!-- Info Card -->
                <div
                    class="rounded-2xl bg-white p-8 shadow-md ring-1 ring-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <!-- Branch name + address -->
                    <h3 class="text-2xl font-bold text-gray-900">
                        Kitchen Asia · Halishahar
                    </h3>
                    <p class="mt-1 text-sm text-gray-400">
                        Boropool Circle, Kaptan Villa, Halishahar, Chittagong
                    </p>

                    <!-- Info rows -->
                    <div class="mt-7 space-y-4 text-sm">
                        <!-- Hours -->
                        <div class="flex items-start gap-4">
                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-[#c3181e]">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-5 w-5" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M12 6v6l4 2" />
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Business Hours</div>
                                <div class="mt-0.5 text-gray-400">
                                    Mon – Sun · 5:00 PM – 11:30 PM
                                </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-4">
                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-[#c3181e]">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-5 w-5" aria-hidden="true">
                                    <path
                                        d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Reservation</div>
                                <div class="mt-0.5 text-gray-400">+880 1898-795400</div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="mt-7 flex gap-3">
                        <a href="https://maps.google.com" target="_blank" rel="noopener noreferrer"
                            class="flex-1 rounded-full border border-gray-200 py-3 text-center text-sm font-semibold text-gray-800 hover:bg-gray-50 active:scale-95 transition-all duration-150">
                            Get Directions
                        </a>
                        <a href="tel:+8801898795400"
                            class="flex-1 rounded-full py-3 text-center text-sm font-semibold text-white shadow-md hover:opacity-90 active:scale-95 transition-all duration-150"
                            style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                            Call Now
                        </a>
                    </div>

                    <!-- Social follow row -->
                    <div
                        class="mt-6 flex items-center gap-3 border-t border-gray-100 pt-5 text-xs font-semibold uppercase tracking-wider text-gray-400">
                        Follow us
                        <a href="#" class="text-[#c3181e] hover:text-[#f68e1d] transition-colors duration-150"
                            aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="h-4 w-4" aria-hidden="true">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                            </svg>
                        </a>
                        <a href="#" class="text-[#c3181e] hover:text-[#f68e1d] transition-colors duration-150"
                            aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="h-4 w-4" aria-hidden="true">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Map -->
                <div class="overflow-hidden rounded-3xl shadow-xl ring-1 ring-gray-100">
                    <iframe title="Kitchen Asia Halishahar Location"
                        src="https://www.openstreetmap.org/export/embed.html?bbox=91.7700%2C22.3300%2C91.8000%2C22.3500&layer=mapnik"
                        class="h-full min-h-[400px] w-full" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- VISIT US SECTION END -->


@endsection
