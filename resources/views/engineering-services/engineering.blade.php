@extends('default')

@section('title', 'Saicel Engineering Service')

@section('content')
    <section id="main-container" class="main-container pb-2">
        <div class="container">
            <div class="row">
                <!-- Chemical Engineering Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="{{ route('chemical-engineering') }}" class="service-anchor">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/services/img-civil-engineering.webp') }}"
                                    alt="Chemical Engineering Image" />
                            </div>
                            <div class="d-flex">
                                <div class="ts-service-info">
                                    <h3 class="service-box-title">
                                        <a href="{{ route('chemical-engineering') }}">Civil Engineering</a>
                                    </h3>
                                    <p>
                                        Our civil engineering solutions encompass a wide range of services to meet
                                        industrial
                                        needs.
                                    </p>
                                    <a class="learn-more d-inline-block" href="{{ route('chemical-engineering') }}"
                                        aria-label="Civil Engineering Service Details"><i class="fa fa-caret-right"></i>
                                        Learn
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Management Planning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="{{ route('management-planning') }}" class="service-anchor">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/services/img-civil-engineering.webp') }}"
                                    alt="Management Planning Image" />
                            </div>
                            <div class="d-flex">
                                <div class="ts-service-info">
                                    <h3 class="service-box-title">
                                        <a href="{{ route('management-planning') }}">Management Planning</a>
                                    </h3>
                                    <p>
                                        Our management planning services ensure effective organization and execution of
                                        projects.
                                    </p>
                                    <a class="learn-more d-inline-block" href="{{ route('management-planning') }}"
                                        aria-label="Management Planning Service Details"><i class="fa fa-caret-right"></i>
                                        Learn
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->
                <!-- Setting Out Levelling Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="{{ route('setting-out-levelling') }}" class="service-anchor">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/services/img-civil-engineering.webp') }}"
                                    alt="Setting Out Levelling Image" />
                            </div>
                            <div class="d-flex">
                                <div class="ts-service-info">
                                    <h3 class="service-box-title">
                                        <a href="{{ route('skilled-labour-supply') }}">Skilled Labour Supply</a>
                                    </h3>
                                    <p>
                                        We provide skilled labour supply services tailored to your project requirements.
                                    </p>
                                    <a class="learn-more d-inline-block" href="{{ route('setting-out-levelling') }}"
                                        aria-label="Setting Out Levelling Service Details"><i class="fa fa-caret-right"></i>
                                        Learn
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->


                <!-- Setting Out Levelling Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="{{ route('setting-out-levelling') }}" class="service-anchor">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/services/img-civil-engineering.webp') }}"
                                    alt="Setting Out Levelling Image" />
                            </div>
                            <div class="d-flex">
                                <div class="ts-service-info">
                                    <h3 class="service-box-title">
                                        <a href="{{ route('setting-out-levelling') }}">Setting Out Levelling</a>
                                    </h3>
                                    <p>
                                        Our setting out and levelling services ensure precise construction alignment.
                                    </p>
                                    <a class="learn-more d-inline-block" href="{{ route('setting-out-levelling') }}"
                                        aria-label="Setting Out Levelling Service Details"><i class="fa fa-caret-right"></i>
                                        Learn
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Smart Sealing Solutions Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="{{ route('smart-sealing-solutions') }}" class="service-anchor">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/services/img-civil-engineering.webp') }}"
                                    alt="Smart Sealing Solutions Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    <a href="{{ route('smart-sealing-solutions') }}">Smart Sealing Solutions</a>
                                </h3>
                                <p>
                                    Our smart sealing solutions ensure tight and effective sealing, protecting your premises
                                    from external elements.
                                </p>
                                <a class="learn-more d-inline-block" href="{{ route('smart-sealing-solutions') }}"
                                    aria-label="Smart Sealing Solutions Service Details"><i class="fa fa-caret-right"></i>
                                    Learn
                                    more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Driveways Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="{{ route('driveways') }}" class="service-anchor">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/services/img-civil-engineering.webp') }}"
                                    alt="Driveways Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    <a href="{{ route('driveways') }}">Driveways</a>
                                </h3>
                                <p>
                                    Our driveway services offer durable and aesthetically pleasing solutions for your
                                    property.
                                </p>
                                <a class="learn-more d-inline-block" href="{{ route('driveways') }}"
                                    aria-label="Driveways Service Details"><i class="fa fa-caret-right"></i> Learn
                                    more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Patios Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="{{ route('patios') }}" class="service-anchor">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/services/img-civil-engineering.webp') }}" alt="Patios Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    <a href="{{ route('patios') }}">Patios</a>
                                </h3>
                                <p>
                                    Our patio services create inviting outdoor spaces for relaxation and entertainment.
                                </p>
                                <a class="learn-more d-inline-block" href="{{ route('patios') }}"
                                    aria-label="Patios Service Details"><i class="fa fa-caret-right"></i> Learn
                                    more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Concrete Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="{{ route('concrete') }}" class="service-anchor">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/services/img-civil-engineering.webp') }}"
                                    alt="Concrete Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    <a href="{{ route('concrete') }}">Concrete</a>
                                </h3>
                                <p>
                                    Our concrete services deliver strong and durable structures for various applications.
                                </p>
                                <a class="learn-more d-inline-block" href="{{ route('concrete') }}"
                                    aria-label="Concrete Service Details"><i class="fa fa-caret-right"></i> Learn
                                    more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Cavity Wall Loft Insulation Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="{{ route('cavity-wall-loft-insulation') }}" class="service-anchor">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/services/img-civil-engineering.webp') }}"
                                    alt="Cavity Wall Loft Insulation Image" />
                            </div>
                            <div class="d-flex">
                                <div class="ts-service-info">
                                    <h3 class="service-box-title">
                                        <a href="{{ route('cavity-wall-loft-insulation') }}">Cavity Wall Loft
                                            Insulation</a>
                                    </h3>
                                    <p>
                                        Our cavity wall and loft insulation services improve energy efficiency and comfort
                                        in
                                        your property.
                                    </p>
                                    <a class="learn-more d-inline-block"
                                        href="{{ route('cavity-wall-loft-insulation') }}"
                                        aria-label="Cavity Wall Loft Insulation Service Details"><i
                                            class="fa fa-caret-right"></i>
                                        Learn
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- CCTV Security Alarms Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="{{ route('cctc-security-alarms') }}" class="service-anchor">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/services/img-civil-engineering.webp') }}"
                                    alt="CCTV Security Alarms Image" />
                            </div>
                            <div class="d-flex">
                                <div class="ts-service-info">
                                    <h3 class="service-box-title">
                                        <a href="{{ route('cctc-security-alarms') }}">CCTV Security Alarms</a>
                                    </h3>
                                    <p>
                                        Our CCTV and security alarm services provide comprehensive protection for your
                                        property.
                                    </p>
                                    <a class="learn-more d-inline-block" href="{{ route('cctc-security-alarms') }}"
                                        aria-label="CCTV Security Alarms Service Details"><i
                                            class="fa fa-caret-right"></i> Learn
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Protection Screens Fitting Services Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    {{-- <a href="{{ route('protection-screens-fitting-services') }}" class="service-anchor"> --}}
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100"
                                src="{{ asset('images/services/img-civil-engineering.webp') }}"
                                alt="Protection Screens Fitting Services Image" />
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    {{-- <a href="{{ route('protection-screens-fitting-services') }}">Protection Screens --}}
                                    Fitting Services</a>
                                </h3>
                                <p>
                                    Our protection screens fitting services ensure a safe and secure environment for various
                                    applications.
                                </p>
                                <a class="learn-more d-inline-block"
                                    href="{{ route('protection-screens-Fitting-services') }}"
                                    aria-label="Protection Screens Fitting Services Service Details"><i
                                        class="fa fa-caret-right"></i> Learn
                                    more</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="container-fluid  p-4">
                    <div class="row">
                        <div class="col">
                            <p>
                                With over 20 years in the industry working on major projects across the UK, we aim for the
                                highest
                                standards of site safety, quality, efficiency, and environmental management. SAICEL UK
                                offers a wide range
                                of civil engineering solutions by a team of qualified and experienced civil engineers and
                                project managers.
                                Our project managers and engineers are SMSTS qualified and hold valid CSCS cards, giving our
                                clients peace
                                of mind that they are dealing with a single contractor who can offer quality workmanship and
                                service as per
                                their requirements.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Main row end -->
        </div>
        <!-- Container end -->
    </section>

    <style>
        /*  hovering effect */
        .service-anchor {
            display: block;
            text-decoration: none;
            transition: transform 0.3s ease-in-out;
        }

        .service-anchor:hover {
            transform: translateY(-15px);
        }
    </style>
@endsection
