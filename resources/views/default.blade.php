<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- Mobile Specific Metas -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=">@yield('title')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/CompanyLogo.ico') }}">

    <!-- CSS files inclusion -->
    @include('include.layouts.css-paths')
    <!-- End of CSS files inclusion -->
</head>

<body>
    <div class="body-inner">
        @include('include.sections.top-bar')
        <!-- Header start -->
        @include('include.layouts.header')
        <!-- Header end -->

        <!-- Loader -->
        <div id="loader">
            <div class="spinner">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <!-- Content Section -->
        @yield('content')
        <!-- End of Content Section -->

        <!-- Footer -->
        @include('include.layouts.footer')
        <!-- Footer end -->

        <!-- JavaScript Files inclusion -->
        @include('include.layouts.js-paths')
        <!-- End of JavaScript Files inclusion -->
    </div>
    <!-- Body inner end -->
</body>

</html>
