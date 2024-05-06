<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Saicel.ca | Home</title>

    <!-- Mobile Specific Metas -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/CompanyLogo.ico') }}">

    <!-- CSS files inclusion -->
    @include('include.layouts.css-paths')
    <!-- End of CSS files inclusion -->
</head>

<body>
    <div class="body-inner">

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

        @include('include.sections.top-bar')
        <!-- Top bar end -->

        <!-- Header start -->
        @include('include.layouts.header')
        <!-- Header end -->

        <!-- Slide show -->
        @include('include.sections.slide-show')
        <!-- Slide show end -->

        <!-- Section 2 -->
        @include('include.sections.section2')
        <!-- Section 2 end -->

        <!-- Section 3 (Hours of Work) -->
        {{-- @include('include.sections.section3') --}}
        <!-- Section 3 end -->

        <!-- Section (Cleaning Services) -->
        @include('include.sections.section-info-card-cleaning')
        <!-- Section end -->

        <!-- Section (Getting Started) -->
        @include('include.sections.section')
        <!-- Section end -->

        <!-- Section 3 (Sealing Services) -->
        @include('include.sections.section-info-card-sealing')
        <!-- Section 3 end -->

        <!-- Section 4 -->
        @include('include.sections.section-info-card-property-maintance')
        <!-- Section 4 end -->

        <!-- Section 5 (Course Details with Alison) -->
        @include('include.sections.section5')
        <!-- Section 5 end (Course Details with Alison) -->

        <!-- Section 8 (News) -->
        @include('include.sections.section8-news')
        <!-- Section 8 end -->

        <!-- Section 6 -->
        @include('include.sections.section6')
        <!-- Section 6 end -->

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
