@extends('default')

@section('title', 'Saicel Concrete Driveway Sealing and Painting Service')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <!-- Left Page Content -->
                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="column-title"><strong>Driveways Sealing</strong></h3>
                            <p>Transform your driveway with our professional services. We specialize in revitalizing
                                worn-out driveways, bringing them back to life with expert techniques and high-quality
                                sealants.</p>
                            <p>Our comprehensive driveway sealing process includes:</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check"></i> <strong>Thorough Cleaning:</strong> Utilizing high-powered
                                    equipment to remove dirt, grime, and stains, ensuring a pristine surface.</li>
                                <li><i class="fas fa-check"></i> <strong>Resanding:</strong> Meticulously re-sanding the
                                    surface to ensure proper leveling and stability.</li>
                                <li><i class="fas fa-check"></i> <strong>Sealant Application:</strong> Applying
                                    premium-quality sealants tailored to your driveway surface, offering protection against
                                    moisture, UV damage, and stains while enhancing its appearance.</li>
                            </ul>
                            <p>Choose from our range of sealant options to achieve the desired finish and protection for
                                your driveway:</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check"></i> Matte Finish Driveway Sealant</li>
                                <li><i class="fas fa-check"></i> Silk Finish Driveway Sealant</li>
                                <li><i class="fas fa-check"></i> Eco-Friendly Water-Based Driveway Sealant</li>
                                <li><i class="fas fa-check"></i> Ultra-Durable Polyurethane Driveway Sealant</li>
                                <li><i class="fas fa-check"></i> Driveway Sealant and Color Restorer in Red</li>
                                <li><i class="fas fa-check"></i> Driveway Sealant and Color Restorer in Black</li>
                                <li><i class="fas fa-check"></i> Gloss Finish Driveway Sealant</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Left Page Content End -->

                <!-- Right Page Content -->
                <div class="col-lg-6">
                    <div class="mt-2">
                        <img src="{{ asset('images/sealing-services/sealing-area-types/img-driveways.jpg') }}"
                            alt="Driveways" class="card-img-top img-fluid rounded">
                        <div class="card-body">
                            <div class="gap-60"></div>
                            <div class="call-to-action classic">
                                <div class="row align-items-center">
                                    <div class="col-md-8 text-center text-md-left">
                                        <div class="call-to-action-text">
                                            <h3 class="action-title">Ready to Enhance Your Driveway?</h3>
                                        </div>
                                    </div><!-- Col end -->
                                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                                        <div class="call-to-action-btn">
                                            <a class="btn btn-primary" href="{{ route('contact-us') }}">Contact Us</a>
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
