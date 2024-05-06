@extends('default')

@section('title', 'Saicel Management Planning Services')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="column-title">Site Management & Planning</h3>
                    <p>SAI Civil Engineering offers a wide range of civil engineering services for contractors and local
                        residents, providing peace of mind that they are dealing with a single contractor capable of
                        offering quality workmanship and service tailored to their needs.</p>
                    <p>Our services include:</p>
                    <ul>
                        <li>Project Management & Project Planning</li>
                        <li>HSE Guidance & CDM regulations</li>
                        <li>Carrying out Risk Assessments and producing Method Statements</li>
                        <li>Site Health & Safety Inspections & Reports</li>
                        <li>Planning applications for home improvements & extensions</li>
                        <li>Dealing with Architects & local building control</li>
                        <li>Property management including repairs, renovation, extensions, and rebuilds</li>
                    </ul>
                </div><!-- Col end -->

                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div id="page-slider" class="page-slider small-bg">

                        <div class="item" style="background-image:url({{ asset('images/services/service1.jpg') }})">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Project Management</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Item 1 end -->

                        <div class="item" style="background-image:url({{ asset('images/services/service1.jpg') }})">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Risk Assessment</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Item 2 end -->

                        <div class="item" style="background-image:url({{ asset('images/services/service1.jpg') }})">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Planning Application</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Item 3 end -->
                    </div><!-- Page slider end-->
                </div><!-- Col end -->
            </div><!-- Content row end -->
        </div><!-- Container end -->
    </section><!-- Main container end -->
@endsection
