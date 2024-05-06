<div class="banner-carousel banner-carousel-1 mb-0">

    <div class="banner-carousel-item"
        style="background-image: url({{ asset('images/slider-main/img-cleaning.png') }}); background-color: transparent;">
        <div class="slider-content text-right">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12">
                        <h2 class="slide-title" data-animation-in="slideInDown"
                            style="font-size: 32px; font-weight: bold;">
                            Experience Spotless Cleanliness with <span class="low-highlight">
                                Our Cleaning
                                Services</span>
                        </h2>
                        <h3 class="slide-sub-title" data-animation-in="fadeIn"
                            style="font-size: 15px; font-weight: bold;">
                            Transform Your Environment with Professional Cleaning
                        </h3>
                        <p class="slider-description lead" data-animation-in="slideInRight"
                            style="font-size: 16px; font-weight: bold;">
                            Discover our comprehensive cleaning services tailored to meet your needs and ensure a
                            pristine environment for all.
                        </p>
                        <div data-animation-in="slideInLeft">
                            <a href="{{ route('cleaning-services') }}" class="slider btn btn-primary"
                                aria-label="contact-with-us">Explore Our Cleaning Services</a>
                            <a href="{{ route('contact-us') }}" class="slider btn btn-primary border"
                                aria-label="learn-more-about-us">contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-carousel-item"
        style="background-image: url({{ asset('images/cleaningServices/img-slideshow.jpg') }}); background-color: transparent;">
        <div class="slider-content text-left">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12">
                        <h2 class="slide-title" data-animation-in="slideInDown"
                            style="font-size: 32px; font-weight: bold;">
                            Protect and Beautify Your Surfaces with <span class="low-highlight">Our Cleaning
                                solution</span>
                        </h2>
                        <h3 class="slide-title" data-animation-in="fadeIn" style="font-size: 15px; font-weight: bold;">
                            Sealing Excellence for Long-Lasting Protection
                        </h3>
                        <p data-animation-in="slideInRight" style="font-size: 16px; font-weight: bold;"
                            class="slideParagraph">
                            Unlock the potential of your surfaces with our advanced sealing solutions, offering both
                            protection and aesthetic enhancement.
                        </p>
                        <div data-animation-in="slideInLeft">
                            <a href="{{ route('sealing-services') }}" class="slider btn btn-primary border">Explore Our
                                Sealing Services</a>
                            <a href="{{ route('contact-us') }}" class="slider btn btn-primary border"
                                aria-label="learn-more-about-us">contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-carousel-item"
        style="background-image: url({{ asset('images/property-management/img-landingpage-card-property-management.png') }}); background-color: transparent;">
        <div class="slider-content text-left">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12">
                        <h2 class="slide-title" data-animation-in="slideInDown"
                            style="font-size: 32px; font-weight: bold;">
                            Comprehensive <span class="low-highlight">Property Management Solutions
                            </span> for Your Assets
                        </h2>
                        <p data-animation-in="slideInRight" style="font-size: 16px; font-weight: bold;"
                            class="slideParagraph">
                            Explore our property management solutions to maximize asset value and elevate property
                            performance.
                        </p>
                        <div data-animation-in="slideInLeft">
                            <a href="{{ route('home-page') }}" class="slider btn btn-primary border">Explore Our
                                Property Management Services</a>
                            <a href="{{ route('contact-us') }}" class="slider btn btn-primary border"
                                aria-label="learn-more-about-us">contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    .slide-title,
    .slide-sub-title,
    .slider-description,
    .slider.btn {
        font-weight: bold;
    }

    .slide-title,
    .slide-sub-title,
    .slider-description,
    .slideParagraph {
        text-shadow: 2px 2px 2px black;
    }

    .slider.btn {
        text-shadow: 1px 1px 1px black;
    }

    .slide-title {
        font-size: 32px;
    }

    .slide-sub-title {
        font-size: 15px;
    }

    .slider-description {
        font-size: 16px;
    }

    .slider.btn {
        font-size: 16px;
    }
</style>
