@extends('default')

@section('title', 'Saicel Concrete Floor Sealing and Painting Service')

@section('content')
    <section id="main-container" class="main-containe card shadow">
        <div class="container">
            <div class="row">
                <!-- Left Page Content -->
                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="column-title"><strong>Sealing Patios</strong></h3>
                            <p>Transform your outdoor living space with our professional patio sealing service.
                                <strong>Patios</strong> are a focal
                                point of outdoor gatherings, and keeping them clean, protected, and visually appealing is
                                essential.
                                Our patio sealing service is designed to enhance the durability, aesthetics, and longevity
                                of your
                                patio.
                            </p>
                            <p>Our comprehensive patio sealing process includes:</p>
                            <ul>
                                <li><strong>Thorough Cleaning:</strong> We utilize high-power turbo lance wash cleaning to
                                    remove
                                    stubborn stains, dirt, algae, and other contaminants from the surface of your patio.
                                </li>
                                <li><strong>Resanding:</strong> After cleaning, we meticulously re-sand the surface to
                                    ensure proper
                                    leveling and stability, creating a smooth and uniform foundation.</li>
                                <li><strong>Sealant Application:</strong> We apply premium-quality sealants tailored to your
                                    patio
                                    surface, providing protection against moisture, UV damage, stains, and color fading. Our
                                    sealants enhance the natural beauty of your patio while offering long-lasting
                                    durability.</li>
                            </ul>
                            <p>Choose from our range of sealant options to achieve the desired finish and protection for
                                your patio,
                                including:</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check"></i> <strong>Patio Sealer for Pre-cast Concrete Slabs and
                                        Flagstones</strong></li>
                                <li><i class="fas fa-check"></i> <strong>Sandstone/Natural Stone Sealer 'DRY' Natural
                                        Finish</strong></li>
                                <li><i class="fas fa-check"></i> <strong>Ultimate Colour Enhancer - Darkens & Enriches
                                        Existing Colour</strong></li>
                                <li><i class="fas fa-check"></i> <strong>Sandstone/Natural Stone Sealer 'COLOUR-ENHANCED'
                                        Finish</strong></li>
                                <li><i class="fas fa-check"></i> <strong>Sandstone/Natural Stone Sealer - WET LOOK
                                        finish</strong></li>
                                <li><i class="fas fa-check"></i> <strong>Limestone Sealer for Patios and Floors</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Left Page Content End -->

                <!-- Right Page Content -->
                <div class="col-lg-6">
                    <div>
                        <img src="{{ asset('images/sealing-services/sealing-area-types/img-patios.jpg') }}" alt="Patios"
                            class="card-img-top img-fluid rounded">
                        <div class="card-body">
                            <div class="gap-60"></div>
                            <div class="call-to-action classic">
                                <div class="row align-items-center">
                                    <div class="col-md-8 text-center text-md-left">
                                        <div class="call-to-action-text">
                                            <h3 class="action-title">Ready to Enhance Your Patio?</h3>
                                        </div>
                                    </div><!-- Col end -->
                                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                                        <div class="call-to-action-btn">
                                            <a class="btn btn-primary" href="{{ route('contact-us') }}">Get Started</a>
                                        </div>
                                    </div><!-- col end -->
                                </div><!-- row end -->
                            </div><!-- Action end -->
                        </div>
                    </div>
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
