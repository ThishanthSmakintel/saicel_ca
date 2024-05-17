<section id="project-area" class="project-area solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Experience us</h2>
                <h3 class="section-sub-title">book our serviess</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-12">
                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>

                    <div class="col-lg-4 col-md-6 shuffle-item">
                        <div class="project-img-container">
                            <a class="gallery-popup"
                                href="{{ asset('images/services-images/img-landing-page-service-card-property-cleaning.png') }}"
                                aria-label="project-img">
                                <img class="img-fluid"
                                    src="{{ asset('images/services-images/img-landing-page-service-card-property-cleaning.png') }}"
                                    alt="project-img">

                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{ route('contact-us') }}">Residential Cleaning & Sealing</a>
                                    </h3>
                                    <p class="project-cat"> Book now</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 1 end -->


                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup"
                                href="{{ asset('images/services-images/img-landing-page-service-card-commerical.png') }}"
                                aria-label="project-img">
                                <img class="img-fluid"
                                    src="{{ asset('images/services-images/img-landing-page-service-card-commerical.png') }}"
                                    alt="project-img">
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{ route('contact-us') }}">Commercial Cleaning & Sealing
                                        </a>
                                    </h3>
                                    <p class="project-cat"> Book now</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 2 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item">
                        <div class="project-img-container">
                            <a class="gallery-popup"
                                href="{{ asset('images/services-images/img-landing-page-service-card-carpet-cleaing.jpg') }}"
                                aria-label="project-img">
                                <img class="img-fluid"
                                    src="{{ asset('images/services-images/img-landing-page-service-card-carpet-cleaing.jpg') }}"
                                    alt="project-img">
                            </a>

                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{ route('contact-us') }}">Carpet Cleaning
                                        </a>
                                    </h3>
                                    <p class="project-cat"> Book now</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 3 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item">
                        <div class="project-img-container">
                            <a class="gallery-popup"
                                href="{{ asset('images/services-images/img-landing-page-service-card-gardening.png') }}"
                                aria-label="project-img">
                                <img class="img-fluid"
                                    src="{{ asset('images/services-images/img-landing-page-service-card-gardening.png') }}"
                                    alt="project-img">
                            </a>

                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{ route('contact-us') }}">Garden Cleaning</a>
                                    </h3>
                                    <p class="project-cat"> Book now</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 4 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item">
                        <div class="project-img-container">
                            <a class="gallery-popup"
                                href="{{ asset('images/services-images/img-landing-page-service-card-drive-away.png') }}"
                                aria-label="project-img">
                                <img class="img-fluid"
                                    src="{{ asset('images/services-images/img-landing-page-service-card-drive-away.png') }}"
                                    alt="project-img">
                            </a>

                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{ route('contact-us') }}">Driveways Cleaning & Sealing</a>
                                    </h3>
                                    <p class="project-cat"> Book now</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 5 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item">
                        <div class="project-img-container">
                            <a class="gallery-popup"
                                href="{{ asset('images/services-images/img-landing-page-service-card-property-maaintance.png') }}"
                                aria-label="project-img">
                                <img class="img-fluid"
                                    src="{{ asset('images/services-images/img-landing-page-service-card-property-maaintance.png') }}"
                                    alt="project-img">
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="{{ route('contact-us') }}">Property Maintenance Services</a>
                                    </h3>
                                    <p class="project-cat"> Book now</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 6 end -->
                </div><!-- shuffle end -->
            </div>

            {{-- <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="projects.html">View All Projects</a>
                </div>
            </div> --}}

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Project area end -->


<style>
    .shuffle-item {
        margin-bottom: 30px;
        /* Adjust margin as needed */
    }

    .project-img-container {
        height: 250px;
        /* Set a fixed height for all cards */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .project-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensure the image covers the container */
    }
</style>
