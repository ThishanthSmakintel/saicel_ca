@extends('default')

@section('title', 'services Setting Out Levelling Service')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <!-- Left Page Content -->
                <div class="col-lg-6">
                    <h3 class="column-title"><strong>Setting out & Surveying</strong></h3>
                    <p>Experienced setting out engineers use modern technology and instrumentation combined with National
                        Grid and Ordnance Survey coordinates. They physically and precisely mark out details from survey
                        data, drawings, and models onto the ground using pegs.</p>
                    <p>They can pinpoint positions and set out subterranean features such as pile positions, drainage, and
                        ground beams as well as structures to be built above ground such as gridlines, brickwork, stud
                        walls, columns, cladding, reinforced concrete slabs.</p>
                    <p>Saicel UK offers a variety of surveying and engineering services throughout the UK. They provide
                        topographical surveys, measured land/building surveys, and underground detection surveys. Using the
                        data collected, the team of setting out engineers will get your project ready for construction.</p>
                    <p></p>
                    <div class="call-to-action classic">
                        <div class="row align-items-center">
                            <div class="col-md-8 text-center text-md-left">
                                <div class="call-to-action-text">
                                    <h3 class="action-title">Need a site engineer or surveyor?
                                </div>
                            </div><!-- Col end -->
                            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                                <div class="call-to-action-btn">
                                    <a class="btn btn-primary" href="#">Contact Us for a free quotation.</a>
                                </div>
                            </div><!-- col end -->

                        </div><!-- row end -->
                    </div><!-- Action end -->
                    <p>Our Engineers can carry out all major civil engineering setting out works:</p>
                    <ul>
                        <li>New buildings</li>
                        <li>Foundations</li>
                        <li>Brickwork</li>
                        <li>Stud walls</li>
                        <li>RC slabs</li>
                        <li>Cladding</li>
                        <li>Columns</li>
                        <li>Roads and road curves</li>
                        <li>Drainage layouts</li>
                        <li>Ground beams</li>
                        <li>Piles</li>
                        <li>Gridlines</li>
                    </ul>
                </div><!-- Left Page Content End -->

                <!-- Right Page Content -->
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="{{ asset('images/services/service2.jpg') }}" alt="Setting out & Surveying"
                            class="img-fluid rounded">
                        <div class="gap-40"></div>
                        <img src="{{ asset('images/services/service2.jpg') }}" alt="Setting out & Surveying"
                            class="img-fluid rounded">
                        <div class="gap-40"></div>
                        <div class="gap-40"></div>
                    </div>
                    <p>Our Surveyors can carry out:</p>
                    <ul>
                        <li>Land Surveys</li>
                        <li><a href="https://en.wikipedia.org/wiki/3D_scanning" target="_blank">3D Laser Scanning
                                Surveys</a></li>
                        <li>Area Calculation</li>
                        <li>GPS Land Surveys</li>
                        <li>Measured Building Surveys</li>
                        <li><a href="https://en.wikipedia.org/wiki/Topographic_survey" target="_blank">Topographical
                                Surveys</a></li>
                        <li>CCTV Drainage Survey for detections</li>
                    </ul>
                </div><!-- Right Page Content End -->

            </div><!-- Content row end -->
        </div><!-- Container end -->
    </section><!-- Main container end -->

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <!-- Contact form or contact information can be added here -->
        </div>
    </section><!-- Contact Section End -->
@endsection
