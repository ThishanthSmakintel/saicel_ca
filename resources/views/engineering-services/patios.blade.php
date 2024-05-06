@extends('default')

@section('title', 'Saicel Patios Service')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <!-- Left Page Content -->
                <div class="col-lg-6">
                    <h3 class="column-title"><strong>Patios</strong></h3>
                    <p>Hire us for high power turbo lance wash cleaning, removing all stubborn weeds and stains. We apply
                        de-greaser and detergents to remove any oil leaks or stains.</p>
                    <p>After thorough cleaning, we apply kiln dried sand and re-sand the entire area once completely dry.
                        The sanded surface is then given a final sweep.</p>
                    <p>Next, we apply Smart Seal sealant, providing a durable gloss or matt finish to the surface. This
                        helps prevent weed growth, stabilizes the sand, and stops oil and other liquids from penetrating the
                        surface for easy removal. The sealant can be applied by spray, roller, or squeegee.</p>
                    <p>You can choose from the following sealant & finishes:</p>
                    <ul>
                        <li>Patio Sealer for Pre-cast Concrete Slabs and Flagstones</li>
                        <li>Sandstone/Natural Stone Sealer 'DRY' Natural Finish</li>
                        <li>Ultimate Colour Enhancer - Darkens & Enriches Existing Colour</li>
                        <li>Sandstone/Natural Stone Sealer 'COLOUR-ENHANCED' Finish</li>
                        <li>Sandstone/Natural Stone Sealer - WET LOOK finish</li>
                        <li>Limestone Sealer for Patios and Floors</li>
                        <li>Limestone Sealer for Patios and Floors</li>
                    </ul>

                </div><!-- Left Page Content End -->

                <!-- Right Page Content -->
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="{{ asset('images/services/service1.jpg') }}" alt="Patios" class="img-fluid rounded">
                    </div>
                    <div class="gap-60"></div>
                    <div class="call-to-action classic">
                        <div class="row align-items-center">
                            <div class="col-md-8 text-center text-md-left">
                                <div class="call-to-action-text">
                                    <h3 class="action-title">Need driveway cleaning or sealing?</h3>
                                </div>
                            </div><!-- Col end -->
                            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                                <div class="call-to-action-btn">
                                    <a class="btn btn-primary" href="#">Hire Us</a>
                                </div>
                            </div><!-- col end -->
                        </div><!-- row end -->
                    </div><!-- Action end -->
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
