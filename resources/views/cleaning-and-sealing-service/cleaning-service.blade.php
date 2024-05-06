@extends('default')

@section('title', 'Saicel Cleaning Services')

@section('content')
    <section id="ContactUsCard" class="ts-service-box d-flex">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-md-6">
                    <div class="d-flex flex-column h-100 justify-content-center">
                        <h2 class="text-white" style="text-shadow: 2px 2px 2px black; font-size: 30px; margin-bottom: 20px;">
                            Cleaning Services</h2>
                        <p class="text-white" style="font-size: 12px; text-shadow: 2px 2px 2px black;">We offer a wide range
                            of cleaning services including residential, commercial, and specialized cleaning to meet your
                            needs. Our experienced team uses advanced cleaning techniques and eco-friendly products to
                            ensure a clean and healthy environment for you and your family or employees. From regular
                            maintenance cleaning to deep cleaning and sanitation, we tailor our services to exceed your
                            expectations.</p>
                    </div>
                </div>
                <div class="col-md-6 my-4">
                    <div class="card h-100"
                        style="background-color: rgba(244, 244, 244, 0.422); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <div class="card-header" style="background-color: rgba(0, 0, 0, 0.5);">
                            <h5 class="card-title text-white" style="font-weight: bold; font-size: 18px;">Contact Us</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="inputName"><i class="fas fa-user"></i> Name</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <label for="inputMobile"><i class="fas fa-phone"></i> Mobile</label>
                                    <input type="tel" class="form-control" id="inputMobile"
                                        placeholder="Enter your mobile number">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress"><i class="fas fa-map-marker-alt"></i> Address</label>
                                    <input type="text" class="form-control" id="inputAddress"
                                        placeholder="Enter your address">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-envelope"></i>
                                    Contact</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <div class="container-fluid  d-flex">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img card shadow">
                        <div class="rotate-left bg-dark"></div>
                        <div class="rotate-right bg-dark"></div>
                        <img src="{{ asset('images/banner/img-about.jpg') }}" class="img-fluid h-100" alt="img">
                        <div class="bg-white experiences">
                            <h1 class="display-3"><i class="fas  fa-check-circle fa-sm me-3"></i></h1>
                            <h5 class="fw-bold">Bringing Innovation to Cleaning</h5>



                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden py-3">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            About Us</h5>
                        <h1 class="display-5 mb-2">Delivering Excellence in Cleaning Services</h1>
                        <div class="ts-service-box ">
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><strong>Customized Cleaning Solutions</strong></h3>
                                <p>
                                    <span class="text-left">Embark on a journey with us as we strive to provide
                                        <strong>personalized cleaning plans</strong> tailored to your requirements.
                                        Enjoy the <strong>flexibility</strong> of scheduling, industry-leading
                                        <strong>cleaning standards</strong>, and <strong>eco-conscious options</strong>
                                        for a sustainable approach. Our services are <strong>cost-effective</strong>
                                        without compromising on quality, backed by our <strong>dedicated team</strong>
                                        committed to your satisfaction. Let us design a cleaning solution that meets
                                        your objectives and budget.</span>
                                </p>
                                <!-- Font Awesome Icons -->

                            </div>
                        </div><!-- Service box end -->
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Elevate Your Space with Total Clean</h2>
                <h3 class="section-sub-title">Tailored Cleaning Solutions for Your Business</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-4">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img" style="color: rgb(204, 147, 4);">
                        <i class="fas fa-industry fa-3x"></i>
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><strong>Industry-Leading Expertise</strong></h3>
                        <p>With Total Clean, you benefit from decades of expertise across various sectors:</p>
                        <ul>
                            <li><strong>Office Buildings</strong></li>
                            <li><strong>Medical Facilities</strong></li>
                            <li><strong>Educational Institutions</strong></li>
                            <li><strong>Retail Stores</strong></li>
                            <li><strong>Hospitality Establishments</strong></li>
                            <li><strong>Manufacturing Facilities</strong></li>
                        </ul>
                        <p>Our expertise ensures your space receives top-notch cleaning tailored to your industry's
                            unique needs.</p>
                    </div>
                </div><!-- Service 1 end -->
            </div><!-- Col end -->

            <div class="col-lg-4 text-center">
                <img loading="lazy" class="img-fluid" src="{{ asset('images/cleaningServices/img-middle.jpg') }}"
                    alt="service-avater-image">
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img" style="color: rgb(204, 147, 4);">
                        <i class="fas fa-industry fa-3x"></i>
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title">Tailored Cleaning Solutions</h3>
                        <p>Discover the Total Clean difference with our customized cleaning plans:</p>
                        <ul class="list-unstyled">
                            <li><strong>Flexibility:</strong> Schedule cleaning services according to your convenience
                            </li>
                            <li><strong>Specialized Protocols:</strong> Thorough cleaning methods tailored to your needs
                            </li>
                            <li><strong>Environmentally-Friendly:</strong> Choose green cleaning options for a
                                sustainable approach</li>
                            <li><strong>Add-Ons:</strong> Enhance your cleaning package with additional services</li>
                            <li><strong>Budget-Friendly:</strong> Quality services that fit your budget without
                                compromise</li>
                            <li><strong>Quality Assurance:</strong> Guaranteed satisfaction with every clean</li>
                        </ul>
                        <p>Let us create a cleaning plan that aligns perfectly with your goals and budget.</p>
                    </div>
                </div>
            </div><!-- Col end -->

        </div><!-- Content row end -->
    </div><!--/ Container end -->





    <section class="card mx-0 shadow">
        <div class="card-body text-left">
            <section id="ts-service-area" class="ts-service-area pb-0">
                <div class="container">
                    <div class="row text-left align-items-center">
                        <div class="col-lg-6">
                            <div class="ts-service-box">
                                <div class="ts-service-box-info">
                                    <h1 class="service-box-title"><strong>Bespoke Cleaning Solutions</strong></h1>
                                    <p>Experience the Total Clean difference with our <strong>customized cleaning
                                            plans</strong> tailored to your needs:</p>
                                    <p><strong>Flexibility</strong> tailored to your schedule, <strong>specialized
                                            protocols</strong> for thorough cleaning, and <strong>environmentally-friendly
                                            options</strong> for a green clean. Add-ons are available to enhance your
                                        cleaning package, with <strong>budget-friendly options</strong> that don't
                                        compromise quality. We offer <strong>quality assurance</strong> to guarantee your
                                        satisfaction.</p>
                                    <p>Let us craft a cleaning plan that fits your <strong>goals</strong> and
                                        <strong>budget</strong> perfectly.
                                    </p>
                                </div>
                            </div><!-- Service box end -->
                        </div><!-- Col end -->
                        <div class="col-lg-6">
                            <div class="ts-service-box bg-image hover-zoom">
                                <img loading="lazy" class="img-fluid"
                                    src="{{ asset('images/cleaningServices/img-right.jpg') }}" alt="service-avater-image">
                            </div><!-- Service box end -->
                        </div><!-- Col end -->
                    </div><!--/ Title row end -->
                </div><!--/ Container end -->
            </section>
        </div>
    </section>



    <section class="ts-service-area pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Check out </h2>
                    <h3 class="section-sub-title">Our Cleaning Services</h3>
                </div>
            </div>
            <div class="row">

                <!-- Car Dealership & Showroom Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/card-img/img-cleaning-card-img (2).png') }}"
                                    alt="Car Dealership & Showroom Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Car Dealership & Showroom Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for car dealerships and showrooms ensure a pristine and welcoming
                                    environment for your customers.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Car Dealership & Showroom Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Hospitality, Hotel & Pub Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/card-img/img-cleaning-card-img (1).png') }}"
                                    alt="Hospitality, Hotel & Pub Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Hospitality, Hotel & Pub Cleaning
                                </h3>
                                <p>
                                    Our cleaning services cater to the unique requirements of hospitality businesses,
                                    ensuring cleanliness and hygiene standards are maintained at all times.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Hospitality, Hotel & Pub Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Healthcare & Medical Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/card-img/img-cleaning-card-img (3).png') }}"
                                    alt="Healthcare & Medical Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Healthcare & Medical Cleaning
                                </h3>
                                <p>
                                    Our specialized cleaning services for healthcare and medical facilities prioritize
                                    cleanliness and infection control to ensure the safety of patients and staff.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Healthcare & Medical Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Daily Office Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/card-img/img-cleaning-card-img (2).png') }}"
                                    alt="Daily Office Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Daily Office Cleaning
                                </h3>
                                <p>
                                    Our office cleaning services ensure a clean and hygienic workspace for increased
                                    productivity and employee well-being.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Daily Office Cleaning Service Details"><i class="fa fa-caret-right"></i>
                                    Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Fintech Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/card-img/img-cleaning-card-img (3).png') }}"
                                    alt="Fintech Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Fintech Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for fintech companies maintain a clean and professional
                                    environment, adhering to industry standards and regulations.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Fintech Cleaning Service Details"><i class="fa fa-caret-right"></i> Learn
                                    more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Banking and Finance Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/card-img/img-cleaning-card-img (4).png') }}"
                                    alt="Banking and Finance Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Banking and Finance Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for banking and finance institutions ensure a clean and
                                    professional environment for staff and clients alike.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Banking and Finance Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Property Management Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/card-img/img-cleaning-card-img (5).png') }}"
                                    alt="Property Management Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Property Management Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for property management companies maintain the cleanliness and
                                    appeal of residential and commercial properties.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Property Management Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Professional Practices Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/card-img/img-cleaning-card-img (6).png') }}"
                                    alt="Professional Practices Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Professional Practices Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for professional practices ensure a clean and welcoming
                                    environment for clients and staff.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Professional Practices Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Public Sector Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/card-img/img-cleaning-card-img (7).png') }}"
                                    alt="Public Sector Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Public Sector Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for public sector organizations maintain cleanliness and hygiene
                                    in government facilities and offices.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Public Sector Cleaning Service Details"><i class="fa fa-caret-right"></i>
                                    Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Retail, Gym and Leisure Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/card-img/img-cleaning-card-img (8).png') }}"
                                    alt="Retail, Gym and Leisure Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Retail, Gym and Leisure Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for retail, gym, and leisure facilities ensure a clean and
                                    hygienic environment for customers and patrons.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Retail, Gym and Leisure Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Schools & Educational Facilities Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/card-img/img-cleaning-card-img (9).png') }}"
                                    alt="Schools & Educational Facilities Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Schools & Educational Facilities Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for schools and educational facilities promote a clean and safe
                                    learning environment for students and staff.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Schools & Educational Facilities Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- TV, Radio and Film Studio Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/card-img/img-cleaning-card-img (10).png') }}"
                                    alt="TV, Radio and Film Studio Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    TV, Radio and Film Studio Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for TV, radio, and film studios maintain cleanliness and hygiene
                                    standards to ensure a conducive working environment.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="TV, Radio and Film Studio Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Pharmaceutical Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/card-img/img-cleaning-card-img (11).png') }}"
                                    alt="Pharmaceutical Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Pharmaceutical Cleaning
                                </h3>
                                <p>
                                    Our specialized cleaning services for pharmaceutical facilities adhere to strict
                                    cleanliness and safety standards to meet regulatory requirements.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Pharmaceutical Cleaning Service Details"><i class="fa fa-caret-right"></i>
                                    Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->


            </div><!-- Row end -->
            <div class="call-to-action classic">
                <div class="row align-items-center">
                    <div class="col-md-8 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">Looking for professional cleaning services?</h3>

                        </div>
                    </div><!-- Col end -->
                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                        <div class="call-to-action-btn">
                            <a class="btn btn-primary" href="#">Hire Us</a>
                        </div>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- Action end -->
        </div><!-- Container end -->

    </section><!-- Service end -->
@endsection
<style>
    /* Background image for medium-sized screens */
    @media (min-width: 768px) {
        #ContactUsCard {
            background-image: url('{{ asset('images/cleaningServices/img-cleaning-page-1-md.png') }}');
            background-size: cover;
            color: rgb(255, 255, 255);


            input[type="text"]::placeholder,
            input[type="tel"]::placeholder {
                color: rgb(0, 0, 0);

            }
        }
    }

    /* Background image for mobile devices */
    @media (max-width: 767px) {
        #ContactUsCard {
            display: block;
            width: 100%;
            color: rgb(255, 255, 255);
            background-image: url('{{ asset('images/cleaningServices/img-cleaning-page-1-mobile.png') }}');
            background-size: contain;
            background-repeat: no-repeat;

            text-shadow: 2px 2px 2px black;
            box-shadow: 0 0 10px rgba(5, 0, 0, 0.5);
            background-color: rgb(176, 175, 175);
            /* Darken the background */
        }

        input[type="text"]::placeholder,
        input[type="tel"]::placeholder {
            color: rgb(0, 0, 0);
            text-shadow: 2px 2px 2px rgb(255, 252, 252);
        }
    }
</style>
