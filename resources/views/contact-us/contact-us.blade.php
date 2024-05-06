@extends('default')

@section('title', 'Contact Us')

@section('content')

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row justify-content-center"> <!-- Center content -->
                <div class="col-md-8"> <!-- Adjust column width as needed -->
                    <div class="card">
                        <div class="card-body">

                            <div class="text-center">
                                <h2 class="section-title">Reaching our Offices</h2>
                                <h3 class="section-sub-title">Find Our Locations</h3>
                            </div>

                            <div class="row justify-content-center"> <!-- Center the card -->
                                <div class="col-md-6">
                                    <div class="ts-service-box-bg text-center h-100">
                                        <span class="ts-service-icon icon-round">
                                            <i class="fas fa-map-marker-alt mr-0"></i>
                                        </span>
                                        <div class="ts-service-box-content">
                                            <h4>Visit Our Canada Office</h4>
                                            <p>15 Purbrook Court<br>North York, Ontario<br>Canada M2R2B6</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- 1st row end -->

                            <div class="gap-60"></div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="column-title">We'd Love to Hear From You</h3>
                                    <!-- contact form works with formspree.io  -->
                                    <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
                                    <form id="contact-form" action="#" method="post" role="form">
                                        <div class="error-container"></div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input class="form-control form-control-name" name="name"
                                                        id="name" placeholder="" type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control form-control-email" name="email"
                                                        id="email" placeholder="" type="email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Subject</label>
                                                    <input class="form-control form-control-subject" name="subject"
                                                        id="subject" placeholder="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
                                                required></textarea>
                                        </div>
                                        <div class="text-center"> <!-- Center button -->
                                            <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- Content row -->
                        </div><!-- Card body end -->
                    </div><!-- Card end -->
                </div><!-- Column end -->
            </div><!-- Row end -->

        </div><!-- Container end -->
    </section><!-- Main container end -->

@endsection
