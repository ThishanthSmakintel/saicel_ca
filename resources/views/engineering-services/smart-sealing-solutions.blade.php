@extends('default')

@section('title', 'Saicel Smart Sealing and Painting Solutions')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Smart Sealing and Painting Solutions</h2>
                    <h3 class="section-sub-title">Welcome to Smart Seal Solutions</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-md-12">
                    <p>With over 15 years of experience in the industry, Smart Seal Solutions offers the best services in:
                    </p>
                    <ul>
                        <li>Driveway Cleaning/Sealing</li>
                        <li>Block Paving Cleaning/Sealing</li>
                        <li>Patio Cleaning/Sealing</li>
                        <li>Concrete Cleaning/Sealing/Painting</li>
                        <li>Carpet Washing</li>
                    </ul>
                </div><!-- Col 1 end -->
            </div><!-- 1st row end -->

            <div class="row">
                <div class="col-md-12">
                    <p>Both block paving and concrete benefit from regular maintenance. Block paving tends to attract moss
                        and weeds, while the sand in the joints can eventually migrate, leading to sinking and spreading
                        over time. Pattern imprinted concrete should be resealed every three to five years, depending on
                        location and traffic, to maintain the color and luster of its appearance.</p>
                </div><!-- Col 1 end -->
            </div><!-- 2nd row end -->

            <div class="row">
                <div class="col-md-12">
                    <p>SAI's Smart Seal Solutions provide excellent service and ensure customer satisfaction.</p>
                </div><!-- Col 1 end -->
            </div><!-- 3rd row end -->

            <div class="row text-center">
                <div class="col-12">
                    <h3 class="section-sub-title">Our Services Include</h3>
                </div>
            </div><!-- 4th row heading -->
            <div class="gap-5"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/services/service1.jpg') }}" class="card-img-top" alt="Driveways">
                        <div class="card-body">
                            <h5 class="card-title">Driveways</h5>
                        </div>
                    </div>
                </div><!-- Col 1 end -->

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/services/service1.jpg') }}" class="card-img-top" alt="Patios">
                        <div class="card-body">
                            <h5 class="card-title">Patios</h5>
                        </div>
                    </div>
                </div><!-- Col 2 end -->

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/services/service1.jpg') }}" class="card-img-top" alt="Concrete Floors">
                        <div class="card-body">
                            <h5 class="card-title">Concrete Floors</h5>
                        </div>
                    </div>
                </div><!-- Col 3 end -->
            </div><!-- 1st row end -->
        </div><!-- Container end -->
    </section><!-- Main container end -->
@endsection
