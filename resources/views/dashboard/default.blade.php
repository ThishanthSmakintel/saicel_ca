<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="#" />
    <link rel="icon" type="image/png" href="{{ asset('dashboard/img/favicon.ico') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="title" content="Ask online Form" />
    <meta name="description" content=">@yield('title')"> />
    <meta name="keywords" content="" />
    <meta name="robots" content="index, nofollow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="English" />
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{ asset('dashboard/css/fontawesome-all.min.css') }}" />
    <link href="{{ asset('dashboard/css/materil.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/css/responsive.css') }}" rel="stylesheet" />
</head>


<body class="">
    <div class="wrapper">
        {{-- Sidebar START --}}
        @include('dashboard.include.sidebar')
        {{-- Sidebar END --}}

        <div class="main-panel">
            <!-- Navbar -->
            @include('dashboard.include.navbar')
            <!-- End Navbar -->
            @yield('dashboardContent')
            <!-- End of Content Section -->
        </div>


        <!-- Core JS Files -->
        <script src="{{ asset('dashboard/js/vendor/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/popper.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/bootstrap-material-design.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/perfect-scrollbar.jquery.min.js') }}"></script>
        <!-- Plugin for the momentJs -->
        <script src="{{ asset('dashboard/js/moment.min.js') }}"></script>
        <!-- Plugin for Sweet Alert -->
        <script src="{{ asset('dashboard/js/sweetalert2.js') }}"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{ asset('dashboard/js/jquery.validate.min.js') }}"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{ asset('dashboard/js/jquery.bootstrap-wizard.js') }}"></script>
        <!-- Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{ asset('dashboard/js/bootstrap-selectpicker.js') }}"></script>
        <!-- Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('dashboard/js/bootstrap-datetimepicker.min.js') }}"></script>
        <!-- DataTables.net Plugin, full documentation here: https://datatables.net/ -->
        <script src="{{ asset('dashboard/js/jquery.dataTables.min.js') }}"></script>
        <!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs -->
        <script src="{{ asset('dashboard/js/bootstrap-tagsinput.js') }}"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{ asset('dashboard/js/jasny-bootstrap.min.js') }}"></script>
        <!-- Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar -->
        <script src="{{ asset('dashboard/js/fullcalendar.min.js') }}"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dynamically elements -->
        <script src="{{ asset('dashboard/js/arrive.min.js') }}"></script>
        <!-- Google Maps Plugin -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Chartist JS -->
        <script src="{{ asset('dashboard/js/chartist.min.js') }}"></script>
        <!-- Notifications Plugin -->
        <script src="{{ asset('dashboard/js/bootstrap-notify.js') }}"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('dashboard/js/material-dashboard.min.js?v=2.1.2') }}" type="text/javascript"></script>
        <script src="{{ asset('dashboard/js/main.js') }}"></script>


        <script>
            $(document).ready(function() {
                $().ready(function() {
                    $sidebar = $(".sidebar");

                    $sidebar_img_container = $sidebar.find(".sidebar-background");

                    $full_page = $(".full-page");

                    $sidebar_responsive = $("body > .navbar-collapse");

                    window_width = $(window).width();

                    fixed_plugin_open = $(
                        ".sidebar .sidebar-wrapper .nav li.active a p"
                    ).html();

                    if (window_width > 767 && fixed_plugin_open == "Dashboard") {
                        if ($(".fixed-plugin .dropdown").hasClass("show-dropdown")) {
                            $(".fixed-plugin .dropdown").addClass("open");
                        }
                    }

                    $(".fixed-plugin a").click(function(event) {
                        if ($(this).hasClass("switch-trigger")) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (window.event) {
                                window.event.cancelBubble = true;
                            }
                        }
                    });

                    $(".fixed-plugin .active-color span").click(function() {
                        $full_page_background = $(".full-page-background");

                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");

                        var new_color = $(this).data("color");

                        if ($sidebar.length != 0) {
                            $sidebar.attr("data-color", new_color);
                        }

                        if ($full_page.length != 0) {
                            $full_page.attr("filter-color", new_color);
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.attr("data-color", new_color);
                        }
                    });

                    $(".fixed-plugin .background-color .badge").click(function() {
                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");

                        var new_color = $(this).data("background-color");

                        if ($sidebar.length != 0) {
                            $sidebar.attr("data-background-color", new_color);
                        }
                    });

                    $(".fixed-plugin .img-holder").click(function() {
                        $full_page_background = $(".full-page-background");

                        $(this).parent("li").siblings().removeClass("active");
                        $(this).parent("li").addClass("active");

                        var new_image = $(this).find("img").attr("src");

                        if (
                            $sidebar_img_container.length != 0 &&
                            $(".switch-sidebar-image input:checked").length != 0
                        ) {
                            $sidebar_img_container.fadeOut("fast", function() {
                                $sidebar_img_container.css(
                                    "background-image",
                                    'url("' + new_image + '")'
                                );
                                $sidebar_img_container.fadeIn("fast");
                            });
                        }

                        if (
                            $full_page_background.length != 0 &&
                            $(".switch-sidebar-image input:checked").length != 0
                        ) {
                            var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                                .find("img")
                                .data("src");

                            $full_page_background.fadeOut("fast", function() {
                                $full_page_background.css(
                                    "background-image",
                                    'url("' + new_image_full_page + '")'
                                );
                                $full_page_background.fadeIn("fast");
                            });
                        }

                        if ($(".switch-sidebar-image input:checked").length == 0) {
                            var new_image = $(".fixed-plugin li.active .img-holder")
                                .find("img")
                                .attr("src");
                            var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                                .find("img")
                                .data("src");

                            $sidebar_img_container.css(
                                "background-image",
                                'url("' + new_image + '")'
                            );
                            $full_page_background.css(
                                "background-image",
                                'url("' + new_image_full_page + '")'
                            );
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.css(
                                "background-image",
                                'url("' + new_image + '")'
                            );
                        }
                    });

                    $(".switch-sidebar-image input").change(function() {
                        $full_page_background = $(".full-page-background");

                        $input = $(this);

                        if ($input.is(":checked")) {
                            if ($sidebar_img_container.length != 0) {
                                $sidebar_img_container.fadeIn("fast");
                                $sidebar.attr("data-image", "#");
                            }

                            if ($full_page_background.length != 0) {
                                $full_page_background.fadeIn("fast");
                                $full_page.attr("data-image", "#");
                            }

                            background_image = true;
                        } else {
                            if ($sidebar_img_container.length != 0) {
                                $sidebar.removeAttr("data-image");
                                $sidebar_img_container.fadeOut("fast");
                            }

                            if ($full_page_background.length != 0) {
                                $full_page.removeAttr("data-image", "#");
                                $full_page_background.fadeOut("fast");
                            }

                            background_image = false;
                        }
                    });

                    $(".switch-sidebar-mini input").change(function() {
                        $body = $("body");

                        $input = $(this);

                        if (md.misc.sidebar_mini_active == true) {
                            $("body").removeClass("sidebar-mini");
                            md.misc.sidebar_mini_active = false;

                            $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar();
                        } else {
                            $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar(
                                "destroy"
                            );

                            setTimeout(function() {
                                $("body").addClass("sidebar-mini");

                                md.misc.sidebar_mini_active = true;
                            }, 300);
                        }

                        var simulateWindowResize = setInterval(function() {
                            window.dispatchEvent(new Event("resize"));
                        }, 180);

                        setTimeout(function() {
                            clearInterval(simulateWindowResize);
                        }, 1000);
                    });
                });
            });
        </script>
</body>

</html>
