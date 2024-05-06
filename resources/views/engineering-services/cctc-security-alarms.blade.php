@extends('default')

@section('title', 'Saicel CCTV & Security Alarm Solutions')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <!-- Left Page Content -->
                <div class="col-lg-6">
                    <h3 class="column-title"><strong>CCTV & Security Alarm Solutions</strong></h3>
                    <p>We offer the latest technologies in CCTV & Alarm security systems to homes and businesses throughout
                        the UK and Sri Lanka.</p>
                    <p>We provide effective security solutions to our clients through professional CCTV systems
                        installation, an excellent maintenance service, and a one-year on-site warranty with every system
                        installed. We have a team of qualified and experienced engineers to carry out CCTV camera and
                        security alarm systems installations. We are happy to give unlimited advice on home and business
                        security.</p>
                    <p><strong>Our Aims:</strong></p>
                    <ul>
                        <li>To provide customers with the highest quality products at the most competitive prices.</li>
                        <li>To establish SAI as the UK’s and Sri Lanka's leading CCTV installation company.</li>
                        <li>To offer customers an exceptional level of customer service.</li>
                    </ul>
                    <p><strong>Additional Features:</strong></p>
                    <ul>
                        <li>Unlimited Free Advice From Experienced Professionals</li>
                        <li>Great After Sales Support</li>
                        <li>One year onsite warranty with every system</li>
                        <li>Excellent Customer Reviews</li>
                    </ul>
                </div><!-- Left Page Content End -->

                <!-- Right Page Content -->
                <div class="col-lg-6">
                    <div class="text-left">
                        <img src="{{ asset('images/services/service1.jpg') }}" alt="CCTV Image 1" class="img-fluid rounded">
                    </div>
                    <div class="text-right mt-4">
                        <img src="{{ asset('images/services/service1.jpg') }}" alt="CCTV Image 2" class="img-fluid rounded">
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
