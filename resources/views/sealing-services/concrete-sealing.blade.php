@extends('default')

@section('title', 'Saicel Concrete Floor Sealing ')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <!-- Left Page Content -->
                <div class="col-lg-6">
                    <div class="mb-4">
                        <div class="card-body">
                            <h3 class="card-title"><strong>Concrete Sealing</strong></h3>
                            <p class="card-text">We provide efficient and precise floor sealing and painting services.
                                Whether it's decorative finishes for retail spaces or functional markings for industrial
                                environments, our results are always sleek, durable, and long-lasting.</p>
                            <p class="card-text">Specializing in floor preparation for commercial and industrial areas, we
                                deliver high-quality finishes that meet the demands of your premises. From spill protection
                                to slip resistance, we incorporate smart systems to ensure a functional and aesthetically
                                pleasing finish tailored to your needs.</p>
                        </div>
                    </div>
                    <div class="gap-40"></div>
                </div><!-- Left Page Content End -->

                <!-- Right Page Content -->
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <img src="{{ asset('images/sealing-services/sealing-area-types/img-concrete.jpg') }}"
                            alt="Concrete Floor 1" class="card-img-top img-fluid rounded">
                    </div>
                </div><!-- Right Page Content End -->
            </div><!-- Content row end -->


            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Choose from our selection of sealants and finishes:</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Concrete Sealer - Matte Finish</li>
                        <li class="list-group-item">Concrete Sealer - Silk Finish</li>
                        <li class="list-group-item">Concrete Sealer - Glossy/Wet Look Finish</li>
                        <li class="list-group-item">Repair Fluid to Remove Surface Whiteness on Imprinted Concrete</li>
                    </ul>
                </div>
            </div>
        </div><!-- Container end -->
    </section><!-- Main container end -->

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="call-to-action classic">
                <div class="row align-items-center">
                    <div class="col-md-8 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title" style="font-size: 20px;"><i class="fas fa-paint-roller"></i>
                                Ready to seal your concrete floor?</h3>
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
