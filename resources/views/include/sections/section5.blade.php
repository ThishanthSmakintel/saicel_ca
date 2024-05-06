{{-- <section id="project-area" class="project-area solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title"><img src="{{ asset('images/logos/cpdLogo.png') }}" alt="CPD Logo"></h2>
                <h3 class="section-sub-title">UK CPD accredited Free Online Courses </h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-12">
                <div class="shuffle-btn-group">
                    <label class="active mb-2 mb-md-0 me-md-2" for="all">
                        <input type="radio" name="shuffle-filter" id="all" value="all"
                            checked="checked" />Show All
                    </label>
                    <label class="mb-2 mb-md-0 me-md-2" for="health">
                        <input type="radio" name="shuffle-filter" id="health" value="health" />Health, Care &
                        Medication
                    </label>
                    <label class="mb-2 mb-md-0 me-md-2" for="sales">
                        <input type="radio" name="shuffle-filter" id="sales" value="sales" />Sales & Marketing
                    </label>
                    <label class="mb-2 mb-md-0 me-md-2" for="education">
                        <input type="radio" name="shuffle-filter" id="education" value="education" />Educational &
                        Teaching
                    </label>
                    <label class="mb-2 mb-md-0 me-md-2" for="management">
                        <input type="radio" name="shuffle-filter" id="management" value="management" />Management &
                        Law
                    </label>
                    <label class="mb-2 mb-md-0 me-md-2" for="it">
                        <input type="radio" name="shuffle-filter" id="it" value="it" />IT & Computing
                    </label>
                    <label class="mb-2 mb-md-0 me-md-2" for="engineering">
                        <input type="radio" name="shuffle-filter" id="engineering" value="engineering" />Engineering
                    </label>
                    <label class="mb-2 mb-md-0 me-md-2" for="language">
                        <input type="radio" name="shuffle-filter" id="language" value="language" />English & Other
                        Language
                    </label>
                    <label class="mb-2 mb-md-0 me-md-2" for="personalDevelopment">
                        <input type="radio" name="shuffle-filter" id="personalDevelopment"
                            value="personalDevelopment" />Personal Development
                    </label>
                </div>
                <!-- project filter end -->

                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>

                    <!-- Dummy project cards -->
                    <div class="col-lg-4 col-md-6 shuffle-item " data-groups='["healthcare"]'>
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('images/projects/project1.jpg') }}"
                                aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('images/projects/project1.jpg') }}"
                                    alt="project-img" />
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Project Title 1</a>
                                    </h3>
                                    <p class="project-cat">
                                        Project Category 1
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of dummy project card -->

                    <!-- Repeat the above structure for other dummy project cards -->
                    <!-- Dummy project card 2 -->
                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups='["sales"]'>
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('images/projects/project2.jpg') }}"
                                aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('images/projects/project2.jpg') }}"
                                    alt="project-img" />
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Project Title 2</a>
                                    </h3>
                                    <p class="project-cat">
                                        Project Category 2
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of dummy project card 2 -->


                    <!-- Dummy project card 2 -->
                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups='["government"]'>
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('images/projects/project2.jpg') }}"
                                aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('images/projects/project2.jpg') }}"
                                    alt="project-img" />
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Project Title 2</a>
                                    </h3>
                                    <p class="project-cat">
                                        Project Category 2
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of dummy project card 2 -->


                    <!-- Dummy project card 2 -->
                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups='["language"]'>
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('images/projects/project2.jpg') }}"
                                aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('images/projects/project2.jpg') }}"
                                    alt="project-img" />
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Language</a>
                                    </h3>
                                    <p class="project-cat">
                                        Project Category 2
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of dummy project card 2 -->





                    <!-- Repeat the above structure for other dummy project cards -->
                </div>
                <!-- shuffle end -->
            </div>

            <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="projects.html">View All Projects</a>
                </div>
            </div>
        </div>
        <!-- Content row end -->
    </div>
    <!--/ Container end -->
</section> --}}
