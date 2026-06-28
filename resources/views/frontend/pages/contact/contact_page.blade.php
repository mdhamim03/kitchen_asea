@extends('frontend.templates.frontend_master')
@section('page_title', 'Contact Us | Kitchen Asia')

@section('main_content')
    <!-- HERO BANNER -->
    <section class="bg-[#faf4ef] py-20">
        <div class="mx-auto max-w-7xl px-5 text-center lg:px-8">
            <span
                class="inline-flex items-center gap-1.5 rounded-full border border-orange-200 bg-orange-50 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest text-[#c3181e]">
                | Contact Us
            </span>
            <h1 class="mt-5 text-5xl font-extrabold tracking-tight text-gray-900 sm:text-6xl">
                Get in Touch
            </h1>
        </div>
    </section>
    <!-- CONTACT PAGE -->
    <section>
        <div class="mx-auto max-w-7xl sm:px-5 py-16 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-2">
                <!-- ═══ LEFT: Info Panel ═══ -->
                <aside class="order-2 lg:order-1">
                    <!-- Info Panel Card -->
                    <div class="rounded-3xl bg-white shadow-xl ring-1 ring-gray-100 overflow-hidden">
                        <!-- Top bar with brand gradient -->
                        <div class="h-2 w-full" style="background: linear-gradient(90deg, #c3181e, #f68e1d)"></div>

                        <div class="p-8">
                            <!-- Header row -->
                            <div class="flex items-start justify-between gap-4 flex-wrap">
                                <div>
                                    <h2 class="text-2xl font-extrabold text-gray-900">
                                        Kitchen Asia
                                    </h2>
                                    <p class="mt-0.5 text-sm text-gray-400 font-medium">
                                        Warm hospitality · Authentic flavors
                                    </p>
                                </div>
                                <span
                                    class="inline-flex items-center gap-1.5 rounded-full px-3 py-1.5 text-xs font-bold text-white shadow-sm"
                                    style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-3.5 w-3.5">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M12 6v6l4 2" />
                                    </svg>
                                    Open Daily
                                </span>
                            </div>

                            <!-- Contact cards -->
                            <div class="mt-7 space-y-3">
                                <!-- Address -->
                                <article
                                    class="flex items-start gap-4 rounded-2xl border border-gray-100 bg-gray-50 p-4 hover:border-orange-200 hover:bg-orange-50 transition-colors duration-200">
                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl text-white"
                                        style="
                      background: linear-gradient(135deg, #c3181e, #f68e1d);
                    ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="h-5 w-5">
                                            <path fill-rule="evenodd"
                                                d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-2.079 3.678-5.067 3.678-8.326 0-4.5-3.642-8.25-8.25-8.25S3.75 7.449 3.75 11.75c0 3.259 1.734 6.247 3.677 8.326a19.575 19.575 0 002.684 2.282 16.975 16.975 0 001.143.742zM12 13.5a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-bold text-gray-800">Address</h3>
                                        <p class="mt-0.5 text-sm text-gray-500 leading-relaxed">
                                            Boropool Circle, Kaptan Villa,<br />Halishahar,
                                            Chittagong, Bangladesh
                                        </p>
                                    </div>
                                </article>

                                <!-- Phone -->
                                <article
                                    class="flex items-start gap-4 rounded-2xl border border-gray-100 bg-gray-50 p-4 hover:border-orange-200 hover:bg-orange-50 transition-colors duration-200">
                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl text-white"
                                        style="
                      background: linear-gradient(135deg, #c3181e, #f68e1d);
                    ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="h-5 w-5">
                                            <path fill-rule="evenodd"
                                                d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-bold text-gray-800">Phone</h3>
                                        <a href="tel:01898795400"
                                            class="mt-0.5 text-sm font-semibold text-[#c3181e] hover:underline underline-offset-2">01898-795400</a>
                                    </div>
                                </article>

                                <!-- Email -->
                                <article
                                    class="flex items-start gap-4 rounded-2xl border border-gray-100 bg-gray-50 p-4 hover:border-orange-200 hover:bg-orange-50 transition-colors duration-200">
                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl text-white"
                                        style="
                      background: linear-gradient(135deg, #c3181e, #f68e1d);
                    ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="h-5 w-5">
                                            <path
                                                d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                            <path
                                                d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-bold text-gray-800">Email</h3>
                                        <a href="mailto:kitchenasia@gmail.com"
                                            class="mt-0.5 text-sm font-semibold text-[#c3181e] hover:underline underline-offset-2">kitchenasia@gmail.com</a>
                                    </div>
                                </article>

                                <!-- Hours — accent card -->
                                <article class="flex items-start gap-4 rounded-2xl border border-orange-200 p-4"
                                    style="background: linear-gradient(135deg, #fff5f0, #fff8f0)">
                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl text-white"
                                        style="
                      background: linear-gradient(135deg, #f68e1d, #f5a623);
                    ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="h-5 w-5">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-bold text-gray-800">
                                            Business Hours
                                        </h3>
                                        <p class="mt-0.5 text-sm font-semibold text-[#f68e1d]">
                                            Mon – Sun: 5:00 PM – 11:30 PM
                                        </p>
                                    </div>
                                </article>
                            </div>

                            <!-- Action buttons -->
                            <div class="mt-7 flex gap-3">
                                <a href="https://maps.google.com" target="_blank" rel="noopener noreferrer"
                                    class="flex flex-1 items-center justify-center gap-2 rounded-full border border-gray-200 py-3 text-sm font-semibold text-gray-800 hover:bg-gray-50 active:scale-95 transition-all duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4 text-[#c3181e]">
                                        <path d="M3 12h18M3 6h18M3 18h18" />
                                    </svg>
                                    Get Directions
                                </a>
                                <a href="tel:01898795400"
                                    class="flex flex-1 items-center justify-center gap-2 rounded-full py-3 text-sm font-semibold text-white shadow-md hover:opacity-90 active:scale-95 transition-all duration-150"
                                    style="background: linear-gradient(135deg, #c3181e, #f68e1d)">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4">
                                        <path
                                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                                    </svg>
                                    Call Now
                                </a>
                            </div>

                            <!-- Social row -->
                            <div
                                class="mt-6 flex items-center gap-3 border-t border-gray-100 pt-5 text-xs font-semibold uppercase tracking-wider text-gray-400">
                                Follow us
                                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"
                                    aria-label="Facebook"
                                    class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 text-gray-500 hover:bg-[#c3181e] hover:text-white transition-all duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-3.5 w-3.5">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </a>
                                <a href="#" aria-label="Instagram"
                                    class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 text-gray-500 hover:bg-[#c3181e] hover:text-white transition-all duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-3.5 w-3.5">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="mt-6 overflow-hidden rounded-3xl shadow-xl ring-1 ring-gray-100">
                        <div
                            class="flex items-center gap-2 bg-white px-5 py-3 text-xs font-semibold text-gray-500 border-b border-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4 w-4 text-[#c3181e]">
                                <path fill-rule="evenodd"
                                    d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-2.079 3.678-5.067 3.678-8.326 0-4.5-3.642-8.25-8.25-8.25S3.75 7.449 3.75 11.75c0 3.259 1.734 6.247 3.677 8.326a19.575 19.575 0 002.684 2.282 16.975 16.975 0 001.143.742zM12 13.5a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                    clip-rule="evenodd" />
                            </svg>
                            Halishahar, Chittagong
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.669527376662!2d91.7766299!3d22.3283281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDE5JzQyLjAiTiA5McKwNDYnMzUuOSJF!5e0!3m2!1sen!2sbd!4v1620000000000!5m2!1sen!2sbd"
                            allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            title="Kitchen Asia location map" class="h-64 w-full">
                        </iframe>
                    </div>
                </aside>

                <!-- ═══ RIGHT: Contact Form ═══ -->
                <div class="order-1 lg:order-2">
                    <div class="sticky top-24">
                        <!-- Form card -->
                        <div class="rounded-3xl bg-white shadow-xl ring-1 ring-gray-100 overflow-hidden">
                            <!-- Gradient top bar -->
                            <div class="h-2 w-full" style="background: linear-gradient(90deg, #f68e1d, #c3181e)"></div>

                            <div class="p-4 md:p-8">
                                <!-- Card heading -->
                                <div class="mb-7">
                                    <span
                                        class="inline-flex items-center gap-1.5 rounded-full border border-orange-200 bg-orange-50 px-3 py-1 text-xs font-bold uppercase tracking-widest text-[#c3181e]">
                                        ✉ Get in Touch
                                    </span>
                                    <h3 class="mt-3 text-2xl font-extrabold text-gray-900">
                                        Send us a Message
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-400">
                                        We'd love to hear from you. We'll get back to you shortly.
                                    </p>
                                </div>

                                <!-- Success alert (hidden by default) -->
                                <div id="success-alert"
                                    class="hidden mb-6 flex items-start gap-3 rounded-2xl border border-green-200 bg-green-50 p-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-5 w-5 text-green-500 shrink-0 mt-0.5">
                                        <path fill-rule="evenodd"
                                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div>
                                        <p class="text-sm font-bold text-green-800">
                                            Message Sent!
                                        </p>
                                        <p class="text-sm text-green-600">
                                            Thank you for reaching out. We'll get back to you soon.
                                        </p>
                                    </div>
                                </div>

                                <!-- Contact Form -->
                                <form id="contact-form" class="space-y-5" onsubmit="handleSubmit(event)">
                                    <!-- Name + Phone row -->
                                    <div class="grid gap-5 sm:grid-cols-2">
                                        <div class="space-y-1.5">
                                            <label for="name"
                                                class="block text-xs font-bold uppercase tracking-wider text-gray-600">
                                                Full Name <span class="text-[#c3181e]">*</span>
                                            </label>
                                            <div class="relative">
                                                <div
                                                    class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="h-4 w-4 text-gray-400">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                                        <circle cx="12" cy="7" r="4" />
                                                    </svg>
                                                </div>
                                                <input type="text" id="name" name="name" required
                                                    placeholder="Your full name"
                                                    class="w-full rounded-xl border border-gray-200 bg-gray-50 py-3 pl-10 pr-4 text-sm text-gray-800 placeholder-gray-400 outline-none focus:border-[#f68e1d] focus:bg-white focus:ring-2 focus:ring-[#f68e1d]/20 transition-all duration-150" />
                                            </div>
                                        </div>
                                        <div class="space-y-1.5">
                                            <label for="phone"
                                                class="block text-xs font-bold uppercase tracking-wider text-gray-600">
                                                Phone Number <span class="text-[#c3181e]">*</span>
                                            </label>
                                            <div class="relative">
                                                <div
                                                    class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="h-4 w-4 text-gray-400">
                                                        <path
                                                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                                                    </svg>
                                                </div>
                                                <input type="tel" id="phone" name="phone" required
                                                    placeholder="01XXXXXXXXX"
                                                    class="w-full rounded-xl border border-gray-200 bg-gray-50 py-3 pl-10 pr-4 text-sm text-gray-800 placeholder-gray-400 outline-none focus:border-[#f68e1d] focus:bg-white focus:ring-2 focus:ring-[#f68e1d]/20 transition-all duration-150" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Subject -->
                                    <div class="space-y-1.5">
                                        <label for="subject"
                                            class="block text-xs font-bold uppercase tracking-wider text-gray-600">
                                            Subject <span class="text-[#c3181e]">*</span>
                                        </label>
                                        <div class="relative">
                                            <div
                                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-4 w-4 text-gray-400">
                                                    <path
                                                        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                                </svg>
                                            </div>
                                            <select id="subject" name="subject" required
                                                class="w-full appearance-none rounded-xl border border-gray-200 bg-gray-50 py-3 pl-10 pr-4 text-sm text-gray-800 outline-none focus:border-[#f68e1d] focus:bg-white focus:ring-2 focus:ring-[#f68e1d]/20 transition-all duration-150">
                                                <option value="" disabled selected>
                                                    Select a subject…
                                                </option>
                                                <option value="reservation">Table Reservation</option>
                                                <option value="order">Order Enquiry</option>
                                                <option value="catering">Catering / Events</option>
                                                <option value="feedback">Feedback</option>
                                                <option value="membership">Membership Card</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-4 w-4 text-gray-400">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="space-y-1.5">
                                        <label for="message"
                                            class="block text-xs font-bold uppercase tracking-wider text-gray-600">
                                            Message <span class="text-[#c3181e]">*</span>
                                        </label>
                                        <textarea id="message" name="message" rows="5" required
                                            placeholder="Share your thoughts, questions, or feedback…"
                                            class="w-full resize-none rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-800 placeholder-gray-400 outline-none focus:border-[#f68e1d] focus:bg-white focus:ring-2 focus:ring-[#f68e1d]/20 transition-all duration-150"></textarea>
                                        <p class="text-xs text-gray-400">
                                            Minimum 10 characters required.
                                        </p>
                                    </div>

                                    <!-- Submit -->
                                    <button type="submit" id="submit-btn"
                                        class="flex w-full items-center justify-center gap-2 rounded-xl py-3.5 text-sm font-bold text-white shadow-md hover:opacity-90 active:scale-[0.98] transition-all duration-150"
                                        style="
                      background: linear-gradient(135deg, #c3181e, #f68e1d);
                    ">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="h-4 w-4">
                                            <path d="M22 2 11 13" />
                                            <path d="M22 2 15 22 11 13 2 9l20-7z" />
                                        </svg>
                                        <span id="btn-text">Send Message</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('additional_js')
    <script>
        function handleSubmit(e) {
            e.preventDefault();
            const btn = document.getElementById("submit-btn");
            const btnText = document.getElementById("btn-text");
            const successAlert = document.getElementById("success-alert");

            // Loading state
            btn.disabled = true;
            btnText.textContent = "Sending…";

            // Simulate submission
            setTimeout(() => {
                document.getElementById("contact-form").reset();
                successAlert.classList.remove("hidden");
                successAlert.classList.add("flex");
                btn.disabled = false;
                btnText.textContent = "Send Message";
                successAlert.scrollIntoView({
                    behavior: "smooth",
                    block: "nearest"
                });
            }, 1200);
        }
    </script>
@endpush
