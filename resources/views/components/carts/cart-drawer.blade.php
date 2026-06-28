   <!-- Backdrop -->
   <div id="cartBackdrop" onclick="closeCart()"
       class="fixed inset-0 bg-black/40 backdrop-blur-sm z-40 opacity-0 pointer-events-none transition-opacity duration-300">
   </div>

   <!-- Cart Drawer -->
   <div id="cartDrawer"
       class="fixed top-0 right-0 h-full w-full max-w-sm z-50 flex flex-col bg-white shadow-2xl translate-x-full transition-transform duration-300 ease-out">
       <!-- Top accent bar -->
       <div class="h-1 w-full shrink-0" style="background: linear-gradient(90deg, #c3181e, #f68e1d)"></div>

       <!-- Header -->
       <div class="flex items-center justify-between px-5 py-4 border-b border-gray-100 shrink-0">
           <div>
               <h5 class="text-lg font-bold text-gray-900">Your Cart</h5>
               <p class="text-xs text-gray-400 mt-0.5">2 items</p>
           </div>
           <button onclick="closeCart()"
               class="flex h-9 w-9 items-center justify-center rounded-full bg-gray-100 text-gray-500 hover:bg-red-50 hover:text-[#c3181e] transition-colors duration-150"
               aria-label="Close cart">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                   <path d="M18 6 6 18" />
                   <path d="M6 6l12 12" />
               </svg>
           </button>
       </div>

       <!-- Static items -->
       <div class="flex-1 overflow-y-auto px-5 py-4 space-y-4">
           <!-- Item 1 -->
           <article class="flex gap-3 rounded-2xl border border-gray-100 bg-gray-50 p-3">
               <div class="h-16 w-16 shrink-0 rounded-xl overflow-hidden bg-white ring-1 ring-gray-100">
                   <img src="https://degchidine.com/uploads/menus/variations/1782562432_0.jpg" alt="Fish Bhurta"
                       onerror="
                this.src =
                  'https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?w=100&q=60'
              "
                       class="h-full w-full object-cover" />
               </div>
               <div class="flex-1 min-w-0">
                   <div class="flex items-start justify-between gap-2">
                       <div>
                           <h6 class="text-sm font-bold text-gray-900">Fish Bhurta</h6>
                           <span class="text-xs text-gray-400">৳ 90.00 each</span>
                       </div>
                       <button
                           class="flex h-7 w-7 items-center justify-center rounded-full text-gray-400 hover:bg-red-50 hover:text-[#c3181e] transition-colors duration-150"
                           aria-label="Remove">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                               class="h-3.5 w-3.5">
                               <path d="M3 6h18" />
                               <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6" />
                               <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                           </svg>
                       </button>
                   </div>
                   <div class="mt-2.5 flex items-center justify-between">
                       <div class="flex items-center gap-1 rounded-full border border-gray-200 bg-white px-1 py-0.5">
                           <button
                               class="flex h-6 w-6 items-center justify-center rounded-full text-gray-500 hover:bg-red-50 hover:text-[#c3181e] transition-colors text-sm font-bold">
                               −
                           </button>
                           <span class="w-6 text-center text-sm font-bold text-gray-800">1</span>
                           <button
                               class="flex h-6 w-6 items-center justify-center rounded-full text-gray-500 hover:bg-green-50 hover:text-green-600 transition-colors text-sm font-bold">
                               +
                           </button>
                       </div>
                       <span class="text-sm font-extrabold text-[#c3181e]">৳ 90.00</span>
                   </div>
               </div>
           </article>

           <!-- Item 2 -->
           <article class="flex gap-3 rounded-2xl border border-gray-100 bg-gray-50 p-3">
               <div class="h-16 w-16 shrink-0 rounded-xl overflow-hidden bg-white ring-1 ring-gray-100">
                   <img src="https://degchidine.com/uploads/menus/variations/1781945984_0.png" alt="Cherry Naan"
                       onerror="
                this.src =
                  'https://images.unsplash.com/photo-1631515243349-e0cb75fb8d3a?w=100&q=60'
              "
                       class="h-full w-full object-cover" />
               </div>
               <div class="flex-1 min-w-0">
                   <div class="flex items-start justify-between gap-2">
                       <div>
                           <h6 class="text-sm font-bold text-gray-900">Cherry Naan</h6>
                           <span class="text-xs text-gray-400">৳ 80.00 each</span>
                       </div>
                       <button
                           class="flex h-7 w-7 items-center justify-center rounded-full text-gray-400 hover:bg-red-50 hover:text-[#c3181e] transition-colors duration-150"
                           aria-label="Remove">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                               class="h-3.5 w-3.5">
                               <path d="M3 6h18" />
                               <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6" />
                               <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                           </svg>
                       </button>
                   </div>
                   <div class="mt-2.5 flex items-center justify-between">
                       <div class="flex items-center gap-1 rounded-full border border-gray-200 bg-white px-1 py-0.5">
                           <button
                               class="flex h-6 w-6 items-center justify-center rounded-full text-gray-500 hover:bg-red-50 hover:text-[#c3181e] transition-colors text-sm font-bold">
                               −
                           </button>
                           <span class="w-6 text-center text-sm font-bold text-gray-800">1</span>
                           <button
                               class="flex h-6 w-6 items-center justify-center rounded-full text-gray-500 hover:bg-green-50 hover:text-green-600 transition-colors text-sm font-bold">
                               +
                           </button>
                       </div>
                       <span class="text-sm font-extrabold text-[#c3181e]">৳ 80.00</span>
                   </div>
               </div>
           </article>
       </div>

       <!-- Footer -->
       <div class="shrink-0 border-t border-gray-100 px-5 py-5 space-y-4">
           <div class="flex items-center justify-between">
               <span class="text-sm text-gray-500 font-medium">Subtotal</span>
               <strong class="text-lg font-extrabold text-gray-900">৳ 170.00</strong>
           </div>
           <p class="text-xs text-gray-400">
               Taxes and delivery calculated at checkout.
           </p>
           <div class="flex flex-col gap-2">
               <a href="/add-to-cart"
                   class="flex items-center justify-center gap-2 rounded-xl border border-gray-200 py-3 text-sm font-semibold text-gray-800 hover:bg-gray-50 active:scale-[0.98] transition-all duration-150">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                       stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-gray-400">
                       <circle cx="8" cy="21" r="1" />
                       <circle cx="19" cy="21" r="1" />
                       <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                   </svg>
                   View Full Cart
               </a>
               <a href="/checkout"
                   class="flex items-center justify-center gap-2 rounded-xl py-3 text-sm font-bold text-white shadow-md hover:opacity-90 active:scale-[0.98] transition-all duration-150"
                   style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                   Proceed to Checkout
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                       stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                       <path d="M5 12h14" />
                       <path d="m12 5 7 7-7 7" />
                   </svg>
               </a>
           </div>
       </div>
   </div>
   @push('additional_js')
       <script>
           function openCart() {
               document
                   .getElementById("cartDrawer")
                   .classList.remove("translate-x-full");
               document
                   .getElementById("cartBackdrop")
                   .classList.remove("opacity-0", "pointer-events-none");
               document.body.style.overflow = "hidden";
           }

           function closeCart() {
               document.getElementById("cartDrawer").classList.add("translate-x-full");
               document
                   .getElementById("cartBackdrop")
                   .classList.add("opacity-0", "pointer-events-none");
               document.body.style.overflow = "";
           }
       </script>
   @endpush
