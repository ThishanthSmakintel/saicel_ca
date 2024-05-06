@extends('default')

@section('title', 'Saicel Concrete Floor Sealing and Painting Service')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <!-- Left Page Content -->
                <div class="col-lg-6">
                    <h3 class="column-title"><strong style="font-size: 24px;">Concrete Floor Sealing and Painting</strong>
                    </h3>
                    <p style="font-size: 18px; text-align: justify;">We deliver fast, precise, and flawlessly applied floor
                        painting. Whether it’s decorative finishes in
                        retail environments or practical markings which perform essential functions, the results are always
                        sleek, long-lasting, and durable.</p>
                    <p style="font-size: 18px; text-align: justify;">We specialize in floor preparation for commercial and
                        industrial spaces, delivering high-quality
                        finishes that stand up to the demands of your premises. From protecting against spills to minimizing
                        slips and trips, we can incorporate an array of smart systems into our floor painting projects to
                        ensure a functional, beautiful finish that matches your unique requirements.</p>
                    <div class="gap-40"></div>
                    <div class="call-to-action classic">
                        <div class="row align-items-center">
                            <div class="col-md-8 text-center text-md-left">
                                <div class="call-to-action-text">
                                    <h3 class="action-title" style="font-size: 20px;">Need concrete floor sealing or
                                        painting?</h3>
                                </div>
                            </div><!-- Col end -->
                            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                                <div class="call-to-action-btn">
                                    <a class="btn btn-primary" href="#" style="font-size: 16px;">Hire Us</a>
                                </div>
                            </div><!-- col end -->
                        </div><!-- row end -->
                    </div><!-- Action end -->

                </div><!-- Left Page Content End -->

                <!-- Right Page Content -->
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="{{ asset('images/services/service1.jpg') }}" alt="Concrete Floor 1"
                            class="img-fluid rounded">
                    </div>
                </div><!-- Right Page Content End -->
            </div><!-- Content row end -->

            <!-- Image Row -->
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="{{ asset('images/services/service1.jpg') }}" alt="Concrete Floor 2"
                            class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="{{ asset('images/services/service1.jpg') }}" alt="Concrete Floor 3"
                            class="img-fluid rounded">
                    </div>
                </div>
            </div><!-- Image Row end -->
            <p style="font-size: 18px;">You can choose from the following sealant & finishes:</p>
            <ul style="font-size: 18px;">
                <li>Concrete Sealer - Matt Finish</li>
                <li>Concrete Sealer - Silk Finish</li>
                <li>Concrete Sealer - Gloss/Wet Look Finish</li>
                <li>Repair Fluid to Remove Surface Whiteness on Imprinted Concrete</li>
            </ul>
        </div><!-- Container end -->
    </section><!-- Main container end -->

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <!-- Contact form or contact information can be added here -->
        </div>
    </section><!-- Contact Section End -->
@endsection
