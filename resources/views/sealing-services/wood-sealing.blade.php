@extends('default')

@section('title', 'Saicel Wood Sealing Services')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <!-- Wood Sealing Section -->
            <div class="row mt-4">
                <div class="col-lg-12">
                    <h1 class="column-title text-center mb-4"><strong>Wood Sealing Services</strong></h1>

                    <p class="text-left">Wood sealing is essential for preserving the beauty and durability of your wooden
                        structures, such as decks, fences, and furniture. Sealing your wood helps protect it from water
                        damage, rot, UV rays, and other environmental factors.</p>
                    <p class="text-left">Our wood sealing service involves thorough cleaning and preparation of the wood
                        surface, followed by the application of a high-quality sealant to ensure long-lasting protection and
                        enhance the natural beauty of the wood.</p>
                    <p class="text-left">Contact us today to learn more about our wood sealing service and how it can help
                        protect and enhance your wooden structures.</p>
                </div>
            </div><!-- Wood Sealing Section End -->

            <!-- Content Row -->
            <div class="row mt-5">
                <!-- Left Page Content -->
                <div class="col-lg-6">
                    <h3 class="column-title"><strong>Deck Sealing</strong></h3>
                    <ul class="list-unstyled" style="padding-left: 20px;">
                        <li><i class="fas fa-check-circle text-primary"></i> Enhance the longevity and appearance of your
                            deck.</li>
                        <li><i class="fas fa-check-circle text-primary"></i> Protect against water damage, rot, and UV rays.
                        </li>
                        <li><i class="fas fa-check-circle text-primary"></i> Preserve the natural beauty of the wood.</li>
                    </ul>
                </div><!-- Left Page Content End -->

                <!-- Right Page Content -->
                <div class="col-lg-6">
                    <h3 class="column-title"><strong>Fence Sealing</strong></h3>
                    <ul class="list-unstyled" style="padding-left: 20px;">
                        <li><i class="fas fa-check-circle text-primary"></i> Extend the lifespan of your fence.</li>
                        <li><i class="fas fa-check-circle text-primary"></i> Prevent warping, cracking, and decay.</li>
                        <li><i class="fas fa-check-circle text-primary"></i> Maintain the color and texture of the wood.
                        </li>
                    </ul>
                </div><!-- Right Page Content End -->

            </div><!-- Content row end -->

            <!-- Image Row -->
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="card">
                        <img src="{{ asset('images\sealing-services\sealing-area-types\img-wood-sealing.jpg') }}"
                            class="card-img-top">
                        <div class="card-body">

                            <p class="card-text">Protect and enhance the beauty of your deck with our professional sealing
                                service.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <img src="{{ asset('images\sealing-services\sealing-area-types\img-woord-sealing.jpg') }}"
                            class="card-body">

                        <p class="card-text">Preserve the integrity and appearance of your fence with our expert sealing
                            solutions.</p>
                    </div>
                </div>

            </div>
        </div><!-- Image Row end -->
        </div><!-- Container end -->
    </section><!-- Main container end -->
@endsection
