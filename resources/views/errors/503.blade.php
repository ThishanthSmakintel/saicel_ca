@extends('default')

@section('title', 'Maintenance Mode')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row">

                <div class="col-12">
                    <div class="maintenance-page text-center">
                        <div class="maintenance-message">
                            <h2>We'll Be Back Soon!</h2>
                            <p>Our website is currently undergoing scheduled maintenance. We apologize for any inconvenience
                                this may cause. Please check back later.</p>
                            {{-- <p>Estimated downtime: <strong>2 hours</strong></p> --}}
                        </div>
                    </div>
                </div>

            </div><!-- Content row -->
        </div><!-- Container end -->
    </section><!-- Main container end -->
@endsection
