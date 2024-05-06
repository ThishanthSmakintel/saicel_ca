@extends('default')

@section('title', 'Saicel Protection Screens Fitting Service')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <!-- Left Page Content -->
                <div class="col-lg-6">
                    <h3 class="column-title"><strong>Protection Screens Fitting Services</strong></h3>
                    <p>Plastic protective screens for checkout areas to protect cashiers from the highly infectious
                        coronavirus currently sweeping through the nation.</p>
                    <p>We are offering this simple but innovative solution for Supermarkets, Pharmacies, and other essential
                        points of sale to make their staff feel safe.</p>
                    <h4>Available for:</h4>
                    <ul>
                        <li>Pharmacies</li>
                        <li>Supermarkets</li>
                        <li>Service Stations</li>
                        <li>Airports</li>
                        <li>Hospitals</li>
                        <li>Dentists</li>
                        <li>Hotels</li>
                    </ul>
                </div><!-- Left Page Content End -->

                <!-- Right Page Content -->
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="{{ asset('images/services/service1.jpg') }}" alt="Protection Screen 1"
                            class="img-fluid rounded">
                    </div>
                    <div class="text-center mt-4">
                        <img src="{{ asset('images/services/service1.jpg') }}" alt="Protection Screen 2"
                            class="img-fluid rounded">
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
