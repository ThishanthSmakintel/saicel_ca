@extends('default')

@section('title', 'Saicel Roof Sealing Service')

@section('content')
    <!-- Roof Sealing Section -->
    <section class="card mx-0 shadow">
        <div class="card-body text-left">
            <div class="container">
                <div class="row text-left align-items-center">
                    <div class="col-lg-6 ">
                        <div class="ts-service-box bg-image hover-zoom">
                            <img loading="lazy" class="img-fluid"
                                src="{{ asset('images/sealing-services/sealing-area-types/roof-sealing.jpg') }}"
                                alt="Deck Sealing">
                        </div><!-- Service box end -->

                    </div><!-- Col end -->
                    <div class="col-lg-6 ">
                        <div class="ts-service-box my-2">
                            <div class="ts-service-box-info mb-4"> <!-- Adjusted margin-bottom to mb-4 for added spacing -->
                                <h3 class="service-box-title" style="font-size: 22px;"><strong>Professional Roof Sealing
                                        Services</strong></h3>
                                <p>Protect and enhance the lifespan of your roof with our expert roof sealing services:</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><strong><i class="fas fa-shield-alt"></i> Waterproofing:</strong> We
                                        provide effective waterproofing solutions to prevent water damage and leakage.</li>
                                    <li class="mb-2"><strong><i class="fas fa-sun"></i> UV Protection:</strong> Our
                                        sealing solutions include UV-resistant coatings to shield your roof from sun damage
                                        and deterioration.</li>
                                    <li class="mb-2"><strong><i class="fas fa-cloud"></i> Weatherproofing:</strong> Ensure
                                        your roof withstands harsh weather conditions with our weatherproof sealing
                                        solutions.</li>
                                    <li class="mb-2"><strong><i class="fas fa-handshake"></i> Reliability:</strong> Count
                                        on our reliable team to deliver high-quality workmanship and lasting results for
                                        your roof sealing needs.</li>
                                </ul>
                                <p>Trust us to protect and preserve your roof, ensuring durability and longevity for years
                                    to come.</p>
                            </div>
                        </div><!-- Service box end -->

                    </div><!-- Col end -->
                </div><!--/ Title row end -->
            </div><!--/ Container end -->
        </div>
    </section>

    <!-- Additional Information Section -->
    <section class="card mx-0 shadow ">
        <div class="card-body text-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ts-service-box mb-4 ">
                            <div class="ts-service-box-info">
                                <h4 class="service-box-title">Types of Roof Sealing</h4>
                                <p>Explore our range of roof sealing options tailored to your specific needs:</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check"></i> Silicone Roof Coatings</li>
                                    <li><i class="fas fa-check"></i> Acrylic Roof Coatings</li>
                                    <li><i class="fas fa-check"></i> Polyurethane Roof Coatings</li>
                                </ul>
                            </div>
                        </div><!-- Service box end -->
                    </div><!-- Col end -->
                    <div class="col-lg-4">
                        <div class="ts-service-box mb-4 ">
                            <div class="ts-service-box-info">
                                <h4 class="service-box-title">Benefits of Roof Sealing</h4>
                                <p>Discover the advantages of roof sealing for your property:</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check"></i> Waterproofing</li>
                                    <li><i class="fas fa-check"></i> UV Protection</li>
                                    <li><i class="fas fa-check"></i> Energy Efficiency</li>
                                </ul>
                            </div>
                        </div><!-- Service box end -->
                    </div><!-- Col end -->
                    <div class="col-lg-4">
                        <div class="ts-service-box mb-4">
                            <div class="ts-service-box-info">
                                <h4 class="service-box-title">Why Choose Us?</h4>
                                <p>Discover why we're your ideal choice for roof sealing:</p>
                                <ul>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check"></i> Experienced Professionals</li>
                                        <li><i class="fas fa-check"></i> High-Quality Materials</li>
                                        <li><i class="fas fa-check"></i> Customer Satisfaction Guarantee</li>
                                    </ul>
                            </div>
                        </div><!-- Service box end -->
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div>
    </section>
    <!-- Additional Information Section End -->

    <!-- Contact Section -->
    <section id="contact" class="contact-section mt-4">
        <div class="container">
            <div class="call-to-action classic">
                <div class="row align-items-center">
                    <div class="col-md-8 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title" style="font-size: 20px;"><i class="fas fa-paint-roller"></i>
                                Ready to seal your roof?</h3>
                        </div>
                    </div><!-- Col end -->
                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                        <div class="call-to-action-btn">
                            <a class="btn btn-primary" href="{{ route('contact-us') }}" style="font-size: 16px;">Hire Us</a>

                        </div>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- Action end -->
        </div>
    </section><!-- Contact Section End -->
@endsection
