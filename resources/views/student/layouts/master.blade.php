<!DOCTYPE html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no made_by_saninator">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Lyceum Kids') }}</title>

    <!--fonts-->
    @include('student.layouts.fonts')

    <!--css-->
    @include('student.layouts.css')

    {{-- <link rel="icon" href="/assets/images/dreamteam.png"> --}}

    @stack('style')
</head>

<body class="custom-cursor">
    <!--cursor-->
    @include('student.layouts.cursor')

    <!--preloader-->
    @include('student.layouts.preloader')

    <div class="page-wrapper">
        <!--navbar-->
        @include('student.layouts.nav')

        <!--content-->
        @yield('content')

        <!--footer-->
        @include('student.layouts.footer')
    </div>
    <!-- /.page-wrapper -->

    <!--mobile-nav -->
    @include('student.layouts.mobile-nav')

    <!--search-popup -->
    @include('student.layouts.search-popup')

    <!--scroll-to-top -->
    @include('student.layouts.scroll-to-top')

    <!--js -->
    @include('student.layouts.js')

    @stack('script')

</body>

</html>
