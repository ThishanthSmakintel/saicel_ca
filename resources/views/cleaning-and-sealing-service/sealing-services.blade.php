@extends('default')

@section('title', 'Saicel Cleaning Services')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="banner-carousel banner-carousel-1 mb-0">
                <div class="banner-carousel-item"
                    style="background-image: url({{ asset('images/sealing-services/img-sealing-slide-show.png') }}); background-color: transparent; background-size: cover; background-position: center;">
                    <div class="slider-content text-left">
                        <div class="container h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-md-12">
                                    <h2 class="slide-title" data-animation-in="slideInDown">
                                        Effective <span class="low-highlight">Sealing Solutions</span> for Your Needs
                                    </h2>
                                    <h3 class="slide-title" data-animation-in="fadeIn">
                                        Enhance Protection with Quality Sealing Services
                                    </h3>
                                    <p data-animation-in="slideInRight">
                                        Discover our effective sealing solutions crafted to safeguard your assets and
                                        enhance longevity.
                                    </p>
                                    <div data-animation-in="slideInLeft">
                                        <a href="services/sealing.html" class="slider btn btn-primary border">Explore Our
                                            Sealing Services</a>
                                        {{-- <a href="about.html" class="slider btn btn-primary border"
                                            aria-label="learn-more-about-us">Learn More</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Add similar adjustments for other banner-carousel-items -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <!-- First card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/sealing-services/sealing-area-types/img-roof.jpg') }}" alt="Roof Sealing"
                            class="card-img-top" style="height: 255px;" alt="Card Image">


                        <div class="card-body d-flex flex-column">
                            <a href="{{ route('roof-sealing') }}" class="btn btn-primary mt-auto">Roof Sealing</a>

                        </div>
                    </div>
                </div>

                <!-- Second card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/sealing-services/sealing-area-types/img-wood-and-decking.jpg') }}"
                            class="card-img-top" style="height: 255px;" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                            <a href="{{ route('wood-sealing') }}" class="btn btn-primary mt-auto">Wood
                                and Decking Sealing</a>
                        </div>
                    </div>
                </div>

                <!-- Third card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/sealing-services/sealing-area-types/img-bricks.jpg') }}"
                            class="card-img-top" style="height: 255px;" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                            <a href="{{ route('brick-sealing') }}" class="btn btn-primary mt-auto">Brick Sealing</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Fourth card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/sealing-services/sealing-area-types/img-concreate.jpg') }}"
                            class="card-img-top" style="height: 250px;" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                            <a href="{{ route('concrete-sealing') }}" class="btn btn-primary mt-auto">Concrete Sealing</a>

                        </div>
                    </div>
                </div>

                <!-- Fifth card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/sealing-services/sealing-area-types/img-patios.jpg') }}"
                            class="card-img-top" style="height: 250px;" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                            <a href="{{ route('sealing-patios') }}" class="btn btn-primary mt-auto">Patios
                                Sealing</a>
                        </div>
                    </div>
                </div>

                <!-- Sixth card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/sealing-services/sealing-area-types/img-driveways.jpg') }}"
                            class="card-img-top" style="height: 250px;" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                            <a href="{{ route('sealing-driveways') }}" class="btn btn-primary mt-auto">Driveway
                                Sealing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="card mx-0 shadow">
        <div class="card-body text-left">
            <section id="ts-service-area" class="ts-service-area pb-0">
                <div class="container">
                    <div class="row text-left align-items-center">
                        <div class="col-lg-6">
                            <div class="ts-service-box">
                                <div class="ts-service-box-info">
                                    <h2 class="service-box-title fs-5"><strong>Professional Sealing Solutions</strong></h2>

                                    <p>Discover our comprehensive range of <strong>sealing solutions</strong> designed to
                                        protect your assets and prolong their lifespan:</p>
                                    <p>We offer <strong>customized sealing plans</strong> tailored to your specific
                                        requirements, ensuring <strong>maximum protection</strong> and <strong>long-lasting
                                            results</strong>.</p>
                                    <p>Our services include <strong>flexible scheduling</strong>, <strong>high-quality
                                            materials</strong>, and <strong>environmentally-friendly options</strong> for
                                        sustainable sealing solutions.</p>
                                    <p>Trust our experienced team to deliver <strong>reliable</strong> and
                                        <strong>cost-effective</strong> sealing solutions that meet your needs.
                                    </p>
                                </div>
                            </div><!-- Service box end -->
                        </div><!-- Col end -->
                        <div class="col-lg-6">
                            <div class="ts-service-box bg-image hover-zoom">
                                <img loading="lazy" class="img-fluid"
                                    src="{{ asset('images/sealing-services/img-card-sealing.png') }}"
                                    alt="sealing-service-image">
                            </div><!-- Service box end -->
                        </div><!-- Col end -->
                    </div><!--/ Title row end -->
                </div><!--/ Container end -->
            </section>
        </div>
    </section>



    <section class="card mx-0">
        <div class="row">
            <!-- Before & After Images Column -->
            <div class="col-md-6">
                <div class="row align-items-center"> <!-- Added align-items-center class -->
                    <div class="col-md-5">
                        <div class="card"> <!-- Apply custom class -->
                            <div class="card-body before-image"
                                style="font-size: 16px; background-image: url('{{ asset('images/sealing-services/img-sealing-before.jpg') }}');">
                                <!-- Content for the first nested column -->
                                <p class="mt-0 mb-0 text-center"><button class="btn btn-secondary" disabled>
                                        Before</button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center my-2" style="font-size: 56px; font-weight:bolder">
                        <!-- Adjust font size and added text-center class -->
                        vs
                    </div>
                    <div class="col-md-5">
                        <div class="card ">
                            <!-- Apply custom class and negative margin -->
                            <div class="card-body before-image"
                                style="font-size: 16px; background-image: url('{{ asset('images/sealing-services/img-sealing-after.jpg') }}');">
                                <!-- Content for the first nested column -->
                                <p class="mt-0 mb-0 text-center"><button class="btn btn-secondary" disabled>
                                        After</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Column -->
            <div class="col-md-6 my-3">
                <div class="card">
                    <div class="card-body" style="font-size: 18px;">
                        <h3 class="mb-4 text-center">Why Choose Us</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="fa-ul">
                                    <li class="mb-3"><span class="fa-li"><i
                                                class="fas fa-check-circle text-primary"></i></span>Experienced
                                        professionals</li>
                                    <li class="mb-3"><span class="fa-li"><i
                                                class="fas fa-check-circle text-primary"></i></span>High-quality sealants
                                    </li>
                                    <li class="mb-3"><span class="fa-li"><i
                                                class="fas fa-check-circle text-primary"></i></span>Long-lasting protection
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="fa-ul">
                                    <li class="mb-3"><span class="fa-li"><i
                                                class="fas fa-check-circle text-primary"></i></span>Expert consultation
                                    </li>
                                    <li class="mb-3"><span class="fa-li"><i
                                                class="fas fa-check-circle text-primary"></i></span>Transformative results
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="call-to-action classic me-2">
                    <div class="row align-items-center">
                        <div class="col-md-8 text-center text-md-left">
                            <div class="call-to-action-text">
                                <h3 class="action-title">Looking for professional Sealing services?</h3>

                            </div>
                        </div><!-- Col end -->
                        <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                            <div class="call-to-action-btn">
                                <a class="btn btn-primary" href="#">Hire Us</a>
                            </div>
                        </div><!-- col end -->
                    </div><!-- row end -->
                </div><!-- Action end --> --}}

    </section>

    <div class="card my-3">
        <h2 class="text-center">Check out our Amazing Products</h2>
        <div class="product-slider">
            @php
                $totalProducts = $products->count();
                $productsPerSlide = 4;
            @endphp

            @for ($slide = 0; $slide < ceil($totalProducts / $productsPerSlide); $slide++)
                <div class="card mx-1">
                    <div class="row">
                        @php
                            $productsInSlide = $products->slice($slide * $productsPerSlide, $productsPerSlide);
                        @endphp
                        @foreach ($productsInSlide as $product)
                            <div class="col-md-3">
                                <a href="{{ route('showThisProduct', ['id' => $product->id]) }}" class="card-link">
                                    <div class="card">
                                        <div class="card-body before-image"
                                            style="font-size: 10px; background-image: url('{{ $product->image }}');">
                                            <!-- Star rating icon -->
                                        </div>
                                        <div class="text-center mb-2">
                                            @for ($i = 0; $i < $product->rating; $i++)
                                                <i class="fas fa-star fa-2x text-warning"></i>
                                            @endfor
                                            @for ($i = $product->rating; $i < 5; $i++)
                                                <i class="far fa-star fa-2x text-warning"></i>
                                            @endfor
                                        </div>
                                        <p class="text-center">{{ $product->name }}</p>
                                        <p class="text-center"><span class="highlight">${{ $product->price }}</span></p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endfor

        </div>
    </div>






@endsection

<style>
    .before-image,
    .after-image {
        background-size: cover;
        background-position: center;
        height: 300px;

        margin: 10%;
        /* Adjust height as needed */
        color: #fff;
        /* Optional: Add text color for better readability */
    }
</style>
