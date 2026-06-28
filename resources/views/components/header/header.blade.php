<header class="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-sm">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-3 lg:px-10 relative">
        <!-- Mobile Hamburger -->
        <button id="menu-btn"
            class="lg:hidden rounded-full bg-gray-100 p-2.5 hover:bg-gray-200 transition-colors duration-150"
            aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
            <svg id="icon-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                <path d="M4 5h16" />
                <path d="M4 12h16" />
                <path d="M4 19h16" />
            </svg>
            <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="h-5 w-5 hidden">
                <path d="M18 6 6 18" />
                <path d="M6 6l12 12" />
            </svg>
        </button>


        <!-- Logo -->
        <a href="/" class="flex items-center gap-3 shrink-0 ">
            <img src="https://scontent.fcgp29-1.fna.fbcdn.net/v/t39.30808-6/462531406_964486962360699_1975011099110861172_n.jpg?stp=dst-jpg_tt6&cstp=mx1080x1080&ctp=s1080x1080&_nc_cat=109&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=v0QYTkZWUmcQ7kNvwEMcMkZ&_nc_oc=Adp3X0G9q7tjbBC3j09yFDumIICcRjRW_qcbzVwobYgsp2H7iFC05WrMxwwF6CEDTRo&_nc_zt=23&_nc_ht=scontent.fcgp29-1.fna&_nc_gid=VaxIptPok7ktTWkkaB2WCw&_nc_ss=7a289&oh=00_Af-gq9y-DWFzw-f_rVZxR70FSLvfXx9n4hg4W2v6JnhXvg&oe=6A468608"
                alt="Logo" class="h-20  w-auto">

        </a>


        <!-- Desktop Nav — absolutely centered -->
        <nav class="hidden lg:flex items-center gap-8 absolute left-1/2 -translate-x-1/2">
            <a href="{{ route('frontend.home') }}" aria-current="page"
                class="relative text-[15px] font-semibold text-red-600 pb-0.5 after:absolute after:bottom-[-4px] after:left-0 after:right-0 after:h-[2px] after:rounded after:bg-red-600">
                Home
            </a>
            <a href="{{ route('frontend.menu') }}"
                class="text-[15px] font-medium text-gray-600 hover:text-gray-900 transition-colors duration-150">Full
                Menu</a>
            <a href="#"
                class="text-[15px] font-medium text-gray-600 hover:text-gray-900 transition-colors duration-150">Card</a>
            <a href="{{ route('frontend.review') }}"
                class="text-[15px] font-medium text-gray-600 hover:text-gray-900 transition-colors duration-150">Reviews</a>
            <a href="{{ route('frontend.contact') }}"
                class="text-[15px] font-medium text-gray-600 hover:text-gray-900 transition-colors duration-150">Contact</a>
        </nav>

        <!-- Desktop Right -->
        <div class="flex items-center justify-between gap-3 shrink-0">

            <!-- PHONE -->
            <a href="tel:+8801898795400"
                class="hidden sm:flex items-center gap-1 text-xs sm:text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-150">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                </svg>

                <span class="hidden md:inline">01898-795400</span>
            </a>

            <!-- CART BUTTON -->
            <button id="cartTrigger" onclick="openCart()"
                class="relative inline-flex items-center justify-center gap-1.5 sm:gap-2 
        bg-orange-500 hover:bg-orange-600 active:scale-95 
        text-white text-xs sm:text-sm font-semibold 
        rounded-full px-3 sm:px-5 py-2 sm:py-2.5 
        transition-all duration-150 shadow-sm">

                <!-- ICON -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-5 sm:h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <circle cx="8" cy="21" r="1" />
                    <circle cx="19" cy="21" r="1" />
                    <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                </svg>

                <!-- TEXT (hide on small mobile) -->
                <span class="hidden sm:inline">Cart</span>

                <!-- COUNT BADGE -->
                <span
                    class="absolute -top-1 -right-1 flex h-4 w-4 sm:h-5 sm:w-5 items-center justify-center 
            rounded-full bg-[#c3181e] text-[9px] sm:text-[10px] font-bold text-white shadow">
                    2
                </span>
            </button>

        </div>



    </div>

    <!-- Mobile Drawer -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 px-5 pt-3 pb-5 shadow-lg">
        <nav class="flex flex-col gap-0.5 mb-5">
            <a href="{{ route('frontend.home') }}" aria-current="page"
                class="flex items-center rounded-xl px-4 py-3 text-sm font-semibold text-red-600 bg-red-50">Home</a>
            <a href="{{ route('frontend.menu') }}"
                class="flex items-center rounded-xl px-4 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors duration-150">Full
                Menu</a>
            <a href="#"
                class="flex items-center rounded-xl px-4 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors duration-150">Card</a>
            <a href="{{ route('frontend.review') }}"
                class="flex items-center rounded-xl px-4 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors duration-150">Reviews</a>
            <a href="{{ route('frontend.contact') }}"
                class="flex items-center rounded-xl px-4 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors duration-150">Contact</a>
        </nav>
        <div class="flex flex-col gap-3">
            <a href="tel:+8801898795400"
                class="flex items-center justify-center gap-2 rounded-full border border-gray-200 py-3 text-sm font-semibold text-gray-800 hover:border-orange-400 hover:text-orange-600 transition-colors duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                    <path
                        d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                </svg>
                01898–795400
            </a>
            <a href="{{ route('frontend.menu') }}"
                class="flex items-center justify-center gap-2 rounded-full bg-orange-500 hover:bg-orange-600 py-3 text-sm font-semibold text-white transition-colors duration-150 active:scale-95">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-shopping-cart-icon lucide-shopping-cart">
                    <circle cx="8" cy="21" r="1" />
                    <circle cx="19" cy="21" r="1" />
                    <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                </svg>
            </a>
        </div>
    </div>
</header>

@push('additional_js')
    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iMenu = document.getElementById('icon-menu');
        const iClose = document.getElementById('icon-close');

        btn.addEventListener('click', () => {
            const open = !menu.classList.contains('hidden');
            menu.classList.toggle('hidden', open);
            iMenu.classList.toggle('hidden', !open);
            iClose.classList.toggle('hidden', open);
            btn.setAttribute('aria-expanded', String(!open));
            btn.setAttribute('aria-label', open ? 'Open menu' : 'Close menu');
        });

        menu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
            menu.classList.add('hidden');
            iMenu.classList.remove('hidden');
            iClose.classList.add('hidden');
            btn.setAttribute('aria-expanded', 'false');
            btn.setAttribute('aria-label', 'Open menu');
        }));
    </script>
@endpush
