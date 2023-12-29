<!DOCTYPE html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no made_by_saninator">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--fonts-->
    @include('guest.layouts.fonts')

    <!--css-->
    @include('guest.layouts.css')

    {{-- <link rel="icon" href="/assets/images/dreamteam.png"> --}}

    @stack('style')
</head>

<body class="custom-cursor">
    <!--cursor-->
    @include('guest.layouts.cursor')

    <!--preloader-->
    @include('guest.layouts.preloader')

    <div class="page-wrapper">
        <!--navbar-->
        @include('guest.layouts.nav')

        <!--content-->
        @yield('content')

        <!--footer-->
        @include('guest.layouts.footer')
    </div>
    <!-- /.page-wrapper -->

    <!--mobile-nav -->
    @include('guest.layouts.mobile-nav')

    <!--search-popup -->
    @include('guest.layouts.search-popup')

    <!--scroll-to-top -->
    @include('guest.layouts.scroll-to-top')

    <!--js -->
    @include('guest.layouts.js')

    @stack('script')

</body>

</html>
