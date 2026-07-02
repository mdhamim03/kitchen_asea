<!DOCTYPE html>
<html lang="bn">
@include('frontend.templates.partials.frontend_head')

{{-- bg-[#f9fafb]" --}}
{{-- #c3181e #f68e1d --}}
<body class="bg-gray-50 min-h-screen" style="font-family:'Inter',sans-serif">

    <!-- COMPONENT: HEADER -->
    <x-header.header/>
    <!-- COMPONENT: CART DRAWER -->
     <x-carts.cart-drawer />
    <!-- =========== Main Section Start =========== -->
    <main id="main" class="">
        @yield('main_content')
    </main>
    <!-- =========== Main Section End =========== -->
    <!-- COMPONENT: FOOTER -->
    <x-footer.footer />
    @include('frontend.templates.partials.frontend_footer_script')
</body>

</html>