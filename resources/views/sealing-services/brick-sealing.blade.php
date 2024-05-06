@extends('default')

@section('title', 'Saicel Home Insulation Service')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <!-- Brick Sealing Section -->
            <div class="row mt-4">
                <div class="col-lg-12">
                    <h2 class="column-title"><strong>Brick Sealing</strong></h2>
                    <p>Brick sealing is essential for maintaining the integrity and appearance of your home's exterior.
                        Sealing your brickwork helps to protect it from water damage, mold growth, and efflorescence.</p>
                    <p>Our brick sealing service involves thoroughly cleaning the bricks and applying a high-quality sealant
                        to ensure long-lasting protection.</p>
                    <p>Contact us today to learn more about our brick sealing service.</p>
                </div>
            </div><!-- Brick Sealing Section End -->

            <!-- Content Row -->
            <div class="row">
                <!-- Left Page Content -->
                <div class="col-lg-6">
                    <h3 class="column-title"><strong>Cavity Wall Insulation</strong></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check"></i> Generally, homes built between 1930 and 1995 have empty cavity
                            walls.</li>
                        <li><i class="fas fa-check"></i> Cavity wall insulation involves filling the cavity with an
                            insulating material.</li>
                        <li><i class="fas fa-check"></i> The process usually takes around 2-3 hours.</li>
                    </ul>
                </div><!-- Left Page Content End -->

                <!-- Right Page Content -->
                <div class="col-lg-6">
                    <h3 class="column-title"><strong>Loft Insulation</strong></h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check"></i> Loft insulation is an effective way to save energy and money.</li>
                        <li><i class="fas fa-check"></i> It involves laying rolls of insulating material between and across
                            the joists.</li>
                        <li><i class="fas fa-check"></i> The work usually takes around 1-2 hours depending on property size.
                        </li>
                    </ul>
                </div><!-- Right Page Content End -->
            </div><!-- Content row end -->



            <!-- Image Row -->
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="card">
                        <img src="{{ asset('images/sealing-services/sealing-area-types/brick-sealing2.jpg') }}"
                            alt="Cavity Wall Insulation" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Cavity Wall Insulation</h5>
                            <p class="card-text">Insulate your home's cavity walls to save energy and reduce your bills.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <img src="{{ asset('images/sealing-services/sealing-area-types/brick-sealing.jpg') }}"
                            alt="Loft Insulation" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Loft Insulation</h5>
                            <p class="card-text">Keep your home warm and energy-efficient by insulating your loft.</p>
                        </div>
                    </div>
                </div>
            </div><!-- Image Row end -->
            <!-- Call to Action -->
            <div class="call-to-action classic mt-4">
                <div class="row align-items-center">
                    <div class="col-md-8 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">Need driveway cleaning or sealing?</h3>
                        </div>
                    </div><!-- Col end -->
                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                        <div class="call-to-action-btn">
                            <a class="btn btn-primary" href="{{ route('contact-us') }}">Hire Us</a>
                        </div>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- Call to Action end -->
        </div><!-- Container end -->
    </section><!-- Main container end -->

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <!-- Contact form or contact information can be added here -->
        </div>
    </section><!-- Contact Section End -->
@endsection
